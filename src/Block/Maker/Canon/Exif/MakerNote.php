<?php

namespace FileEye\MediaProbe\Block\Maker\Canon\Exif;

use FileEye\MediaProbe\Block\ListBase;
use FileEye\MediaProbe\Block\RawData;
use FileEye\MediaProbe\Block\Tiff\Ifd;
use FileEye\MediaProbe\Block\Tiff\Tag;
use FileEye\MediaProbe\Collection\CollectionFactory;
use FileEye\MediaProbe\Data\DataElement;
use FileEye\MediaProbe\Data\DataException;
use FileEye\MediaProbe\Data\DataFormat;
use FileEye\MediaProbe\Data\DataWindow;
use FileEye\MediaProbe\ItemDefinition;
use FileEye\MediaProbe\Utility\ConvertBytes;

class MakerNote extends Ifd
{
    public function fromDataElement(DataElement $dataElement): MakerNote
    {
        #$offset = $this->getDefinition()->dataOffset;
#dump($this->getDefinition()->dataOffset, $this->xxxx);
        $offset = 0;

        // Get the number of entries.
        $n = $this->getItemsCountFromData($dataElement, $offset);
#dump($n);
        assert($this->debugInfo(['dataElement' => $dataElement, 'sequence' => $n]));

        // Load the Blocks.
        for ($i = 0; $i < $n; $i++) {
            $i_offset = $offset + 2 + 12 * $i;
            try {
                $item_definition = $this->getItemDefinitionFromData($i, $dataElement, $i_offset, $this->xxxx);
                $item_class = $item_definition->collection->getHandler();
                $item = new $item_class($item_definition, $this);
                if (is_a($item_class, Ifd::class, true)) {
                    $item->parseData($dataElement);
                } else {
                    $item_data_window = new DataWindow($dataElement, $item_definition->dataOffset, $item_definition->getSize());
                    $item->parseData($item_data_window);
                }
            } catch (DataException $e) {
                if (isset($item)) {
                    $item->error($e->getMessage());
                } else {
                    throw $e;
                }
            }
        }

        return $this;
    }
}
