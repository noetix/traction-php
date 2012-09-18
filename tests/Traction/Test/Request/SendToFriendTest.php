<?php

namespace Traction\Test\Request;

use Traction\Request\SendToFriend;

class SendToFriendTest extends \PHPUnit_Framework_TestCase
{
    public function testPackable()
    {
        $this->assertInstanceOf('Traction\Request\PackableInterface', new SendToFriend);
    }

    public function testRequestable()
    {
        $this->assertInstanceOf('Traction\Request\RequestableInterface', new SendToFriend);
    }

    public function testValidPath()
    {
        $obj = new SendToFriend;

        $this->assertTrue(is_string($obj->getPath()));
        $this->assertStringStartsWith('/', $obj->getPath());
    }
}