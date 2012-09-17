<?php

namespace Traction\Test\Request;

use Traction\Request\SmsGateway;

class SmsGatewayTest extends \PHPUnit_Framework_TestCase
{
    public function testPackable()
    {
    	$this->assertInstanceOf('Traction\Request\PackableInterface', new SmsGateway);
    }

    public function testRequestable()
    {
    	$this->assertInstanceOf('Traction\Request\RequestableInterface', new SmsGateway);
    }

    public function testValidPath()
    {
    	$obj = new SmsGateway;

    	$this->assertTrue(is_string($obj->getPath()));
    	$this->assertStringStartsWith('/', $obj->getPath());
    }
}