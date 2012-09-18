<?php

namespace Traction\Test\Request;

use Traction\Request\PromotionGroupReport;

class PromotionGroupReportTest extends \PHPUnit_Framework_TestCase
{
    public function testPackable()
    {
        $this->assertInstanceOf('Traction\Request\PackableInterface', new PromotionGroupReport);
    }

    public function testRequestable()
    {
        $this->assertInstanceOf('Traction\Request\RequestableInterface', new PromotionGroupReport);
    }

    public function testValidPath()
    {
        $obj = new PromotionGroupReport;

        $this->assertTrue(is_string($obj->getPath()));
        $this->assertStringStartsWith('/', $obj->getPath());
    }
}