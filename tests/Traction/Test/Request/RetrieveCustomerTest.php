<?php

namespace Traction\Test\Request;

use Traction\Request\RetrieveCustomer;

class RetrieveCustomerTest extends \PHPUnit_Framework_TestCase
{
    public function testPackable()
    {
    	$this->assertInstanceOf('Traction\Request\PackableInterface', new RetrieveCustomer);
    }

    public function testRequestable()
    {
    	$this->assertInstanceOf('Traction\Request\RequestableInterface', new RetrieveCustomer);
    }

    public function testValidPath()
    {
    	$obj = new RetrieveCustomer;

    	$this->assertTrue(is_string($obj->getPath()));
    	$this->assertStringStartsWith('/', $obj->getPath());
    }
}