<?php

namespace FileEye\MediaProbe\Entry\Vendor\Canon\Exif\ShotInfo;

use FileEye\MediaProbe\Entry\Vendor\Canon\Exif\ApertureValue;

/**
 * Handler for Canon ShotInfo FNumber tags.
 */
class FNumber extends ApertureValue
{
    /**
     * {@inheritdoc}
     */
    public function toString(array $options = [])
    {
$model = $this->getRootElement()->getElement("//ifd[@name='IFD0']/tag[@name='Model']/entry")->getValue();
dump([$model, $this->value, $this->getValue(), round($this->getValue(), 1), sprintf("%.2g", $this->getValue())]);
        return sprintf("%.2g", $this->getValue());
        //return round($this->getValue(), 1);
    }
}
