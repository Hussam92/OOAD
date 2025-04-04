<?php

namespace Publicplan\Model;

use DateTime;

class User
{
    private string $name;
    private DateTime $birthday;

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
}