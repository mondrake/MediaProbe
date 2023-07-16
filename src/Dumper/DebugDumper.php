<?php declare(strict_types=1);

namespace FileEye\MediaProbe\Dumper;

/**
 * The element debug dumper visitor.
 */
class DebugDumper implements DumperInterface
{
    public function dumpElement(ElementInterface $element): array
    {
        return [];
    }

    public function dumpEntry(EntryInterface $entry): array
    {
        return [];
    }

    public function dumpBlock(BlockBase $block): array
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
        if ($data_element instanceof DataWindow) {
            $msg .= ' @{offset} size {size}';
            $offset = $data_element->getAbsoluteOffset() . '/0x' . strtoupper(dechex($data_element->getAbsoluteOffset()));
        } else {
            $msg .= ' size {size} byte(s)';
        }
        return [
            '_msg' => $msg,
            'node' => $node,
            'name' => $name,
            'title' => $title,
            'offset' => $offset ?? null,
            'size' => $data_element ? $data_element->getSize() : null,
        ]);
    }
}
