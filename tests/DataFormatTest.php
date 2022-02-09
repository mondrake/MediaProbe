<?php

namespace FileEye\MediaProbe\Test;

use FileEye\MediaProbe\ItemFormat;
use FileEye\MediaProbe\CollectionException;

class DataFormatTest extends MediaProbeTestCaseBase
{
    public function testGetName()
    {
        $this->assertSame('Ascii', ItemFormat::getName(ItemFormat::ASCII));
        $this->assertSame('Float', ItemFormat::getName(ItemFormat::FLOAT));
        $this->assertSame('Undefined', ItemFormat::getName(ItemFormat::UNDEFINED));
        $this->expectException(CollectionException::class);
        $this->expectExceptionMessage('Missing collection for item \'UnexistingFormat\' in \'Format\'');
        $format = ItemFormat::getName(100);
    }

    public function testGetIdFromName()
    {
        $this->assertSame(ItemFormat::ASCII, ItemFormat::getFromName('Ascii'));
        $this->assertSame(ItemFormat::FLOAT, ItemFormat::getFromName('Float'));
        $this->assertSame(ItemFormat::UNDEFINED, ItemFormat::getFromName('Undefined'));
        $this->expectException(CollectionException::class);
        $this->expectExceptionMessage('Missing collection for item \'UnexistingFormat\' in \'Format\'');
        $format = ItemFormat::getFromName('UnexistingFormat');
    }

    public function testGetSize()
    {
        $this->assertSame(1, ItemFormat::getSize(ItemFormat::ASCII));
        $this->assertSame(4, ItemFormat::getSize(ItemFormat::FLOAT));
        $this->assertSame(1, ItemFormat::getSize(ItemFormat::UNDEFINED));
        $this->expectException(CollectionException::class);
        $this->expectExceptionMessage('Missing collection for item \'UnexistingFormat\' in \'Format\'');
        $format = ItemFormat::getSize(100);
    }
}
