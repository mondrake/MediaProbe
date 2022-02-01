<?php

namespace FileEye\MediaProbe\Test;

use FileEye\MediaProbe\Data\DataString;
use FileEye\MediaProbe\Entry\Core\Short;
use FileEye\MediaProbe\Utility\ConvertBytes;

class NumberShortTest extends NumberTestCase
{
    /**
     * {@inheritdoc}
     */
    public function fcSetUp()
    {
        parent::fcSetUp();
        $this->num = new Short($this->mockParentElement, $this->mockDataElement);
        $this->min = 0;
        $this->max = 65535;
    }

    public function testOverflow()
    {
        $this->num->setDataElement(new DataString(ConvertBytes::fromShort(0)));
        $this->assertTrue($this->num->isParsed());
        $this->assertSame(0, $this->num->getValue());

        $this->num->setDataElement(new DataString(ConvertBytes::fromShort($this->min - 1)));
        $this->assertFalse($this->num->isParsed());
        $this->assertSame(0, $this->num->getValue());

        $this->num->setDataElement(new DataString(ConvertBytes::fromShort($this->max + 1)));
        $this->assertFalse($this->num->isParsed());
        $this->assertSame(0, $this->num->getValue());

        $this->num->setDataElement(new DataString(ConvertBytes::fromShort(0) . ConvertBytes::fromShort($this->max + 1)));
        $this->assertFalse($this->num->isParsed());
        $this->assertSame([0, 0], $this->num->getValue());

        $this->num->setDataElement(new DataString(ConvertBytes::fromShort(0) . ConvertBytes::fromShort($this->min - 1)));
        $this->assertFalse($this->num->isParsed());
        $this->assertSame([0, 0], $this->num->getValue());

        $this->num->setDataElement(new DataString(ConvertBytes::fromShort($this->min) . ConvertBytes::fromShort($this->max)));
        $this->assertTrue($this->num->isParsed());
        $this->assertSame([$this->min, $this->max], $this->num->getValue());
    }

    public function testReturnValues()
    {
        $this->num->setDataElement(new DataString(ConvertBytes::fromShort(1) . ConvertBytes::fromShort(2) . ConvertBytes::fromShort(3)));
        $this->assertSame([1, 2, 3], $this->num->getValue());
        $this->assertSame('1 2 3', $this->num->toString());

        $this->num->setDataElement(new DataString(ConvertBytes::fromShort(1)));
        $this->assertSame(1, $this->num->getValue());
        $this->assertSame('1', $this->num->toString());

        $this->num->setDataElement(new DataString(ConvertBytes::fromShort($this->max)));
        $this->assertSame($this->max, $this->num->getValue());
        $this->assertSame((string) $this->max, $this->num->toString());

        $this->num->setDataElement(new DataString(ConvertBytes::fromShort($this->min)));
        $this->assertSame($this->min, $this->num->getValue());
        $this->assertSame((string) $this->min, $this->num->toString());
    }
}
