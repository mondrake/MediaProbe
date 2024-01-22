<?php

namespace FileEye\MediaProbe\Parser;

class ParserBase
{
    public function __construct(
        protected readonly BlockInterface $block,
    )
    {
    }
}
