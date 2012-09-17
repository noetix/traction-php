<?php

namespace Traction\Test;

use Traction\Handler;

class HandlerTest extends \PHPUnit_Framework_TestCase
{
    public function testBadArguements()
    {
        $this->setExpectedException('InvalidArgumentException');

        $handler = new Handler(array('foo' => 'bar'));
    }
}