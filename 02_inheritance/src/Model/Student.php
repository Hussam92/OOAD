<?php

namespace Inheritance\Model;

class Student extends User
{
    private int $level;
    private string $class;

    public function __construct(string $name, string $birthday, string $level)
    {
        parent::__construct($name, $birthday);

        $this->level = $level;
    }

    public function getLevel(): int
    {
        return $this->level;
    }

    public function setLevel(int $level): Student
    {
        $this->level = $level;
        return $this;
    }

    public function getClass(): string
    {
        return $this->class;
    }

    public function setClass(string $class): Student
    {
        $this->class = $class;
        return $this;
    }
}