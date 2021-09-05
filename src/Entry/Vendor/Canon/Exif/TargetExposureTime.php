<?php

namespace FileEye\MediaProbe\Entry\Vendor\Canon\Exif;

/**
 * Handler for Canon Target Exposure Time tags.
 */
class TargetExposureTime extends ExposureTime
{
    /**
     * {@inheritdoc}
     */
    public function toString(array $options = [])
    {
dump(['targetexposure', $this->getValue(), $this->value]);
        return $this->exposureTimeToString($this->getValue());
    }
}
