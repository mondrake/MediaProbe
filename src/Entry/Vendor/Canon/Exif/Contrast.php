<?php

namespace FileEye\MediaProbe\Entry\Vendor\Canon\Exif;

use FileEye\MediaProbe\Entry\Core\SignedShort;

/**
 * Handler for Canon Contrast tags.
 */
class Contrast extends SignedShort
{
    /**
     * {@inheritdoc}
     */
    public function toString(array $options = [])
    {
        $val = $this->getValue();
        if ($val === 0) {
            return 'Normal';
        }
        if ($val > 0) {
            if ($val > 0xfff0) {    # a negative value in disguise?
                return $val - 0x10000;
            } else {
                return "+$val";
            }
        }
        return $val;
    }
}
