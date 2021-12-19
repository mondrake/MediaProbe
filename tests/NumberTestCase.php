<?php

namespace FileEye\MediaProbe\Test;

use FileEye\MediaProbe\MediaProbe;

abstract class NumberTestCase extends EntryTestBase
{
    protected $min;
    protected $max;
    protected $num;

    public function testOverflow()
    {
        $this->num->setDataElement([0]);
        $this->assertTrue($this->num->isParsed());
        $this->assertSame(0, $this->num->getValue());

        $this->num->setDataElement([$this->min - 1]);
        $this->assertFalse($this->num->isParsed());
        $this->assertSame(0, $this->num->getValue());

        $this->num->setDataElement([$this->max + 1]);
        $this->assertFalse($this->num->isParsed());
        $this->assertSame(0, $this->num->getValue());

        $this->num->setDataElement([0, $this->max + 1]);
        $this->assertFalse($this->num->isParsed());
        $this->assertSame([0, 0], $this->num->getValue());

        $this->num->setDataElement([0, $this->min - 1]);
        $this->assertFalse($this->num->isParsed());
        $this->assertSame([0, 0], $this->num->getValue());

        $this->num->setDataElement([$this->min, $this->max]);
        $this->assertTrue($this->num->isParsed());
        $this->assertSame([$this->min, $this->max], $this->num->getValue());
    }

    public function testReturnValues()
    {
        $this->num->setDataElement([1, 2, 3]);
        $this->assertSame([1, 2, 3], $this->num->getValue());
        $this->assertSame('1 2 3', $this->num->toString());

        $this->num->setDataElement([1]);
        $this->assertSame(1, $this->num->getValue());
        $this->assertSame('1', $this->num->toString());

        $this->num->setDataElement([$this->max]);
        $this->assertSame($this->max, $this->num->getValue());
        $this->assertSame((string) $this->max, $this->num->toString());

        $this->num->setDataElement([$this->min]);
        $this->assertSame($this->min, $this->num->getValue());
        $this->assertSame((string) $this->min, $this->num->toString());
    }
}
