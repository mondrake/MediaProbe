<?php

declare(strict_types=1);

namespace FileEye\MediaProbe;

use FileEye\MediaProbe\Collection\CollectionFactory;
use FileEye\MediaProbe\Data\DataElement;
use FileEye\MediaProbe\Data\DataFile;
use FileEye\MediaProbe\Model\RootBlockBase;
use Monolog\Handler\TestHandler;
use Monolog\Level;
use Monolog\Logger;
use Monolog\Processor\PsrLogMessageProcessor;
use Psr\Log\LoggerInterface;

/**
 * Class to handle media data.
 *
 * This is the root class of any media file, and the base for accessing any
 * of its DOM-represented components.
 */
class Media extends RootBlockBase
{
    public function __construct(
        ?LoggerInterface $externalLogger,
        ?Level $failLevel,
    ) {
        parent::__construct(
            definition: new ItemDefinition(CollectionFactory::get('Media')),
            failLevel: $failLevel,
            logger: (new Logger('mediaprobe'))
                ->pushHandler(new TestHandler(Level::Info))
                ->pushProcessor(new PsrLogMessageProcessor()),
            externalLogger: $externalLogger,
        );
    }

    /**
     * Creates a Media object from a file.
     *
     * @param string $path
     *   The path to a media file on the file system.
     * @param ?LoggerInterface $externalLogger
     *   (Optional) a PSR-3 compliant logger callback.
     * @param ?string $failLevel
     *   (Optional) a PSR-3 compliant log level. Any log entry at this level or above will force
     *   media parsing to stop.
     */
    public static function createFromFile(
        string $path,
        ?LoggerInterface $externalLogger = null,
        ?string $failLevel = null,
    ): Media {
        $dataFile = new DataFile($path);
        return static::createFromDataElement($dataFile, $dataFile->typeHints, $externalLogger, $failLevel);
    }

    /**
     * Creates a Media object from data.
     *
     * @param DataElement $dataElement
     *   The data element providing the data.
     * @param list<string> $typeHints
     *   (Optional) a list of most likely MIME types.
     * @param ?LoggerInterface $externalLogger
     *   (Optional) a PSR-3 compliant logger callback.
     * @param ?string $failLevel
     *   (Optional) a PSR-3 compliant log level. Any log entry at this level or above will force
     *   media parsing to stop.
     */
    public static function createFromDataElement(
        DataElement $dataElement,
        array $typeHints = [],
        ?LoggerInterface $externalLogger = null,
        ?string $failLevel = null,
    ): Media {
        $media = new Media(
            externalLogger: $externalLogger,
            failLevel: $failLevel ? Logger::toMonologLevel($failLevel) : null,
        );

        $media->getStopwatch()->start('media-parsing');

        try {
            // Determine the media type.
            $mediaTypeCollection = MediaTypeResolver::fromDataElement($dataElement, $typeHints);
            $media->mimeType = (string) $mediaTypeCollection->getPropertyValue('item');
            assert($media->debugInfo(['dataElement' => $dataElement]));
            // Build the Media immediate child object, that represents the actual media. Then
            // parse the media according to the media format.
            $mediaTypeHandler = $mediaTypeCollection->getHandler();
            $mediaTypeBlock = new $mediaTypeHandler(new ItemDefinition($mediaTypeCollection), $media);
#            dump($mediaTypeBlock);
#            $mediaTypeBlock = $media->addBlock(new ItemDefinition($mediaTypeCollection));
#            assert($mediaTypeBlock instanceof BlockInterface);
            $mediaTypeBlock->parseData($dataElement);
            $media->level = $mediaTypeBlock->level();
        } catch (MediaProbeException $e) {
            assert($media->debugInfo(['dataElement' => $dataElement]));
            $media->critical($e->getMessage());
        }

        $media->getStopwatch()->stop('media-parsing');

        return $media;
    }

    /**
     * Save the Media object as a file.
     *
     * @param string $path
     *   The path to the media file on the file system.
     *
     * @return int
     *   The number of bytes that were written to the file.
     *
     * @throws MediaProbeException
     */
    public function saveToFile(string $path): int
    {
        $size = file_put_contents($path, $this->toBytes());
        if ($size === false) {
            throw new MediaProbeException('File save failed');
        }
        return $size;
    }
}
