<?php

namespace FileEye\MediaProbe\Entry\Vendor\Canon\Exif\Functions2;

use FileEye\MediaProbe\ElementInterface;
use FileEye\MediaProbe\Entry\Core\SignedLong;

/**
 * Handler for CanonCustom ExposureLevelIncrements tags.
 */
class ExposureLevelIncrements extends SignedLong
{
    /**
     * @todo
     */
    public static function determineCollectionIndex(ElementInterface $root): int
    {
        // Gets the Model from IFD0.
        $model_entry = $root->getElement("//ifd[@name='IFD0']/tag[@name='Model']/entry");
        $model = $model_entry ? $model_entry->getValue() : 'n/a';
dump($model);
        return 1;
    }

    /**
     * {@inheritdoc}
     */
/*    public function toString(array $options = [])
    {
        // Gets the Model from IFD0.
        $model_entry = $this->getRootElement()->getElement("//ifd[@name='IFD0']/tag[@name='Model']/entry");
        $model = $model_entry ? $model_entry->getValue() : 'n/a';
dump($model);
global $xxx;
$xxx = true;
$a = parent::toString($options);
$xxx = false;
return $a;
/*        if (preg_match('/\b1D.*\b/', $model) === 1) {
        }

        return */
 //   }
}
