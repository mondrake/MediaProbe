<?php

namespace FileEye\MediaProbe\Entry\Vendor\Canon\Exif;

use FileEye\MediaProbe\Entry\Core\SignedShort;

/**
 * Handler for Canon Measured EV tags.
 */
class MeasuredEV extends SignedShort
{
    /**
     * {@inheritdoc}
     */
    public function getValue(array $options = []): mixed
    {
        return parent::getValue() / 32 + 5;
    }

    /**
     * {@inheritdoc}
     */
    public function toString(array $options = []): string
    {
        return sprintf("%.2f", $this->getValue());
    }
}
