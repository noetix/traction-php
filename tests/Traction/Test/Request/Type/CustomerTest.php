<?php

namespace Traction\Test\Request\Type;

use Traction\Request\Type\Customer;

class CustomerTest extends \PHPUnit_Framework_TestCase
{
    public function testPackable()
    {
        $this->assertInstanceOf('Traction\Request\PackableInterface', new Customer);
    }

    public function testNotRequestable()
    {
        $this->assertNotInstanceOf('Traction\Request\RequestableInterface', new Customer);
    }
}