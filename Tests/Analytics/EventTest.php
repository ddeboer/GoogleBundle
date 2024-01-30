<?php

namespace AntiMattr\GoogleBundle\Tests\Analytics;

use AntiMattr\GoogleBundle\Analytics\Event;
use PHPUnit\Framework\TestCase;

class EventTest extends TestCase
{
    public function testConstructor(): void
    {
        $event = new Event('Test category', 'Test action');

        $this->assertSame('Test category', $event->getCategory());
        $this->assertSame('Test action', $event->getAction());
        $this->assertNull($event->getLabel());
        $this->assertNull($event->getValue());
        $this->assertSame('.', $event->getTrackerName());
    }

    public function testConstructor2(): void
    {
        $event = new Event('Test category', 'Test action', 'Test label', 'Test value', 'Test trackerName');

        $this->assertSame('Test category', $event->getCategory());
        $this->assertSame('Test action', $event->getAction());
        $this->assertSame('Test label', $event->getLabel());
        $this->assertSame('Test value', $event->getValue());
        $this->assertSame('Test trackerName.', $event->getTrackerName());
    }

}
