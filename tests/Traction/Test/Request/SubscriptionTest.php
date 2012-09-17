<?php

namespace Traction\Test\Request;

use Traction\Request\Subscription;

class SubscriptionTest extends \PHPUnit_Framework_TestCase
{
    public function testPackable()
    {
    	$this->assertInstanceOf('Traction\Request\PackableInterface', new Subscription);
    }

    public function testRequestable()
    {
    	$this->assertInstanceOf('Traction\Request\RequestableInterface', new Subscription);
    }

    public function testValidPath()
    {
    	$obj = new Subscription;

    	$this->assertTrue(is_string($obj->getPath()));
    	$this->assertStringStartsWith('/', $obj->getPath());
    }
}