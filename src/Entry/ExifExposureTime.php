<?php

namespace FileEye\MediaProbe\Entry;

use FileEye\MediaProbe\Entry\Core\Rational;
use FileEye\MediaProbe\MediaProbe;

/**
 * Decode text for an Exif/ExposureTime tag.
 */
class ExifExposureTime extends Rational
{
    /**
     * {@inheritdoc}
     */
    public function toString(array $options = [])
    {
        if (($options['format'] ?? null) === 'exiftool') {
            $val = $this->getValue();
            if ($val < 0.25001 and $val > 0) {
                return MediaProbe::fmt("1/%d", (int) (0.5 + 1 / $val));
            }
            return MediaProbe::fmt("%.1f", $val);
        }

        $sec = ($options['short'] ?? false) ? '' : ' sec.';

        if ($this->getValue() < 1) {
            return MediaProbe::fmt('1/%d%s', $this->value[0][1] / $this->value[0][0], $sec);
        } else {
            return MediaProbe::fmt('%d%s', $this->getValue(), $sec);
        }
    }
}
