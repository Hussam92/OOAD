<?php

namespace Test;

use PHPUnit\Framework\TestCase;
use PublicPlan\Model\User;

class UserTest extends TestCase
{
    public function testUser(): void
    {
        $user = new User('Hussam Itani','03.01.1992');
        static::assertInstanceOf(User::class,$user);
        static::assertEquals('Hussam Itani', $user->getName());
        static::assertTrue(true);
        static::assertEquals(3, $user->getBirthday()->format('d'));
        static::assertEquals(1, $user->getBirthday()->format('m'));
        static::assertEquals(1992, $user->getBirthday()->format('Y'));

        //static::assertNull($user->getWeight());
        //static::assertNull($user->getShoeSize());
        //static::assertNull($user->isHasDriverLicense());
        //static::assertNull($user->getLanguages());
    }
}