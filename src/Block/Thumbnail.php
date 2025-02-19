<?php

namespace FileEye\MediaProbe\Block;

use FileEye\MediaProbe\Block\Media\Tiff\Ifd;
use FileEye\MediaProbe\Collection\CollectionInterface;
use FileEye\MediaProbe\Data\DataElement;
use FileEye\MediaProbe\Entry\Core\Undefined;
use FileEye\MediaProbe\ItemDefinition;
use FileEye\MediaProbe\Model\LeafBlockBase;
use FileEye\MediaProbe\Model\RootBlockBase;

/**
 * Class used to hold data for a JPEG Thumbnail.
 */
class Thumbnail extends LeafBlockBase
{
    public function __construct(
        public readonly CollectionInterface $collection,
        Ifd|RootBlockBase $parent,
    ) {
        parent::__construct(
            definition: new ItemDefinition($this->collection),
            parent: $parent,
            graft: false,
        );
    }

    public function fromDataElement(DataElement $data): Thumbnail
    {
        assert($this->debugInfo(['dataElement' => $data]));
        // Adds the segment data as an Undefined entry.
        new Undefined($this, $data);
        return $this;
    }

    protected function getContextPathSegmentPattern(): string
    {
        return '/{DOMNode}';
    }
}
