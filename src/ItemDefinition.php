<?php

namespace FileEye\MediaProbe;

use FileEye\MediaProbe\Collection\CollectionInterface;
use FileEye\MediaProbe\Data\DataFormat;

/**
 * @deprecated
 */
class ItemDefinition
{
    /**
     * @param CollectionInterface $collection
     *   The MediaProbe collection of this item.
     * @param int $format
     *   The format of the item.
     * @param int $valuesCount
     *   The count of values of the item.
     * @param int $dataOffset
     *   The offset of the item data in the data window.
     * @param int $itemDefinitionOffset
     *   The offset of the item definition in the data window.
     * @param int $sequence
     *   The sequence of the item on its parent list.
     */
    public function __construct(
        public readonly CollectionInterface $collection,
        public readonly int $format = DataFormat::BYTE,
        public readonly int $valuesCount = 1,
        public readonly int $dataOffset = 0,
        public readonly int $itemDefinitionOffset = 0,
        public readonly int $sequence = 0,
    ) {
    }

    /**
     * @todo
     */
    public function getSize(): int
    {
        return DataFormat::getSize($this->format) * $this->valuesCount;
    }
}
