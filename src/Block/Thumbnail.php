<?php

namespace FileEye\MediaProbe\Block;

use FileEye\MediaProbe\Data\DataElement;

/**
 * Class used to hold data for a JPEG Thumbnail.
 */
class Thumbnail extends BlockBase
{
    /**
     * {@inheritdoc}
     */
    protected function doParseData(DataElement $data): void
    {
        // Adds the segment data as an Undefined entry.
        new Undefined($this, [$data->getBytes()]);
    }
}
