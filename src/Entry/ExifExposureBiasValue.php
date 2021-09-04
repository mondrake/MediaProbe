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
            $val = $this->getValue();
            if (isset($val)) {
                $val *= 1.00001;    # avoid round-off errors
                if (!$val) {
                    return '0';
                } elseif ((((int) $val) / $val) > 0.999) {
                    return sprintf("%+d", (int) $val);
                } elseif (((int) ($val * 2)) / ($val * 2) > 0.999) {
                    return sprintf("%+d/2", (int) ($val * 2));
                } elseif (((int) ($val * 3)) / ($val * 3) > 0.999) {
                    return sprintf("%+d/3", (int) ($val * 3));
                } else {
                    return sprintf("%+.3g", $val);
                }
            }
            return null;
        }
        return $this->value[0][0] == 0 ? '0' : sprintf('%s%.01f', $this->value[0][0] * $this->value[0][1] > 0 ? '+' : '', $this->value[0][0] / $this->value[0][1]);
    }
}
