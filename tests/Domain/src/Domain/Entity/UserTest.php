<?php

namespace Domain\Entity;

class UserTest extends \PHPUnit_Framework_TestCase
{

    public function testUserCanBeInstantiated()
    {
        $this->assertInstanceOf(User::class, new User());
    }

    public function testUserCanGetAndSetName()
    {
        $user = new User();
        $name = 'Gabriel';
        $user->setName($name);
        $this->assertEquals($name, $user->getName());
    }

    public function testUserCanGetAndSetEmail()
    {
        $user = new User();
        $email = 'foo@example.com';
        $user->setEmail($email);
        $this->assertEquals($email, $user->getEmail());
    }

    public function testUserCanGetId()
    {
        $user = new User();
        $this->assertEquals(null, $user->getId());
    }
}