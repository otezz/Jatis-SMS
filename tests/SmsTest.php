<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Otezz\Jatis\Sms;

class SmsTest extends PHPUnit_Framework_TestCase
{
    private $username = 'test';
    private $password = 'test';

    public function setUp(){ }
    public function tearDown(){ }

    /** @test */
    public function it_can_initialize_the_class()
    {
        $sms = new Sms($this->username, $this->password);
        $this->assertInstanceOf(Sms::class, $sms);
    }
}