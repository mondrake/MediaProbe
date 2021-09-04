<?php

namespace FileEye\MediaProbe\Entry;

use FileEye\MediaProbe\Entry\Core\Rational;

/**
 * Decoder for an GPS/GPSTimeStamp tag.
 */
class GPSTimeStamp extends Rational
{
    /**
     * {@inheritdoc}
     */
    public function toString(array $options = [])
    {
        switch ($options['format'] ?? null) {
            case 'exiftool':
              dump($this->getValue());
                return sprintf('%s m', $this->getValue($options));
            default:
                return parent::toString($options);
        }
    }
}
