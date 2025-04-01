<?php

namespace FileEye\MediaProbe\Block\Media\Jpeg;

use FileEye\MediaProbe\Block\Media\Jpeg;
use FileEye\MediaProbe\Collection\CollectionInterface;
use FileEye\MediaProbe\Model\BlockBase;

/**
 * Abstract class for JPEG data segments.
 */
abstract class SegmentBase extends BlockBase
{
    public function __construct(
        CollectionInterface $collection,
        Jpeg $parent,
    ) {
        parent::__construct(
            collection: $collection,
            parent: $parent,
        );
    }

    protected function getContextPathSegmentPattern(): string
    {
        return '/{DOMNode}:{name}:{id}';
    }
}
