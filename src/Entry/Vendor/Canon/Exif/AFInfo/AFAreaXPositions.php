<?php

namespace FileEye\MediaProbe\Entry\Vendor\Canon\Exif\AFInfo;

use FileEye\MediaProbe\Entry\Core\SignedShort;
use FileEye\MediaProbe\Entry\ExifTrait;
use FileEye\MediaProbe\MediaProbe;

/**
 * Handler for Canon AFAreaXPositions tags.
 */
class AFAreaXPositions extends SignedShort
{
    /**
     * {@inheritdoc}
     */
    public function getValue(array $options = [])
    {
dump(['getValue', $this->value, parent::getValue($options])]);
        return parent::getValue($options];
    }

    /**
     * {@inheritdoc}
     */
    public function toString(array $options = [])
    {
dump(['toString', parent::toString($options])]);
        return parent::toString($options];
    }
}
