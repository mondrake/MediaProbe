<?php

namespace FileEye\MediaProbe\Block\Exif\Vendor\Canon;

use FileEye\MediaProbe\Block\Map;
use FileEye\MediaProbe\Data\DataElement;
use FileEye\MediaProbe\MediaProbeException;
use FileEye\MediaProbe\Model\ListItemValue;

/**
 * Class representing a map of values, for Canon ColorData information.
 *
 * The actual map collection need to be resolved.
 */
class ColorDataMapResolver extends Map
{
    public function fromDataElement(DataElement $dataElement): static
    {
        // Find the appropriate map collection.
        foreach ($this->collection->listItemIds() as $color_data_map) {
            $map_t = $this->collection->getItemCollection($color_data_map);
            if (in_array($this->listItem->countOfComponents, $map_t->getPropertyValue('condition') ?? [])) {
                $resolvedItem = new ListItemValue(
                    collection: $map_t,
                    dataFormat: $map_t->getPropertyValue('format')[0],
                    countOfComponents: $map_t->countItemIds(),
                );
                break;
            }
        }

        if (!isset($resolvedItem)) {
            throw new MediaProbeException('Could not resolve a valid CameraInfo map');
        }

        $this->debug("Resolved map to {name}", [
            'name' => $resolvedItem->collection->getPropertyValue('name'),
        ]);

        return $this;
    }
}
