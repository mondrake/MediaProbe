<?php declare(strict_types=1);

namespace FileEye\MediaProbe;

use FileEye\MediaProbe\Model\RootBlockBase;
use FileEye\MediaProbe\Block\Jpeg;
use FileEye\MediaProbe\Block\Tiff;
use FileEye\MediaProbe\Collection\CollectionInterface;
use FileEye\MediaProbe\Collection\CollectionFactory;
use FileEye\MediaProbe\Data\DataElement;
use FileEye\MediaProbe\Data\DataFile;
use FileEye\MediaProbe\Data\DataString;
use FileEye\MediaProbe\Utility\ConvertBytes;
use Monolog\Logger;
use Monolog\Handler\TestHandler;
use Monolog\Level;
use Monolog\Processor\PsrLogMessageProcessor;
use PrettyXml\Formatter;
use Psr\Log\LoggerInterface;
use Symfony\Component\Stopwatch\Stopwatch;

/**
 * Class to handle media data.
 *
 * This is the root class of any media file, and the base for accessing any
 * of its DOM-represented components.
 */
class Media extends RootBlockBase
{
    /**
     * The internal Monolog logger instance for this Media object.
     */
    protected Logger $logger;

    /**
     * The minimum log level for failure.
     *
     * MediaProbe normally intercepts and logs media parsing issues without
     * breaking the flow. However it is possible to enable hard failures by
     * defining the minimum log level at which the parsing process will break
     * and throw an InvalidFileException.
     */
    protected ?Level $failLevel;

    /**
     * An XML prettify formatter.
     */
    protected Formatter $xmlFormatter;

    /**
     * A Symfony stopwatch.
     */
    private Stopwatch $stopWatch;

    /**
     * Constructs a Media object.
     *
     * @param ?LoggerInterface $externalLogger
     *            (Optional) a PSR-3 compliant logger callback.
     *            Consuming code can have higher level logging facilities in place.
     *            Any entry sent to the internal logger will also be sent to the
     *            callback, if specified.
     * @param ?string $failLevel
     *            (Optional) a PSR-3 compliant log level. Any log entry at this
     *            level or above will force media parsing to stop.
     */
    public function __construct(
        protected ?LoggerInterface $externalLogger,
        ?string $failLevel,
    )
    {
        $media = new ItemDefinition(CollectionFactory::get('MediaType'));
        parent::__construct($media);
        $this->logger = (new Logger('mediaprobe'))
          ->pushHandler(new TestHandler(Logger::INFO))
          ->pushProcessor(new PsrLogMessageProcessor());
        $this->failLevel = $failLevel ? Logger::toMonologLevel($failLevel) : null;
        $this->stopWatch = new Stopwatch();
    }

    /**
     * Creates a Media object from a file.
     *
     * @param string $path
     *            The path to a media file on the file system.
     * @param \Psr\Log\LoggerInterface|null $externalLogger
     *            (Optional) a PSR-3 compliant logger callback.
     * @param string|null $failLevel
     *            (Optional) a PSR-3 compliant log level. Any log entry at this
     *            level or above will force media parsing to stop.
     *
     * @return Media
     *            The Media object.
     *
     * @throws InvalidFileException
     *            On failure.
     */
    public static function parseFromFile(string $path, ?LoggerInterface $externalLogger = null, ?string $failLevel = null): Media
    {
        // @todo lock file while reading, capture fstats to prevent overwrites.
        $dataFile = new DataFile($path);
        return static::parse($dataFile, $externalLogger, $failLevel);
    }

    /**
     * Creates a Media object from data.
     *
     * @param DataElement $dataElement
     *            The data element providing the data.
     * @param \Psr\Log\LoggerInterface|null $externalLogger
     *            (Optional) a PSR-3 compliant logger callback.
     * @param string|null $failLevel
     *            (Optional) a PSR-3 compliant log level. Any log entry at this
     *            level or above will force media parsing to stop.
     *
     * @return Media
     *            The Media object.
     */
    public static function parse(DataElement $dataElement, ?LoggerInterface $externalLogger = null, ?string $failLevel = null): Media
    {
        // Determine the media format.
        $mediaType = new ItemDefinition(static::getMatchingMediaCollection($dataElement));

        // Build the Media object and its immediate child, that represents the
        // media format. Then parse the media according to the media format.
        $media = new static($externalLogger, $failLevel);
        $media->getStopwatch()->start('media-parsing');
        assert($media->debugInfo(['dataElement' => $dataElement]));
        $media->addBlock($mediaType)->parseData($dataElement);
        $media->getStopwatch()->stop('media-parsing');

        return $media;
    }

    /**
     * @todo remove, replace by parser
     */
    protected function doParseData(DataElement $data): void
    {
    }

    /**
     * Determines the media format collection of the media data.
     *
     * @param DataElement $dataElement
     *            the data element that will provide the data.
     *
     * @return Collection
     *            The media format collection.
     *
     * @throws InvalidFileException
     *            On failure.
     */
    protected static function getMatchingMediaCollection(DataElement $dataElement): CollectionInterface
    {
        $media_collection = CollectionFactory::get('Media');
        // Loop through the 'Media' collection items, each of which defines a
        // media format collection, and checks if the media matches the format.
        // When a match is found, return the media format collection.
        foreach ($media_collection->listItemIds() as $media_format_collection_id) {
            $format_collection = $media_collection->getItemCollection($media_format_collection_id);
            $format_class = $format_collection->getPropertyValue('class');
            if ($format_class::isDataMatchingFormat($dataElement)) {
                return $format_collection;
            }
        }

        throw new InvalidFileException('Media format not managed by MediaProbe');
    }

    /**
     * Determines the MIME type of the media.
     *
     * @return string
     */
    public function getMimeType(): string
    {
        return $this->getElement('*')->getMimeType();
    }

    /**
     * Save the Media object as a file.
     *
     * @param string $path
     *            The path to the media file on the file system.
     *
     * @return int
     *            The number of bytes that were written to the file.
     *
     * @throws InvalidFileException
     *            On failure.
     */
    public function saveToFile(string $path): int
    {
        $size = file_put_contents($path, $this->toBytes());
        if ($size === false) {
            throw new InvalidFileException('File save failed');
        }
        return $size;
    }

    /**
     * Returns the DOM structure of the Media object as an XML string.
     *
     * @param bool $pretty
     *            TRUE if the XML should be prettified.
     *
     * @return string
     */
    public function toXml(bool $pretty = false): string
    {
        if ($pretty && !$this->$xmlFormatter) {
            $this->$xmlFormatter = new Formatter();
        }
        $xml = $this->DOMNode->ownerDocument->saveXML();
        return $pretty ? $this->$xmlFormatter->format($xml) : $xml;
    }

    /**
     * Returns the log entries of the Media object.
     *
     * @param string $level_name
     *            (Optional) If specified, filters only the entries of the
     *            specified severity level.
     *
     * @return array
     *            An array of Monolog entries.
     */
    public function dumpLog(?string $level_name = null): array
    {
        $handler = $this->logger->getHandlers()[0];
        $ret = [];
        foreach ($handler->getRecords() as $record) {
            if (($level_name && $record['level_name'] === $level_name) || !$level_name) {
                $ret[] = $record;
            }
        }
        return $ret;
    }

    /**
     * Returns the stopwatch.
     */
    public function getStopwatch(): Stopwatch
    {
        return $this->stopWatch;
    }
}
