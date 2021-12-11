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
    public function getValue(array $options = [])
    {
dump([$this->getRootElement()->getElement("//ifd[@name='IFD0']/tag[@name='Model']/entry")->getValue(), $this->value, parent::getValue($options), $options]);
        return parent::getValue($options);
    }

    /**
     * {@inheritdoc}
     */
    public function toString(array $options = [])
    {
        if (($options['format'] ?? null) === 'exiftool') {
            $val = $this->getValue();
            if ($val[0] == $val[1]) {
              $str = $val[0];
            } else {
              $str = $val[0] . '-'. $val[1];
            }
            $str .= 'mm f/';
            if ($val[3] == 0) {
              $str .= '0';
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
