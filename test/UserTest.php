<?php

namespace Test;

use PHPUnit\Framework\TestCase;
use Publicplan\Model\User;

class UserTest extends TestCase
{
    public function testUser(): void
    {
        $user = new User('Hussam Itani','03.01.1992');
        $this->assertInstanceOf(User::class,$user);
        $this->assertEquals('Hussam Itani', $user->getName());
        $this->assertTrue(true);
        $this->assertEquals(1, $user->getBirthday()->format('m'));
    }
}