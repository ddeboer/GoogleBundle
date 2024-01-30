<?php

namespace AntiMattr\GoogleBundle\Tests\Analytics;

use AntiMattr\GoogleBundle\Analytics\Transaction;
use PHPUnit\Framework\TestCase;

class TransactionTest extends TestCase
{
    protected ?Transaction $transaction;

    public function setUp(): void
    {
        parent::setup();
        $this->transaction = new Transaction();
    }

    public function tearDown(): void
    {
        $this->transaction = null;
        parent::tearDown();
    }

    public function testConstructor(): void
    {
        $this->assertNull($this->transaction->getAffiliation());
        $this->assertNull($this->transaction->getCity());
        $this->assertNull($this->transaction->getCountry());
        $this->assertNull($this->transaction->getOrderNumber());
        $this->assertNull($this->transaction->getShipping());
        $this->assertNull($this->transaction->getState());
        $this->assertNull($this->transaction->getTax());
        $this->assertNull($this->transaction->getTotal());
    }

    public function testSetGetAffiliation(): void
    {
        $val = "affiliation";
        $this->transaction->setAffiliation($val);
        $this->assertEquals($val, $this->transaction->getAffiliation());
    }

    public function testSetGetCity(): void
    {
        $val = "city";
        $this->transaction->setCity($val);
        $this->assertEquals($val, $this->transaction->getCity());
    }

    public function testSetGetCountry(): void
    {
        $val = "country";
        $this->transaction->setCountry($val);
        $this->assertEquals($val, $this->transaction->getCountry());
    }

    public function testSetGetOrderNumber(): void
    {
        $val = "orderNumber";
        $this->transaction->setOrderNumber($val);
        $this->assertEquals($val, $this->transaction->getOrderNumber());
    }

    public function testSetGetShipping(): void
    {
        $val = 99.99;
        $this->transaction->setShipping($val);
        $this->assertEquals($val, $this->transaction->getShipping());
    }

    public function testSetGetState(): void
    {
        $val = "state";
        $this->transaction->setState($val);
        $this->assertEquals($val, $this->transaction->getState());
    }

    public function testSetGetTax(): void
    {
        $val = 11.11;
        $this->transaction->setTax($val);
        $this->assertEquals($val, $this->transaction->getTax());
    }

    public function testSetGetTotal(): void
    {
        $val = 100.00;
        $this->transaction->setTotal($val);
        $this->assertEquals($val, $this->transaction->getTotal());
    }

}
