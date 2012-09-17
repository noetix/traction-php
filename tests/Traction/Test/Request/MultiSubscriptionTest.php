<?php

namespace Traction\Test\Request;

use Traction\Request\MultiSubscription;

class MultiSubscriptionTest extends \PHPUnit_Framework_TestCase
{
    public function testPackable()
    {
    	$this->assertInstanceOf('Traction\Request\PackableInterface', new MultiSubscription);
    }

    public function testRequestable()
    {
    	$this->assertInstanceOf('Traction\Request\RequestableInterface', new MultiSubscription);
    }

    public function testValidPath()
    {
    	$obj = new MultiSubscription;

    	$this->assertTrue(is_string($obj->getPath()));
    	$this->assertStringStartsWith('/', $obj->getPath());
    }
}