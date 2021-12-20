<?php

namespace FileEye\MediaProbe\Entry\Core;

use FileEye\MediaProbe\Block\BlockBase;
use FileEye\MediaProbe\ItemDefinition;
use FileEye\MediaProbe\Data\DataElement;
use FileEye\MediaProbe\MediaProbe;
use FileEye\MediaProbe\Utility\ConvertBytes;

/**
 * Class for holding unsigned shorts.
 *
 * This class can hold shorts, either just a single short or an array
 * of shorts.
 */
class ShortRev extends NumberBase
{
    /**
     * {@inheritdoc}
     */
    protected $name = 'ShortRev';

    /**
     * {@inheritdoc}
     */
    protected $formatName = 'ShortRev';

    /**
     * {@inheritdoc}
     */
    protected $format;

    /**
     * {@inheritdoc}
     */
    protected $min = 0;

    /**
     * {@inheritdoc}
     */
    protected $max = 65535;

/*        $args = [];
        for ($i = 0; $i < $item_definition->getValuesCount(); $i ++) {
            $args[] = $data_element->getShortRev($i * 2);
        }
        $this->setDataElement($args);*/

    /**
     * {@inheritdoc}
     */
    public function setDataElement(DataElement $data): void
    {
        parent::setDataElement($data);

        $this->components = $data->getSize() / 2; // @todo xxx check if components calculation can be abstracted

        $this->debug("text: {text}", ['text' => $this->toString()]);
    }

    /**
     * {@inheritdoc}
     */
    public function numberToBytes($number, $order)
    {
        return ConvertBytes::fromShortRev($number, $order);
    }
}
