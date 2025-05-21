<?php

namespace Inheritance\Model;

use DateTime;
use Exception;
use Inheritance\Trait\HasAge;

class Animal
{
    use HasAge;

    private readonly DateTime $birthday;

    /**
     * @throws Exception
     */
    public function __construct(string $birthday)
    {
        $this->birthday = new DateTime($birthday);
    }

    public function getBirthday(): DateTime
    {
        return $this->birthday;
    }
}