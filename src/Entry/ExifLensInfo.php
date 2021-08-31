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
            if ($val[0] == $val[1]) {
              $str = $val[0];
            } else {
              $str = $val[0] . '-'. $val[1];
            }
            $str .= ' f/';
            if ($val[2] == 0) {
              $str .= '?';
            } elseif ($val[2] == $val[3]) {
              $str .= $val[2];
            } else {
              $str .= $val[2] . '-'. $val[3];
            }
            return $str;
        }
        return parent::toString($options);
    }
}
