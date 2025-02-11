<?php

namespace FileEye\MediaProbe\Entry\Vendor\Canon\Exif;

use FileEye\MediaProbe\Entry\Core\Long;

/**
 * Handler for Canon RawMeasuredRGGB tags.
 */
class RawMeasuredRGGB extends Long
{
    /**
     * {@inheritdoc}
     */
    public function getValue(array $options = []): mixed
    {
        $format = $options['format'] ?? null;
        $value = [];
        foreach (parent::getValue() as $v) {
            $value[] = (($v >> 16) | ($v << 16)) & 0xffffffff;
        }
        return $format === 'exiftool' ? implode(' ', $value) : $value;
    }

    /**
     * {@inheritdoc}
     */
    public function toString(array $options = []): string
    {
        return implode(' ', $this->getValue());
    }
}
