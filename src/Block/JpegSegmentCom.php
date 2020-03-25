<?php

namespace FileEye\MediaProbe\Block;

use FileEye\MediaProbe\Data\DataElement;
use FileEye\MediaProbe\Data\DataWindow;
use FileEye\MediaProbe\Entry\Core\Ascii;
use FileEye\MediaProbe\Utility\ConvertBytes;

/**
 * Class representing a JPEG comment segment.
 */
class JpegSegmentCom extends JpegSegmentBase
{
    /**
     * {@inheritdoc}
     */
    public function loadFromData(DataElement $data_element): void
    {
        $this->debugBlockInfo($data_element);

        // Set the Comments's entry.
        $entry = new Ascii($this, [$data_element->getBytes(2, $this->components - 2)]);

        $this->valid = true;
    }

    /**
     * {@inheritdoc}
     */
    public function toBytes($byte_order = ConvertBytes::LITTLE_ENDIAN, $offset = 0)
    {
        // Get the payload.
        $comment = $this->getElement("entry");
        $data = rtrim($comment->toBytes(), "\0");

        return Jpeg::JPEG_DELIMITER . $this->getAttribute('id') . ConvertBytes::fromShort(strlen($data) + 2, ConvertBytes::BIG_ENDIAN) . $data;
    }
}
