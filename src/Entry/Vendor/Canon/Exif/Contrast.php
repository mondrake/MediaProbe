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
        $val = this->getValue();
        return $val > 0 ? "+$val" : "$val";
    }
}
