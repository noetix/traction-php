<?php

namespace Traction\Test\Request;

use Traction\Request\AddCustomerInteraction;

class AddCustomerInteractionTest extends \PHPUnit_Framework_TestCase
{
    public function testPackable()
    {
        $this->assertInstanceOf('Traction\Request\PackableInterface', new AddCustomerInteraction);
    }

    public function testRequestable()
    {
        $this->assertInstanceOf('Traction\Request\RequestableInterface', new AddCustomerInteraction);
    }

    public function testValidPath()
    {
        $obj = new AddCustomerInteraction;

        $this->assertTrue(is_string($obj->getPath()));
        $this->assertStringStartsWith('/', $obj->getPath());
    }
}