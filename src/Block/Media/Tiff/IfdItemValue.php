<?php

namespace FileEye\MediaProbe\Block\Media\Tiff;

use FileEye\MediaProbe\Collection\CollectionInterface;
use FileEye\MediaProbe\Data\DataFormat;
use FileEye\MediaProbe\MediaProbeException;
use FileEye\MediaProbe\Model\ListItemValue;

/**
 * A value object representing an IFD item.
 */
final class IfdItemValue extends ListItemValue
{
    /**
     * True if the data of the entry is an offset to the actual entry data; False if the data is
     * the value entry itself.
     */
    public readonly bool $isOffset;

    /**
     * @param CollectionInterface $collection
     *   The MediaProbe collection of this IFD entry.
     * @param int $dataFormat
     *   The data format of the IFD entry.
     * @param int|null $dataFormatFromData
     *   The data format of the IFD entry as identified from the data.
     * @param int $countOfComponents
     *   The number of components of the IFD entry.
     * @param int $data
     *   The data of the IFD entry.
     * @param int $sequence
     *   The sequence of the IFD entry on the IFD.
     */
    public function __construct(
        CollectionInterface $collection,
        int $dataFormat = DataFormat::LONG,
        ?int $dataFormatFromData = null,
        int $countOfComponents = 1,
        private readonly int $data = 0,
        int $sequence = 0,
    ) {
        parent::__construct(
            collection: $collection,
            dataFormat: $dataFormat,
            countOfComponents: $countOfComponents,
            sequence: $sequence,
            dataFormatFromData: $dataFormatFromData,
        );
        $this->isOffset = $this->size > 4;
    }

    /**
     * Return the offset at which data can be found.
     *
     * @return positive-int
     */
    public function dataOffset(): int
    {
        if (!$this->isOffset) {
            throw new MediaProbeException('The IFD entry value is not an offset');
        }
        return $this->data;
    }

    /**
     * Return the entry data value.
     */
    public function dataValue(): int
    {
        if ($this->isOffset) {
            throw new MediaProbeException('The IFD entry value is an offset, not a value');
        }
        return $this->data;
    }
}
