<?php

declare(strict_types=1);

namespace FileEye\MediaProbe\Model;

use FileEye\MediaProbe\Collection\CollectionInterface;
use FileEye\MediaProbe\ItemDefinition;

/**
 * Base class for Block objects that identify MIME types.
 */
abstract class MediaTypeBlockBase extends BlockBase implements MediaTypeBlockInterface
{
    public function __construct(
        public readonly CollectionInterface $collection,
        BlockBase $parent,
    ) {
        parent::__construct(
            definition: new ItemDefinition($this->collection),
            parent: $parent,
            graft: false,
        );
    }
}
