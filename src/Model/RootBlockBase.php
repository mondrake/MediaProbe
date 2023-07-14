<?php

namespace FileEye\MediaProbe\Model;

use FileEye\MediaProbe\Collection\CollectionInterface;
use FileEye\MediaProbe\Data\DataElement;
use FileEye\MediaProbe\Data\DataWindow;
use FileEye\MediaProbe\Model\ElementBase;
use FileEye\MediaProbe\Model\EntryInterface;
use FileEye\MediaProbe\ItemDefinition;
use FileEye\MediaProbe\MediaProbe;
use FileEye\MediaProbe\Utility\ConvertBytes;

/**
 * Base class for MediaProbe blocks.
 *
 * As this class is abstract you cannot instantiate objects from it. It only
 * serves as a common ancestor to define the methods common to all MediaProbe
 * Block objects.
 */
abstract class RootBlockBase extends BlockBase
{
    /**
     * Constructs a Block object.
     *
     * @param \FileEye\MediaProbe\ItemDefinition $definition
     *            The Item Definition of this Block.
     */
    public function __construct(ItemDefinition $definition)
    {
        $this->definition = $definition;

        $this->setDOMRoot($this->getCollection()->getPropertyValue('DOMNode'));

        if ($this->getCollection()->hasProperty('item')) {
            $this->setAttribute('id', $this->getCollection()->getPropertyValue('item'));
        }
        if ($this->getCollection()->hasProperty('name')) {
            $this->setAttribute('name', $this->getCollection()->getPropertyValue('name'));
        }
    }
}
