<?php

namespace Relations\Trait;

trait HasAge
{
    public function getAge(): int
    {
        return (new \DateTime())->diff($this->getBirthday())->y;
    }
}