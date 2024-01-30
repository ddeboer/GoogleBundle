<?php

namespace AntiMattr\GoogleBundle\Tests\Adwords;

use AntiMattr\GoogleBundle\Adwords\Conversion;
use PHPUnit\Framework\TestCase;

class ConversionTest extends TestCase
{
    public function testConstructor(): void
    {
        $conversion = new Conversion(
            'id',
            'label',
            'value',
            'value',
            'color',
            'language',
        );
        $this->assertSame('id', $conversion->getId());
        $this->assertSame('label', $conversion->getLabel());
        $this->assertSame('value', $conversion->getValue());
        $this->assertSame('value', $conversion->getFormat());
        $this->assertSame('color', $conversion->getColor());
        $this->assertSame('language', $conversion->getLanguage());
    }
}
