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
        if (($options['format'] ?? null) === 'exiftool') {
            return $this->value[0][0] == 0 ? '0' : sprintf('%s%s/%s', $this->value[0][0] * $this->value[0][1] > 0 ? '+' : '', $this->value[0][0], $this->value[0][1]);
        }
        return $this->value[0][0] == 0 ? '0' : sprintf('%s%.01f', $this->value[0][0] * $this->value[0][1] > 0 ? '+' : '', $this->value[0][0] / $this->value[0][1]);
    }
}
