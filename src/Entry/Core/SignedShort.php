<?php

namespace FileEye\MediaProbe\Entry\Core;

use FileEye\MediaProbe\Block\BlockBase;
use FileEye\MediaProbe\ItemDefinition;
use FileEye\MediaProbe\Data\DataElement;
use FileEye\MediaProbe\Utility\ConvertBytes;

/**
 * Class for holding signed shorts.
 *
 * This class can hold shorts, either just a single short or an array
 * of shorts.
 */
class SignedShort extends NumberBase
{
    /**
     * {@inheritdoc}
     */
    protected $name = 'SignedShort';

    /**
     * {@inheritdoc}
     */
    protected $formatName = 'SignedShort';

    /**
     * {@inheritdoc}
     */
    protected $formatSize = 2;

    /**
     * {@inheritdoc}
     */
    protected $min = -32768;

    /**
     * {@inheritdoc}
     */
    protected $max = 32767;

    /**
     * {@inheritdoc}
     */
    public function numberToBytes($number, $order)
    {
        return ConvertBytes::fromSignedShort($number, $order);
    }
}
