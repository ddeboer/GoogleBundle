<?php

namespace AntiMattr\GoogleBundle\Tests\Maps;

use AntiMattr\GoogleBundle\Maps\Marker;
use PHPUnit\Framework\TestCase;

class MarkerTest extends TestCase
{
    protected ?Marker $marker;

    public function setUp(): void
    {
        parent::setup();
        $this->marker = new Marker();
    }

    public function tearDown(): void
    {
        $this->marker = null;
        parent::tearDown();
    }

    public function testConstructor(): void
    {
        $this->assertNull($this->marker->getColor());
        $this->assertNull($this->marker->getLabel());
        $this->assertNull($this->marker->getLatitude());
        $this->assertNull($this->marker->getLongitude());
        $this->assertFalse($this->marker->hasMeta());
    }

    public function testSetGetColor(): void
    {
        $val = "red";
        $this->marker->setColor("red");
        $this->assertEquals($val, $this->marker->getColor());
    }

    public function testSetGetLabel(): void
    {
        $val = "A";
        $this->marker->setLabel($val);
        $this->assertEquals($val, $this->marker->getLabel());
    }

    public function testSetGetLatitude(): void
    {
        $val = 14.8889;
        $this->marker->setLatitude($val);
        $this->assertEquals($val, $this->marker->getLatitude());
    }

    public function testSetGetLongitude(): void
    {
        $val = 15.9669;
        $this->marker->setLongitude($val);
        $this->assertEquals($val, $this->marker->getLongitude());
    }

    public function testSetGetMeta(): void
    {
        $meta = [1, 2, 3];
        $this->marker->setMeta($meta);
        $this->assertEquals($meta, $this->marker->getMeta());
    }

}
