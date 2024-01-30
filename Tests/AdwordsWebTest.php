<?php

namespace AntiMattr\GoogleBundle\Tests;

use AntiMattr\GoogleBundle\Adwords;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class AdwordsWebTest extends WebTestCase
{
    private ?Adwords $adwords;

    protected function setUp(): void
    {
        parent::setUp();
        self::bootKernel();
        $this->adwords = static::$kernel->getContainer()->get('google.adwords');
    }

    protected function tearDown(): void
    {
        self::ensureKernelShutdown();
        $this->adwords = null;
        parent::tearDown();
    }

    public function testConstructor()
    {
        $this->assertFalse($this->adwords->hasActiveConversion());
        $this->assertNull($this->adwords->getActiveConversion());
    }

    public function testActivateGetConversion()
    {
        $this->adwords->activateConversionByKey('incorrect_conversion');
        $this->assertFalse($this->adwords->hasActiveConversion());

        $this->adwords->activateConversionByKey('account_create');
        $this->assertTrue($this->adwords->hasActiveConversion());

        $this->assertNotNull($this->adwords->getActiveConversion());

        // Object will remain in service for duration of execution
        $this->assertNotNull($this->adwords->getActiveConversion());
    }
}
