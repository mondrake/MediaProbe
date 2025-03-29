<?php

namespace FileEye\MediaProbe;

use FileEye\MediaProbe\Collection\CollectionInterface;
use FileEye\MediaProbe\Data\DataFormat;

/**
 * #deprecated
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

    /**
     * Returns the class to manage the entry value.
     * @todo
     */
    public static function getEntryClass($collection, $format): string
    {
        // Return the specific entry class if defined, or fall back to
        // default class for the format.
        if (!$entry_class = $collection->getPropertyValue('entryClass')) {
            if (empty($format)) {
                throw new MediaProbeException(
                    'No format can be derived for item: %s (%s)',
                    $collection->getPropertyValue('item') ?? 'n/a',
                    $collection->getPropertyValue('name') ?? 'n/a'
                );
            }

            if (!$entry_class = DataFormat::getClass($format)) {
                throw new MediaProbeException(
                    'Unsupported format %d for item: %s (%s)',
                    $format,
                    $collection->getPropertyValue('item') ?? 'n/a',
                    $collection->getPropertyValue('name') ?? 'n/a'
                );
            }
        }

        return $entry_class;
    }
}
