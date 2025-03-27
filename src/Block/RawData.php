<?php

namespace FileEye\MediaProbe\Block;

use FileEye\MediaProbe\Collection\CollectionInterface;
use FileEye\MediaProbe\Data\DataElement;
use FileEye\MediaProbe\Data\DataFormat;
use FileEye\MediaProbe\Entry\Core\Undefined;
use FileEye\MediaProbe\ItemDefinition;
use FileEye\MediaProbe\Model\BlockBase;
use FileEye\MediaProbe\Model\EntryBase;
use FileEye\MediaProbe\Utility\ConvertBytes;

/**
 * Class for storing raw data as a block.
 */
class RawData extends BlockBase
{
    /**
     * The data length.
     */
    protected int $components;

    public function __construct(
        public readonly CollectionInterface $collection,
        BlockBase $parent,
    ) {
        parent::__construct(
            definition: new ItemDefinition($this->collection),
            parent: $parent,
            graft: false,
        );
    }

    public function fromDataElement(DataElement $dataElement): RawData
    {
        assert($this->debugInfo(['dataElement' => $dataElement]));
        new Undefined($this, $dataElement);
        return $this;
    }

    /**
     * xxx
     */
    public function getFormat(): int
    {
        $entry = $this->getElement("entry");
        if ($entry === null) {
            return DataFormat::UNDEFINED;
        }
        assert($entry instanceof EntryBase, get_class($entry));
        return $entry->getFormat();
    }

    /**
     * Returns the data length.
     *
     * @return int
     */
    public function getComponents(): int
    {
        return $this->components; // xxx ???
    }

    public function toBytes(int $byte_order = ConvertBytes::LITTLE_ENDIAN, int $offset = 0): string
    {
        return $this->getElement('entry')->toBytes();
    }

    protected function getContextPathSegmentPattern(): string
    {
        if ($this->getAttribute('name') !== '') {
            return '/{DOMNode}:{name}';
        }
        return '/{DOMNode}';
    }
}
