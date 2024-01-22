<?php

namespace FileEye\MediaProbe\Parser;

use FileEye\MediaProbe\Parser\BlockInterface;

class ParserBase
{
    public function __construct(
        protected readonly BlockInterface $block,
    )
    {
    }
}
