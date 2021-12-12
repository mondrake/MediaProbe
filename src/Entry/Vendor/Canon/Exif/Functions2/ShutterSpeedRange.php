<?php

namespace FileEye\MediaProbe\Entry\Vendor\Canon\Exif\Functions2;

use FileEye\MediaProbe\ElementInterface;
use FileEye\MediaProbe\Entry\Core\SignedLong;
use FileEye\MediaProbe\Entry\ExifTrait;

/**
 * Handler for CanonCustom tags representing Shutter speed range.
 */
class ShutterSpeedRange extends SignedLong
{
    use ExifTrait;

    /**
     * {@inheritdoc}
     */
    public static function resolveItemCollectionIndex(?int $components_count, ElementInterface $context)
    {
        switch ($components_count) {
            case 3:
                return 0;

            case 4:
                return 1;

        }
    }

    /**
     * {@inheritdoc}
     */
    public function getValue(array $options = [])
    {
        if (($options['format'] ?? null) === 'exiftool') {
            $v = [];
            $v[0] = $this->value[0];
            $v[1] = exp(-($this->value[1] / 8 - 7) * log(2));
            $v[2] = exp(-($this->value[2] / 8 - 7) * log(2));
            return implode(' ', $v);
        }
        return parent::getValue();
    }

    /**
     * {@inheritdoc}
     */
    public function toString(array $options = [])
    {
        if (($options['format'] ?? null) === 'exiftool') {
            $val = $this->getValue();
dump($val);
            switch (count($val)) {
                case 3:
                    $str = $val[0] === 0 ? 'Disable; Hi ' : 'Enable; Hi ';
                    $str .= $this->exposureTimeToString($val[1]) . '; Lo ';
                    $str .= $this->exposureTimeToString($val[2]);
                    return $str;

                case 4:
                    return 'boing boing';

            }
        }
        return parent::toString($options);
    }
}
