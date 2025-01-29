<?php

declare(strict_types=1);

namespace FileEye\MediaProbe\Dumper;

/**
 * Interface for the element dumper visitor.
 */
interface DumperInterface
{
    public function dumpElement(ElementInterface $element, array $context = []): array;

    public function dumpEntry(EntryInterface $entry, array $context = []): array;

    public function dumpBlock(BlockBase $block, array $context = []): array;
}
