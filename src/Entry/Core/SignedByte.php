<?php

namespace FileEye\MediaProbe\Entry\Core;

use FileEye\MediaProbe\Block\BlockBase;
use FileEye\MediaProbe\ItemDefinition;
use FileEye\MediaProbe\Data\DataElement;

/**
 * Class for holding signed bytes.
 *
 * This class can hold bytes, either just a single byte or an array of
 * bytes.
 */
class SignedByte extends NumberBase
{
    /**
     * {@inheritdoc}
     */
    protected $name = 'SignedByte';

    /**
     * {@inheritdoc}
     */
    protected $formatName = 'SignedByte';

    /**
     * {@inheritdoc}
     */
    protected $format;

    /**
     * {@inheritdoc}
     */
    protected $min = -128;

    /**
     * {@inheritdoc}
     */
    protected $max = 127;

    /**
     * {@inheritdoc}
     */
    public function setDataElement(DataElement $data): void
    {
        parent::setDataElement($data);

        $this->components = $data->getSize(); // @todo xxx check if components calculation can be abstracted

        $this->debug("text: {text}", ['text' => $this->toString()]);
    }

    /**
     * {@inheritdoc}
     */
    public function numberToBytes($number, $order)
    {
        return chr($number);
    }
}
