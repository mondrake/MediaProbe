<?php

namespace FileEye\MediaProbe\Entry\Vendor\Canon\Exif\ShotInfo;

use FileEye\MediaProbe\Entry\Core\SignedShort;

/**
 * Handler for Canon ShotInfo AFPointsInFocus tags.
 */
class AFPointsInFocus extends SignedShort
{
    /**
     * {@inheritdoc}
     */
    public function getValue(array $options = []): mixed
    {
        if ($options['format'] ?? null === 'exiftool') {
            if ($alternative_af_points_in_focus = $this->getRootElement()->getElement("//makerNote[@name='Canon']/*[@name!='CanonShotInfo']/tag[@name='AFPointsInFocus']/entry")) {
                return $alternative_af_points_in_focus->getValue($options);
            } else {
                return parent::getValue();
            }
        }
        return parent::getValue($options);
    }

    /**
     * {@inheritdoc}
     */
    public function toString(array $options = []): string
    {
        return $this->resolveText(parent::getValue());
    }
}
