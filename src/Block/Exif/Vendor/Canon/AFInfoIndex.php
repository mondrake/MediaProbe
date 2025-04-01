<?php

namespace FileEye\MediaProbe\Block\Exif\Vendor\Canon;

use FileEye\MediaProbe\Block\Index;
use FileEye\MediaProbe\Block\Media\Tiff\Tag;
use FileEye\MediaProbe\Data\DataElement;
use FileEye\MediaProbe\ItemDefinition;

/**
 * Class representing an index of values, for Canon AFInfo e AFInfo2.
 */
class AFInfoIndex extends Index
{
    public function fromDataElement(DataElement $dataElement): static
    {
        // Loops through the index and loads the tags. If the 'hasIndexSize'
        // property is true, the first entry is a special case that is handled
        // by opening a 'rawData' node instead of a 'tag'.
        $offset = 0;
        $this->components = $this->listItem->countOfComponents;
        assert($this->debugInfo(['dataElement' => $dataElement]));

        for ($i = 0; $i < $this->components; $i++) {
            $ifdEntry = $this->ifdEntryFromDataElement(
                seq: $i,
                id: $i,
                dataElement: $dataElement,
                offset: $offset,
            );

            if ($ifdEntry === false) {
                continue;
            }

            // Check if this tag should be skipped.
            if ($ifdEntry->collection->getPropertyValue('skip')) {
                $this->debug("Skipped");
                continue;
            };

            if (in_array($ifdEntry->collection->getPropertyValue('name'), ['AFAreaWidths', 'AFAreaHeights', 'AFAreaXPositions', 'AFAreaYPositions'])) {
                $valueComponentsTag = $this->getElement("tag[@name='NumAFPoints']");
                assert($valueComponentsTag instanceof Tag);
                $valueComponents = $valueComponentsTag->getValue();
                $this->components -= ($valueComponents - 1);
            } elseif (in_array($ifdEntry->collection->getPropertyValue('name'), ['AFPointsInFocus', 'AFPointsSelected'])) {
                $valueComponentsTag = $this->getElement("tag[@name='NumAFPoints']");
                assert($valueComponentsTag instanceof Tag);
                $valueComponents = (int) (($valueComponentsTag->getValue() + 15) / 16);
                $this->components -= ($valueComponents - 1);
            } else {
                $valueComponents = 1;
            }

            // Adds the 'tag'.
            $item_class = $ifdEntry->collection->handler();
            $item = new $item_class(
                listItem: $ifdEntry,
                parent: $this,
            );
            $this->graftBlock($item);

            $entry_class = ItemDefinition::getEntryClass($ifdEntry->collection, $ifdEntry->dataFormat);
            new $entry_class($item, $this->getDataWindowFromData($dataElement, $offset, $ifdEntry->dataFormat, $valueComponents));
        }

        $this->validate();

        return $this;
    }
}
