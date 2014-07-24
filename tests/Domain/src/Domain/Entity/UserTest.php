<?php

namespace Domain\Entity;

class UserTest extends \PHPUnit_Framework_TestCase
{

    public function testUserCanBeInstantiated()
    {
        $this->assertInstanceOf(User::class, new User());
    }

}