<?php

namespace FileEye\MediaProbe\Model;

use FileEye\MediaProbe\Collection\CollectionInterface;
use FileEye\MediaProbe\Data\DataFormat;

/**
 * A value object representing an item of a ListBase object.
 */
class ListItemValue
{
    /**
     * The size of the data part.
     *
     * This is calculated as the count of components multiplied per the size of each component.
     *
     * @var positive-int
     */
    public readonly int $size;

    /**
     * The data format of the item as identified from the data.
     *
     * Sometimes this could differ from the collection's indicated format that declares the
     * expected format.
     */
    public readonly int $dataFormatFromData;

    /**
     * @param CollectionInterface $collection
     *   The MediaProbe collection of this item.
     * @param int $dataFormat
     *   The data format of the item.
     * @param int $countOfComponents
     *   The number of components of the item.
     * @param int $sequence
     *   (Optional) The sequence of the item in the parent List.
     * @param int|null $dataFormatFromData
     *   (Optional) The data format of the item as identified from the data.
     */
    public function __construct(
        public readonly CollectionInterface $collection,
        public readonly int $dataFormat,
        public readonly int $countOfComponents,
        public readonly int $sequence = 0,
        ?int $dataFormatFromData = null,
    ) {
        $this->size = DataFormat::getSize($this->dataFormat) * $this->countOfComponents;
        $this->dataFormatFromData = $dataFormatFromData ?? $this->dataFormat;
    }
}
