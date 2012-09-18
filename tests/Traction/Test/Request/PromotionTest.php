<?php

namespace Traction\Test\Request;

use Traction\Request\Promotion;

class PromotionTest extends \PHPUnit_Framework_TestCase
{
    public function testPackable()
    {
        $this->assertInstanceOf('Traction\Request\PackableInterface', new Promotion);
    }

    public function testRequestable()
    {
        $this->assertInstanceOf('Traction\Request\RequestableInterface', new Promotion);
    }

    public function testValidPath()
    {
        $obj = new Promotion;

        $this->assertTrue(is_string($obj->getPath()));
        $this->assertStringStartsWith('/', $obj->getPath());
    }
}