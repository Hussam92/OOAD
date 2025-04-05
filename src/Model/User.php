<?php

namespace PublicPlan\Model;

use DateTime;
use PublicPlan\Enum\Gender;

class User
{
    private string $name;
    private float $weight;
    private int $shoe_size;
    private bool $has_driver_license;
    private array $languages = ['en'];

    private Gender $gender;
    private DateTime $birthday;
    private Passport $passport;

    /**
     * @var array<Image>
     */
    private array $images = [];

    /**
     * @var array<Video>
     */
    private array $videos = [];

    public function __construct(string $name, string $birthday)
    {
        $this->name = $name;
        $this->birthday = new DateTime($birthday);
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): User
    {
        $this->name = $name;
        return $this;
    }

    public function getBirthday(): DateTime
    {
        return $this->birthday;
    }

    public function setBirthday(DateTime $birthday): User
    {
        $this->birthday = $birthday;
        return $this;
    }

    public function getWeight(): float
    {
        return $this->weight;
    }

    public function setWeight(float $weight): User
    {
        $this->weight = $weight;
        return $this;
    }

    public function getShoeSize(): int
    {
        return $this->shoe_size;
    }

    public function setShoeSize(int $shoe_size): User
    {
        $this->shoe_size = $shoe_size;
        return $this;
    }

    public function isHasDriverLicense(): bool
    {
        return $this->has_driver_license;
    }

    public function setHasDriverLicense(bool $has_driver_license): User
    {
        $this->has_driver_license = $has_driver_license;
        return $this;
    }

    public function getLanguages(): array
    {
        return $this->languages;
    }

    public function setLanguages(array $languages): User
    {
        $this->languages = $languages;
        return $this;
    }

    public function getGender(): Gender
    {
        return $this->gender;
    }

    public function setGender(Gender $gender): User
    {
        $this->gender = $gender;
        return $this;
    }

    public function getImages(): array
    {
        return $this->images;
    }

    public function addImage(Image $image): array
    {
        $image->setAuthor($this);

        $this->images[] = $image;

        return $this->images;
    }

    public function getVideos(): array
    {
        return $this->videos;
    }

    public function addVideo(Video $video): array
    {
        $video->setAuthor($this);

        $this->videos[] = $video;

        return $this->videos;
    }

    public function getPassport(): Passport
    {
        return $this->passport;
    }

    public function setPassport(Passport $passport): User
    {
        $this->passport = $passport;
        return $this;
    }
}