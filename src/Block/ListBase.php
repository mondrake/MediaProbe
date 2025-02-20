<?php

namespace FileEye\MediaProbe\Block;

use FileEye\MediaProbe\Block\Media\Tiff\IfdEntryValueObject;
use FileEye\MediaProbe\ItemDefinition;
use FileEye\MediaProbe\Model\BlockBase;

/**
 * Abstract class representing a generic table of data.
 *
 * Its extensions could be IFDs (Image File Directory), indexes, maps, etc.
 *
 * As this class is abstract you cannot instantiate objects from it. It only
 * serves as an ancestor to define common methods to its class extension
 * implementations.
 */
abstract class ListBase extends BlockBase
{
    /**
     * The format of data.
     */
    protected int $format;

    /**
     * The amount of components in the list.
     */
    protected int $components;

    public function __construct(
        public readonly IfdEntryValueObject $ifdEntry,
        BlockBase $parent,
    ) {
        parent::__construct(
            definition: new ItemDefinition(
                collection: $ifdEntry->collection,
                format: $ifdEntry->dataFormat,
                valuesCount: $ifdEntry->countOfComponents,
                dataOffset: $ifdEntry->isOffset ? $ifdEntry->dataOffset() : $ifdEntry->dataValue(),
                sequence: $ifdEntry->sequence,
            ),
            parent: $parent,
            graft: false,
        );
        $this->components = $ifdEntry->countOfComponents;
        $this->format = $ifdEntry->dataFormat;
    }

    public function getComponents(): int
    {
        return count($this->getMultipleElements('*[not(self::rawData)]'));
    }

    protected function getContextPathSegmentPattern(): string
    {
        return '/{DOMNode}:{name}:{id}';
    }
}
