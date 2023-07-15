<?php declare(strict_types=1);

namespace FileEye\MediaProbe\Model;

use FileEye\MediaProbe\ItemDefinition;

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
     * The Xpath object must be associated to the root element.
     */
    protected \DOMXpath $XPath;

    /**
     * @param \FileEye\MediaProbe\ItemDefinition $definition
     *   The Item Definition of this Block.
     */
    public function __construct(ItemDefinition $definition)
    {
        parent::__construct($definition);
        $this->XPath = new \DOMXPath($this->DOMNode->ownerDocument);
    }
}
