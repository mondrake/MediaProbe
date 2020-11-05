<?php

namespace FileEye\MediaProbe\Entry;

use FileEye\MediaProbe\Entry\Core\SignedRational;

/**
 * Decode text for an Exif/ExposureBiasValue tag.
 */
class ExifExposureBiasValue extends SignedRational
{
    /**
     * {@inheritdoc}
     */
    public function toString(array $options = [])
    {
        $val = $this->getValue();
        return $val[0] == 0 ? '0' : sprintf('%s%.01f', $val[0] * $val[1] > 0 ? '+' : '', $val[0] / $val[1]);
    }
}
