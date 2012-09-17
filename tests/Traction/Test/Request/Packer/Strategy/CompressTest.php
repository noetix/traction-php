<?php

namespace Traction\Test\Request\Packer\Strategy;

use Traction\Request\Packer\Strategy\Compress;

class CompressTest extends \PHPUnit_Framework_TestCase
{
    public function testValidInterface()
    {
    	$this->assertInstanceOf('Traction\Request\Packer\Strategy\StrategyInterface', new Compress);
    }

    public function testPack()
    {
    	$data = array();
        $contents = array('LIKE' => 'orange', 'LOVE' => 'apple', 'HATE' => 'banana');
    	
    	Compress::pack($data, 'FRUIT', $contents);

        $this->assertArrayHasKey('FRUIT', $data);

        $this->assertTrue($data['FRUIT'] === "LIKE|orange".chr(31)."LOVE|apple".chr(31)."HATE|banana",
            'Compressed string is not valid.');

        $this->assertCount(1, $data);
    }
}