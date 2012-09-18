<?php

namespace Traction\Test\Request\Packer\Strategy;

use Traction\Request\Packer\Strategy\Single;

class SingleTest extends \PHPUnit_Framework_TestCase
{
    public function testValidInterface()
    {
        $this->assertInstanceOf('Traction\Request\Packer\Strategy\StrategyInterface', new Single);
    }

    public function testPack()
    {
        $data = array();
        
        Single::pack($data, 'FRUIT', 'orange');

        $this->assertArrayHasKey('FRUIT', $data);
        $this->assertTrue($data['FRUIT'] === 'orange');
        $this->assertCount(1, $data);
    }
}