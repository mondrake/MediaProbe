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
        $short = $options['short'] ?? false || ($options['format'] ?? null) === 'exiftool';

        $sec = $short ? '' : ' sec.';

        if ($this->getValue() < 1) {
            return MediaProbe::fmt('1/%d%s', $this->value[1] / $this->value[0], $sec);
        } else {
            return MediaProbe::fmt('%d%s', $this->getValue(), $sec);
        }
    }
}
