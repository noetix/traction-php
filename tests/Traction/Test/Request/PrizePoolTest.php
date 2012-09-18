<?php

namespace Traction\Test\Request;

use Traction\Request\PrizePool;

class PrizePoolTest extends \PHPUnit_Framework_TestCase
{
    public function testPackable()
    {
        $this->assertInstanceOf('Traction\Request\PackableInterface', new PrizePool);
    }

    public function testRequestable()
    {
        $this->assertInstanceOf('Traction\Request\RequestableInterface', new PrizePool);
    }

    public function testValidPath()
    {
        $obj = new PrizePool;

        $this->assertTrue(is_string($obj->getPath()));
        $this->assertStringStartsWith('/', $obj->getPath());
    }
}