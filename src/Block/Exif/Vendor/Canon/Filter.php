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
     * {@inheritdoc}
     */
    public function parseData(DataElement $data_element): void
    {
        $this->debugBlockInfo($data_element);

//        $this->validate($data_element);

        $offset = 0;

        $this->valid = true;
    }
}
