<?php

namespace FileEye\MediaProbe\Block\Exif\Vendor\Canon;

use FileEye\MediaProbe\Block\ListBase;
use FileEye\MediaProbe\Block\Index;
use FileEye\MediaProbe\Block\Map;
use FileEye\MediaProbe\Block\RawData;
use FileEye\MediaProbe\Block\Tag;
use FileEye\MediaProbe\Collection;
use FileEye\MediaProbe\Data\DataElement;
use FileEye\MediaProbe\Data\DataWindow;
use FileEye\MediaProbe\ItemDefinition;
use FileEye\MediaProbe\ItemFormat;
use FileEye\MediaProbe\MediaProbeException;
use FileEye\MediaProbe\Utility\ConvertBytes;

/**
 * Class representing a Filter, for Canon Filter segments.
 *
 * Data segment structure:
 *
 * Id       Lenght   P count  P#1 Idx  P#1 cnt  P#1 val  P#2 Idx  P#2 cnt  P#2 val  ...
 * 04000000 38000000 04000000 01040000 01000000 FFFFFFFF 02040000 01000000 00000000 03040000 01000000 00000000 04040000 01000000 00000000
 */
class Filter extends ListBase
{
    /**
     * The number of parameters for this filter.
     *
     * @var int
     */
    protected $paramsCount;

    /**
     * {@inheritdoc}
     */
    public function parseData(DataElement $data_element): void
    {
        $offset = 0;

        // The count of filter paramters is at offset 8.
        $this->paramsCount = $data_element->getLong($offset + 8);
        $offset += 12;

        $this->debugBlockInfo($data_element);

        // Loop and parse through the parameters.
        for ($p = 0; $p < $this->paramsCount; $p++) {
            $id = $data_element->getLong($offset);
            $val_count = $data_element->getLong($offset + 4);
            $offset += 8;
            $val = $data_element->getSignedLong($offset);
            $this->debug("Tag: $id $val_count $val");

            // The items are defined in the collection of the parent element.
            $item_definition = new ItemDefinition($this->getParentElement()->getCollection()->getItemCollection($id), ItemFormat::SIGNED_LONG, $val_count);
            $this
                ->addItemWithDefinition($item_definition)
                ->parseData(new DataWindow($data_element, $offset, $val_count * ItemFormat::getSize(ItemFormat::SIGNED_LONG)));

            $offset += 4 * $val_count;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function debugBlockInfo(?DataElement $data_element = null, int $items_count = 0)
    {
        $msg = 'filter#{seq} ';
        $seq = $this->getDefinition()->getSequence() + 1;
        $msg .= ' @{offset}, {parms} parameter(s), size {size} bytes';
        $offset = $data_element->getAbsoluteOffset() . '/0x' . strtoupper(dechex($data_element->getAbsoluteOffset()));
        $this->debug($msg, [
            'seq' => $seq,
            'offset' => $offset,
            'parms' => $this->paramsCount,
            'size' => $this->getDefinition()->getSize(),
        ]);
    }
}