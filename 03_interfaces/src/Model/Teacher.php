<?php

namespace Interfaces\Model;

use Interfaces\Enum\Contract;

class Teacher extends User
{
    /**
     * @var array<Course>
     */
    private array $courses;

    private array $working_days;
    private Contract $contract;

    public function __construct(string $name, string $birthday, array $courses)
    {
        parent::__construct($name, $birthday);

        $this->courses = $courses;
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

    public function getWorkingDays(): array
    {
        return $this->working_days;
    }

    public function setWorkingDays(array $working_days): Teacher
    {
        $this->working_days = $working_days;
        return $this;
    }

    public function getContract(): Contract
    {
        return $this->contract;
    }

    public function setContract(Contract $contract): Teacher
    {
        $this->contract = $contract;
        return $this;
    }
}