<?php

namespace AntiMattr\GoogleBundle\Tests\Analytics;

use AntiMattr\GoogleBundle\Analytics\Item;
use PHPUnit\Framework\TestCase;

class ItemTest extends TestCase
{
    private ?Item $item;

    public function setUp(): void
    {
        parent::setup();
        $this->item = new Item();
    }

    public function tearDown(): void
    {
        $this->item = null;
        parent::tearDown();
    }

    public function testConstructor(): void
    {
        $this->assertNull($this->item->getCategory());
        $this->assertNull($this->item->getName());
        $this->assertNull($this->item->getOrderNumber());
        $this->assertNull($this->item->getPrice());
        $this->assertNull($this->item->getQuantity());
        $this->assertNull($this->item->getSku());
    }

    public function testSetGetCategory(): void
    {
        $val = "category";
        $this->item->setCategory($val);
        $this->assertEquals($val, $this->item->getCategory());
    }

    public function testSetGetName(): void
    {
        $val = "name";
        $this->item->setName($val);
        $this->assertEquals($val, $this->item->getName());
    }

    public function testSetGetOrderNumber(): void
    {
        $val = "xxxxxx";
        $this->item->setOrderNumber($val);
        $this->assertEquals($val, $this->item->getOrderNumber());
    }

    public function testSetGetPrice(): void
    {
        $val = 99.99;
        $this->item->setPrice($val);
        $this->assertEquals($val, $this->item->getPrice());
    }

    public function testSetGetQuantity(): void
    {
        $val = 7;
        $this->item->setQuantity($val);
        $this->assertEquals($val, $this->item->getQuantity());
    }

    public function testSetGetSku(): void
    {
        $val = '8888';
        $this->item->setSku($val);
        $this->assertEquals($val, $this->item->getSku());
    }
}
