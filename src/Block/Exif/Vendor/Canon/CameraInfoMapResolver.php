<?php

namespace FileEye\MediaProbe\Block\Exif\Vendor\Canon;

use FileEye\MediaProbe\Block\Maker\Canon\Exif\MakerNote;
use FileEye\MediaProbe\Block\Map;
use FileEye\MediaProbe\Block\Media\Tiff\Tag;
use FileEye\MediaProbe\Data\DataElement;
use FileEye\MediaProbe\Data\DataFormat;
use FileEye\MediaProbe\MediaProbeException;
use FileEye\MediaProbe\Model\ListItemValue;

/**
 * Class resolving the map of values, for Canon Camera information.
 */
class CameraInfoMapResolver extends Map
{
    public function fromDataElement(DataElement $dataElement): static
    {
        // Gets the Model from IFD0.
        $modelTag = $this->getRootElement()->getElement("//ifd[@name='IFD0']/tag[@name='Model']");
        if ($modelTag) {
            assert($modelTag instanceof Tag);
            $model = $modelTag->getValue() ?? "n/a";
        } else {
            $model = "n/a";
        }

        // Find the appropriate map collection.
        $mapped = false;
        foreach ($this->collection->listItemIds() as $map_id) {
            $map_t = $this->collection->getItemCollection($map_id);
            if (preg_match($map_t->getPropertyValue('condition')[0], $model)) {
                $resolvedItem = new ListItemValue(
                    collection: $map_t,
                    dataFormat: $map_t->getPropertyValue('format')[0],
                    countOfComponents: $map_t->countItemIds(),
                );
                $mapped = true;
                break;
            }
        }
        if (!$mapped) {
            if ($this->listItem->dataFormat === DataFormat::LONG) {
                if (in_array($this->listItem->countOfComponents, [138, 148])) {
                    $resolvedItemCollection = $this->collection->getItemCollection('CanonCameraInfoPowerShot');
                } elseif (in_array($this->listItem->countOfComponents, [156, 162, 167, 171, 264])) {
                    $resolvedItemCollection = $this->collection->getItemCollection('CanonCameraInfoPowerShot2');
                } else {
                    $resolvedItemCollection = $this->collection->getItemCollection('CanonCameraInfoUnknown32');
                }
// xx todo add when newer exiftoolxml is available
//            elseif ($this->listItem->dataFormat === DataFormat::SHORT) {
//                $this->definition = new ItemDefinition($this->collection->getItemCollection('CanonCameraInfoUnknown16'));
//            }
            } else {
                $resolvedItemCollection = $this->collection->getItemCollection('CanonCameraInfoUnknown');
            }
            $resolvedItem = new ListItemValue(
                collection: $resolvedItemCollection,
                dataFormat: $resolvedItemCollection->getPropertyValue('format')[0],
                countOfComponents: $resolvedItemCollection->countItemIds(),
            );
        }

        if (!isset($resolvedItem)) {
            throw new MediaProbeException('Could not resolve a valid CameraInfo map');
        }

        $this->debug("Resolved map to {name}", [
            'name' => $resolvedItem->collection->getPropertyValue('name'),
        ]);

        $itemHandler = $resolvedItem->collection->handler();
        $item = new $itemHandler(
            listItem: $resolvedItem,
            parent: $this->parent,
        );
        assert($item instanceof CameraInfoMap);
        $item->fromDataElement($dataElement);
        assert($this->parent instanceof MakerNote);
        $this->parent->graftBlock($item);

        return $this;
    }
}
