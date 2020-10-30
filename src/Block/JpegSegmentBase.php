<?php

namespace FileEye\MediaProbe\Block;

use FileEye\MediaProbe\Collection;
use FileEye\MediaProbe\Data\DataElement;
use FileEye\MediaProbe\Data\DataWindow;
use FileEye\MediaProbe\ItemDefinition;
use FileEye\MediaProbe\Utility\ConvertBytes;

/**
 * Abstract class for JPEG data segments.
 */
abstract class JpegSegmentBase extends BlockBase
{
    // xx
    protected $definition;

    /**
     * Construct a new JPEG segment object.
     */
    public function __construct(ItemDefinition $definition, Jpeg $jpeg, JpegSegmentBase $reference_jpeg_segment = null)
    {
        $collection = $definition->getCollection();
        parent::__construct($collection, $jpeg, $reference_jpeg_segment);
        $this->definition = $definition;
    }

    /**
     * {@inheritdoc}
     */
    protected function getContextPathSegmentPattern()
    {
        return '/{DOMNode}:{name}:{id}';
    }
}
