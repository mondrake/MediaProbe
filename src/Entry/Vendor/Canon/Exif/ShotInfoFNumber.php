<?php

namespace FileEye\MediaProbe\Entry\Vendor\Canon\Exif;

/**
 * Handler for Canon ShotInfo FNumber tags.
 */
class ShotInfoFNumber extends CanonApertureValue
{
    /**
     * {@inheritdoc}
     */
    public function toString(array $options = [])
    {
        return round($this->getValue(), 1);
    }
}
