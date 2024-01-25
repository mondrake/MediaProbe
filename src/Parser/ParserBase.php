<?php

namespace FileEye\MediaProbe\Parser;

use FileEye\MediaProbe\Data\DataElement;
use FileEye\MediaProbe\Model\BlockInterface;

class ParserBase
{
    public function __construct(
        protected readonly BlockInterface $block,
    ) {
    }

    abstract public function parseData(DataElement $data): void;
}
