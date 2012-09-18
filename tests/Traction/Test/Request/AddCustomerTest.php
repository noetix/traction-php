<?php

namespace Traction\Test\Request;

use Traction\Request\AddCustomer;

class AddCustomerTest extends \PHPUnit_Framework_TestCase
{
    public function testPackable()
    {
        $this->assertInstanceOf('Traction\Request\PackableInterface', new AddCustomer);
    }

    public function testRequestable()
    {
        $this->assertInstanceOf('Traction\Request\RequestableInterface', new AddCustomer);
    }

    public function testValidPath()
    {
        $obj = new AddCustomer;

        $this->assertTrue(is_string($obj->getPath()));
        $this->assertStringStartsWith('/', $obj->getPath());
    }
}