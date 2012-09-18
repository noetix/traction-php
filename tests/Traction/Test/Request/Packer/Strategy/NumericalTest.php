<?php

namespace Traction\Test\Request\Packer\Strategy;

use Traction\Request\Packer\Strategy\Numerical;

class NumericalTest extends \PHPUnit_Framework_TestCase
{
    public function testValidInterface()
    {
        $this->assertInstanceOf('Traction\Request\Packer\Strategy\StrategyInterface', new Numerical);
    }

    public function testPack()
    {
        $data = array();
        
        Numerical::pack($data, 'FRUIT', array('orange', 'banana', 'apple'));

        $this->assertArrayHasKey('FRUIT1', $data);
        $this->assertTrue($data['FRUIT1'] === 'orange');

        $this->assertArrayHasKey('FRUIT2', $data);
        $this->assertTrue($data['FRUIT2'] === 'banana');

        $this->assertArrayHasKey('FRUIT3', $data);
        $this->assertTrue($data['FRUIT3'] === 'apple');
        
        $this->assertCount(3, $data);
    }
}