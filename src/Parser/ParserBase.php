<?php

namespace FileEye\MediaProbe\Parser;

use FileEye\MediaProbe\Data\DataElement;
use FileEye\MediaProbe\Model\BlockInterface;

abstract class ParserBase
{
    public function __construct(
        protected readonly BlockInterface $block,
    ) {
    }

    abstract public function parseData(DataElement $data): void;

    /**
     * Invoke post-parse callbacks.
     *
     * @param \FileEye\MediaProbe\Data\DataElement $dataElement
     *   @todo
     */
    protected function executePostParseCallbacks(DataElement $dataElement): void
    {
        $post_load_callbacks = $this->block->getCollection()->getPropertyValue('postParse');
        if (!empty($post_load_callbacks)) {
            foreach ($post_load_callbacks as $callback) {
                call_user_func($callback, $dataElement, $this->block);
            }
        }
    }

}
