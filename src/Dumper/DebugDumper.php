<?php declare(strict_types=1);

namespace FileEye\MediaProbe\Dumper;

use FileEye\MediaProbe\Data\DataFormat;
use FileEye\MediaProbe\Model\BlockBase;
use FileEye\MediaProbe\Model\ElementInterface;
use FileEye\MediaProbe\Model\EntryInterface;

/**
 * The element debug dumper visitor.
 */
class DebugDumper implements DumperInterface
{
    public function dumpElement(ElementInterface $element, array $context = []): array
    {
        return [];
    }

    public function dumpEntry(EntryInterface $entry, array $context = []): array
    {
        return [];
    }

    public function dumpBlock(BlockBase $block, array $context = []): array
    {
        $msg = '{node}';
        $node = $block->getNodeName();
        $name = $block->getAttribute('name');
        if ($name ==! null) {
            $msg .= ':{name}';
        }
        $title = $block->getCollection()->getPropertyValue('title');
        if ($title ==! null) {
            $msg .= ' ({title})';
        }
        if ($context['dataElement'] instanceof DataWindow) {
            $msg .= ' @{offset} size {size}';
            $offset = $context['dataElement']->getAbsoluteOffset() . '/0x' . strtoupper(dechex($context['dataElement']->getAbsoluteOffset()));
        } else {
            $msg .= ' size {size} byte(s)';
        }
        return [
            '_msg' => $msg,
            'node' => $node,
            'name' => $name,
            'title' => $title,
            'offset' => $offset ?? null,
            'size' => $context['dataElement'] ? $context['dataElement']->getSize() : null,
        ];
    }
}
