<?php

namespace FileEye\MediaProbe\Entry\Vendor\Canon\Exif\Functions2;

use FileEye\MediaProbe\Entry\Core\SignedLong;

/**
 * Handler for CanonCustom ViewfinderWarnings tags.
 */
class ViewfinderWarnings extends SignedLong
{
    /**
     * {@inheritdoc}
     */
    public function toString(array $options = [])
    {
        $ret = [];
        for ($i = 0; $i < 32; $i++) {
            $mask = 2 ** $i;
            if ($this->getValue($options) & $mask) {
                $ret[] = $mask;
            }
        }
        return implode(' ,', $ret);
    }
}
