<?php

declare(strict_types=1);

namespace FileEye\MediaProbe\Model;

use FileEye\MediaProbe\Collection\CollectionInterface;

/**
 * Base class for Block objects that identify MIME types.
 */
abstract class MediaTypeBlockBase extends BlockBase implements MediaTypeBlockInterface
{
    public function __construct(
        CollectionInterface $collection,
        BlockInterface $parent,
    ) {
        parent::__construct(
            collection: $collection,
            parent: $parent,
        );
    }
}
