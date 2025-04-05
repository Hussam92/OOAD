<?php

namespace PublicPlan\Model;

class Student extends User
{
    private int $level;
    private string $class;

    /**
     * @var array<Course>
     */
    private array $courses = [];

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

    public function getCourses(): array
    {
        return $this->courses;
    }

    public function addCourse(Course $course): array
    {
        $this->courses[] = $course;

        return $this->courses;
    }
}