<?php

namespace Test;

use PHPUnit\Framework\TestCase;
use Interfaces\Model\Image;
use Interfaces\Model\Passport;
use Interfaces\Model\Video;
use Interfaces\Model\User;

class UserRelationTest extends TestCase
{
    public function testUserImages(): void
    {
        $user = new User('Max Mustermann', '01.01.1990');

        self::assertEmpty($user->getImages());

        $user->addImage(new Image('A new Image', base64_encode('hello world')));

        self::assertCount(1, $user->getImages());

        $image = $user->getImages()[0];

        self::assertEquals($image->getAuthor()->getName(), $user->getName());
    }
    
    public function testUserVideos(): void
    {
        $user = new User('Max Mustermann', '01.01.1990');

        self::assertEmpty($user->getVideos());

        $user->addVideo(new Video('A new Video'));

        self::assertCount(1, $user->getVideos());

        $video = $user->getVideos()[0];

        self::assertEquals($video->getAuthor()->getName(), $user->getName());
    }

    public function testUserPassport(): void
    {
        $user = new User('Max Mustermann', '01.01.1990');
        $passport = new Passport('C7G3T9IK99', $user);

        self::assertNotNull($passport->getUser());

        $user->setPassport($passport);
        self::assertNotNull($user->getPassport());

        self::assertEquals($user->getPassport()->getId(), $passport->getId());
    }
}