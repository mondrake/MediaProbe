<?php

namespace FileEye\MediaProbe\Block\Exif\Vendor\Canon;

use FileEye\MediaProbe\Block\Map;
use FileEye\MediaProbe\Data\DataElement;
use FileEye\MediaProbe\ItemDefinition;

/**
 * Class representing a map of values, for Canon ColorData information.
 *
 * The actual map collection need to be resolved.
 */
class ColorDataMap extends Map
{
    /**
     * {@inheritdoc}
     */
    protected function validate(DataElement $dataElement): void
    {
        parent::validate($dataElement);

        // Find the appropriate map collection.
        foreach ($this->collection->listItemIds() as $color_data_map) {
            $map_t = $this->collection->getItemCollection($color_data_map);
            if (in_array($this->getDefinition()->valuesCount, $map_t->getPropertyValue('condition') ?? [])) {
                $this->definition = new ItemDefinition($map_t, $map_t->getPropertyValue('format')[0]);
                break;
            }
        }
        // todo xx unknown

        $this->debug("Resolved map to {domnode}:{name}", [
            'domnode' => $this->collection->getPropertyValue('DOMNode'),
            'name' => $this->collection->getPropertyValue('name'),
        ]);
    }
}
