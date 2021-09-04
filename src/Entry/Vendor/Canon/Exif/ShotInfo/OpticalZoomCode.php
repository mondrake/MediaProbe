<?php

namespace FileEye\MediaProbe\Entry\Vendor\Canon\Exif\ShotInfo;

use FileEye\MediaProbe\Entry\Core\SignedShort;

/**
 * Handler for Canon ShotInfo OpticalZoomCode tags.
 */
class OpticalZoomCode extends SignedShort
{
    /**
     * {@inheritdoc}
     */
    public function toString(array $options = [])
    {
        $val = $this->getValue($options);
dump([$this->value, $options, $val]);
        return $val === 8 ? 'n/a' : $val;
    }
}
