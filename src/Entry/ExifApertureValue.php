<?php

namespace FileEye\MediaProbe\Entry;

use FileEye\MediaProbe\Entry\Core\Rational;

/**
 * Handler for Exif ApertureValue tags.
 *
 * This is displayed as an F number, but stored as an APEX value.
 */
class ExifApertureValue extends Rational
{
    /**
     * {@inheritdoc}
     */
    public function getValue(array $options = []): mixed
    {
        $format = $options['format'] ?? null;
        if ($format === 'exiftool') {
            return pow(2, $this->dataElement->getRationalFloat() / 2);
        }
        return parent::getValue($options);
    }

    /**
     * {@inheritdoc}
     */
    public function toString(array $options = []): string
    {
        return sprintf('%.01f', pow(2, $this->getValue() / 2));
    }
}
