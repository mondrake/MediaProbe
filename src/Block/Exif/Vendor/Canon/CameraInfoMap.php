<?php

namespace FileEye\MediaProbe\Block\Exif\Vendor\Canon;

use FileEye\MediaProbe\Block\Map;
use FileEye\MediaProbe\Block\Media\Tiff\Tag;
use FileEye\MediaProbe\Data\DataElement;
use FileEye\MediaProbe\Data\DataFormat;
use FileEye\MediaProbe\ItemDefinition;

/**
 * Class representing a map of values, for Canon Camera information.
 *
 * The actual map collection need to be resolved.
 */
class CameraInfoMap extends Map
{
    /**
     * {@inheritdoc}
     */
    protected function validate(DataElement $dataElement): void
    {
        parent::validate($dataElement);

        // Gets the Model from IFD0.
        $modelTag = $this->getRootElement()->getElement("//ifd[@name='IFD0']/tag[@name='Model']");
        if ($modelTag) {
            assert($modelTag instanceof Tag);
            $model = $modelTag->getValue() ?? "n/a";
        } else {
            $model = "n/a";
        }

        $values_count = $this->getDefinition()->valuesCount;

        // Find the appropriate map collection.
        $mapped = false;
        foreach ($this->collection->listItemIds() as $map_id) {
            $map_t = $this->collection->getItemCollection($map_id);
            if (preg_match($map_t->getPropertyValue('condition')[0], $model)) {
                $this->definition = new ItemDefinition($map_t);
                $mapped = true;
                break;
            }
        }
        if (!$mapped) {
            if ($this->getFormat() === DataFormat::LONG) {
                if (in_array($this->getDefinition()->valuesCount, [138, 148])) {
                    $this->definition = new ItemDefinition($this->collection->getItemCollection('CanonCameraInfoPowerShot'));
                } elseif (in_array($this->getDefinition()->valuesCount, [156, 162, 167, 171, 264])) {
                    $this->definition = new ItemDefinition($this->collection->getItemCollection('CanonCameraInfoPowerShot2'));
                } else {
                    $this->definition = new ItemDefinition($this->collection->getItemCollection('CanonCameraInfoUnknown32'));
                }
// xx todo add when newer exiftoolxml is available
//            elseif ($this->getFormat() === DataFormat::SHORT) {
//                $this->definition = new ItemDefinition($this->collection->getItemCollection('CanonCameraInfoUnknown16'));
//            }
            } else {
                $this->definition = new ItemDefinition($this->collection->getItemCollection('CanonCameraInfoUnknown'));
            }
        }

        $this->debug("Resolved map to {domnode}:{name}", [
            'domnode' => $this->collection->getPropertyValue('DOMNode'),
            'name' => $this->collection->getPropertyValue('name'),
        ]);
    }
}
