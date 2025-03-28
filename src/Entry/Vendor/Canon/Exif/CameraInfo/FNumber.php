<?php

namespace FileEye\MediaProbe\Entry\Vendor\Canon\Exif\CameraInfo;

use FileEye\MediaProbe\Entry\Core\Byte;

/**
 * Common handler for Canon FNumber tags.
 */
class FNumber extends Byte
{
    /**
     * {@inheritdoc}
     */
    public function getValue(array $options = []): mixed
    {
        return exp(($this->dataElement->getByte(0) - 8) / 16 * log(2));
    }

    /**
     * {@inheritdoc}
     */
    public function toString(array $options = []): string
    {
        return (string) round($this->getValue(), 1);
    }
}
