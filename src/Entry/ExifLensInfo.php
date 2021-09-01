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
            $val = $this->getValue();
dump($val);
            if ($this->value[0][0] == $this->value[0][1]) {
              $str = $this->value[0][0];
            } else {
              $str = $this->value[0][0] . '-'. $this->value[0][1];
            }
            $str .= 'mm f/';
            if ($this->value[1][1] == 0) {
              $str .= '?';
            } elseif ($this->value[1][0] == $this->value[1][1]) {
              $str .= $this->value[1][0];
            } else {
              $str .= $this->value[1][0] . '-'. $this->value[1][1];
            }
            return $str;
        }
        return parent::toString($options);
    }
}
