<?php

namespace FileEye\MediaProbe\Entry;

use FileEye\MediaProbe\Entry\Core\Rational;

/**
 * Decode text for an Exif/LensInfo tag.
 */
class ExifLensInfo extends Rational
{
    /**
     * {@inheritdoc}
     */
    public function toString(array $options = [])
    {
        if (($options['format'] ?? null) === 'exiftool') {
            if ($this->value[0][0] == $this->value[0][1]) {
              $str = $this->value[0][0];
            } else {
              $str = $this->value[0][0] . '-'. $this->value[0][1];
            }
            $str .= 'mm f/';
            if ($this->value[0][3] == 0) {
              $str .= '?';
            } elseif ($this->value[0][2] == $this->value[0][3]) {
              $str .= $this->value[0][2];
            } else {
              $str .= $this->value[0][2] . '-'. $this->value[0][3];
            }
            return $str;
        }
        return parent::toString($options);
    }
}
