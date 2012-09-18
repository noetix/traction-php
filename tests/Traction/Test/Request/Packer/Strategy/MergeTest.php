<?php

namespace Traction\Test\Request\Packer\Strategy;

use Traction\Request\Packer\Strategy\Merge;

class MergeTest extends \PHPUnit_Framework_TestCase
{
    public function testValidInterface()
    {
        $this->assertInstanceOf('Traction\Request\Packer\Strategy\StrategyInterface', new Merge);
    }

    public function testPack()
    {
        $data = array();
        $contents = array('LIKE' => 'orange', 'LOVE' => 'apple', 'HATE' => 'banana');
        
        Merge::pack($data, 'FRUIT', $contents);

        $this->assertArrayHasKey('LIKE', $data);
        $this->assertTrue($data['LIKE'] === 'orange');

        $this->assertArrayHasKey('LOVE', $data);
        $this->assertTrue($data['LOVE'] === 'apple');

        $this->assertArrayHasKey('HATE', $data);
        $this->assertTrue($data['HATE'] === 'banana');

        $this->assertCount(3, $data);
    }
}