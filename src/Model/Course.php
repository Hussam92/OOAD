<?php

namespace PublicPlan\Model;

class Course
{
    private Teacher $teacher;

    /**
     * @var array<Student>
     */
    private array $students = [];

    public function __construct(
        private string $name,
    )
    {
    }

    public function getTeacher(): Teacher
    {
        return $this->teacher;
    }

    public function setTeacher(Teacher $teacher): Course
    {
        $this->teacher = $teacher;
        return $this;
    }

    public function getStudents(): array
    {
        return $this->students;
    }

    public function addStudents(Student $student): array
    {
        $this->students[] = $student;
        return $this->students;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): Course
    {
        $this->name = $name;
        return $this;
    }
}