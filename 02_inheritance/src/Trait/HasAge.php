<?php

namespace Inheritance\Trait;

trait HasAge
{
    public function getAge(): int
    {
        return (new \DateTime())->diff($this->getBirthday())->y;
    }
}