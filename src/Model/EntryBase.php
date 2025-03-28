<?php declare(strict_types=1);

namespace FileEye\MediaProbe\Model;

use FileEye\MediaProbe\Data\DataElement;
use FileEye\MediaProbe\Data\DataFormat;
use FileEye\MediaProbe\Dumper\DumperInterface;
use FileEye\MediaProbe\Utility\ConvertBytes;

/**
 * Base class for EntryInterface objects.
 *
 * As this class is abstract you cannot instantiate objects from it. It only
 * serves as a common ancestor to define the methods common to all entries.
 */
abstract class EntryBase extends ElementBase implements EntryInterface
{
    /**
     * The DOM name for EntryInterface nodes.
     */
    const DOM_NODE_NAME = 'entry';

    protected string $formatName;

    /**
     * The format of this entry.
     */
    protected int $format;

    /**
     * The size, in bytes, of each component held.
     */
    protected int $formatSize = 1;

    /**
     * The number of components of this entry.
     */
    protected int $components;

    /**
     * The data element held by this entry.
     */
    protected DataElement $dataElement;

    /**
     * Constructs an EntryInterface object.
     *
     * @param BlockInterface $parent
     *            xx
     * @param DataElement $dataElement
     *            the data that this entry will be holding.
     */
    public function __construct(BlockInterface $parent, DataElement $dataElement)
    {
        parent::__construct(static::DOM_NODE_NAME, $parent);
        $this->setDataElement($dataElement);
        $this->format = DataFormat::getFromName($this->formatName);
    }

    public function setDataElement(DataElement $dataElement): void
    {
        $this->dataElement = $dataElement;
        $this->components = (int) ($dataElement->getSize() / $this->formatSize);
        $this->validateDataElement();
    }

    /**
     * Checks validity of the data.
     */
    abstract protected function validateDataElement(): void;

    public function getDataElement(): DataElement
    {
        return $this->dataElement;
    }

    /**
     * Resolves, in relation to the context, the index of the item collection to be used to instantiate the Entry.
     *
     * @param int|null $components_count
     *   The number of components for the items.
     * @param ElementInterface $context
     *   An element that can be used to provide context.
     *
     * @return mixed
     *   The item collection index.
     */
    public static function resolveItemCollectionIndex(?int $components_count, ElementInterface $context): mixed
    {
        return 0;
    }

    /**
     * {@inheritdoc}
     */
    public function getFormat(): int
    {
        return $this->format;
    }

    /**
     * @todo xxx
     */
    public function getOutputFormat(): int
    {
        $parentElement = $this->getParentElement();
        if (!$parentElement) {
            return $this->format;
        }
        assert($parentElement instanceof BlockInterface);
        if ($output_format = $parentElement->getCollection()->getPropertyValue('outputFormat')) {
            return $output_format;
        }
        return $this->format;
    }

    /**
     * {@inheritdoc}
     */
    public function getComponents(): int
    {
        return $this->components;
    }

    /**
     * @todo xxx
     */
    protected function hasMappedText(): bool
    {
        $parentElement = $this->getParentElement();
        if (!$parentElement) {
            return false;
        }
        assert($parentElement instanceof BlockInterface);
        if (!$text_config = $parentElement->getCollection()->getPropertyValue('text')) {
            return false;
        }
        return isset($text_config['mapping']);
    }

    /**
     * @todo xxx
     */
    protected function getMappedText(mixed $value): ?string
    {
        $parentElement = $this->getParentElement();
        assert($parentElement instanceof BlockInterface);
        $text_config = $parentElement->getCollection()->getPropertyValue('text');
        $id = is_int($value) ? $value : (string) $value;
        return $text_config['mapping'][$id] ?? null;
    }

    /**
     * @todo xxx
     */
    protected function hasDefaultText(): bool
    {
        $parentElement = $this->getParentElement();
        if (!$parentElement) {
            return false;
        }
        assert($parentElement instanceof BlockInterface);
        if (!$text_config = $parentElement->getCollection()->getPropertyValue('text')) {
            return false;
        }
        return isset($text_config['default']);
    }

    /**
     * @todo xxx
     */
    protected function resolveValuePlaceholder(string|int|float $value, string $source): string
    {
        $tmp = str_replace('{value}', (string) $value, $source);
        $tmp = str_replace('{valuehex}', dechex((int) $value), $tmp);
        return $tmp;
    }

    /**
     * @todo xxx
     */
    public function resolveText(mixed $value, bool $null_on_missing = false): string|int|float|array|null
    {
        $parentElement = $this->getParentElement();
        if (!$parentElement) {
            return is_array($value) ? implode(' ', $value) : $value;
        }
        assert($parentElement instanceof BlockInterface);

        if (is_array($value)) {
            $tmp = [];
            foreach ($value as $v) {
                $id = is_int($v) ? $v : (string) $v;
                if ($this->hasMappedText()) {
                    $tmp[] = $this->resolveValuePlaceholder($v, $parentElement->getCollection()->getPropertyValue('text')['mapping'][$id] ?? (string) $v);
                } elseif ($this->hasDefaultText()) {
                    $tmp[] = $this->resolveValuePlaceholder($v, $parentElement->getCollection()->getPropertyValue('text')['default']);
                } else {
                    $tmp[] = $v;
                }
            }
            return $tmp;
        }

        $text = null;
        if ($this->hasMappedText()) {
            $id = is_int($value) ? $value : (string) $value;
            $raw = $parentElement->getCollection()->getPropertyValue('text')['mapping'][$id] ?? null;
            if (!is_null($raw)) {
                $text = $this->resolveValuePlaceholder($value, $raw);
            }
        }
        if (is_null($text) && $this->hasDefaultText()) {
            $text = $this->resolveValuePlaceholder($value, $parentElement->getCollection()->getPropertyValue('text')['default']);
        }
        if (is_null($text) && $null_on_missing) {
            return null;
        }
        if (!is_null($text)) {
            return $text;
        }

        return is_scalar($value) ? $value : serialize($value);
    }

    /**
     * {@inheritdoc}
     */
    public function toBytes(int $byte_order = ConvertBytes::LITTLE_ENDIAN, int $offset = 0): string
    {
        return $this->dataElement->getBytes();
    }

    /**
     * {@inheritdoc}
     */
    public function toString(array $options = []): string
    {
        if (is_null($this->dataElement)) {
            return '';
        }
        $text = $this->resolveText($this->getValue($options));
        if (is_array($text)) {
            if (!$this->hasMappedText() && !$this->hasDefaultText()) {
                return implode(' ', $text);
            }
            if (($options['format'] ?? null) === 'exiftool') {
                return implode('; ', $text);
            }
            return implode(', ', $text);
        }
        return is_null($text) ? null : (string) $text;
    }

    public function asArray(DumperInterface $dumper, array $context = []): array
    {
        return $dumper->dumpEntry($this, $context);
    }

    abstract public function getValue(array $options = []): mixed;
}
