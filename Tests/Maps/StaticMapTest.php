<?php

namespace AntiMattr\GoogleBundle\Tests\Maps;

use AntiMattr\GoogleBundle\Maps\Marker;
use AntiMattr\GoogleBundle\Maps\StaticMap;
use PHPUnit\Framework\TestCase;

class StaticMapTest extends TestCase
{
    private ?StaticMap $map;

    public function setUp(): void
    {
        parent::setup();
        $this->map = new StaticMap();
    }

    public function tearDown(): void
    {
        $this->map = null;
        parent::tearDown();
    }

    public function testConstructor(): void
    {
        $this->assertNull($this->map->getId());
        $this->assertFalse($this->map->hasMarkers());
        $this->assertFalse($this->map->hasMeta());
        $this->assertNull($this->map->getCenter());
        $this->assertFalse($this->map->getSensor());
        $this->assertNull($this->map->getSize());
        $this->assertNull($this->map->getType());
        $this->assertNull($this->map->getZoom());
    }

    public function testSetGetId(): void
    {
        $val = 'xxxxxx';
        $this->map->setId($val);
        $this->assertEquals($val, $this->map->getId());
    }

    public function testSetGetMarkers(): void
    {
        $marker = new Marker();
        $this->assertFalse($this->map->hasMarker($marker));
        $this->map->addMarker($marker);
        $this->assertTrue($this->map->hasMarker($marker));
        $this->map->removeMarker($marker);
        $this->assertFalse($this->map->hasMarker($marker));
    }

    public function testSetGetMeta(): void
    {
        $meta = [1, 2, 3];
        $this->map->setMeta($meta);
        $this->assertEquals($meta, $this->map->getMeta());
    }

    public function testSetGetCenter(): void
    {
        $val = 'Brooklyn Bridge, New York';
        $this->map->setCenter($val);
        $this->assertEquals($val, $this->map->getCenter());
    }

    public function testSetGetSensor(): void
    {
        $val = false;
        $this->map->setSensor($val);
        $this->assertEquals($val, $this->map->getSensor());
    }

    public function testSetGetSize(): void
    {
        $val = '512x512';
        $this->map->setSize($val);
        $this->assertEquals($val, $this->map->getSize());
    }

    public function testSetGetType(): void
    {
        $val = StaticMap::TYPE_ROADMAP;
        $this->map->setType($val);
        $this->assertEquals($val, $this->map->getType());
    }

    public function testSetGetZoom(): void
    {
        $val = 14;
        $this->map->setZoom($val);
        $this->assertEquals($val, $this->map->getZoom());
    }
}
