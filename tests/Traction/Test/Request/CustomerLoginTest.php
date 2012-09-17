<?php

namespace Traction\Test\Request;

use Traction\Request\CustomerLogin;

class CustomerLoginTest extends \PHPUnit_Framework_TestCase
{
    public function testPackable()
    {
    	$this->assertInstanceOf('Traction\Request\PackableInterface', new CustomerLogin);
    }

    public function testRequestable()
    {
    	$this->assertInstanceOf('Traction\Request\RequestableInterface', new CustomerLogin);
    }

    public function testValidPath()
    {
    	$obj = new CustomerLogin;

    	$this->assertTrue(is_string($obj->getPath()));
    	$this->assertStringStartsWith('/', $obj->getPath());
    }
}