<?php

namespace Inheritance\Model;

use Inheritance\Enum\Contract;

class Teacher extends User
{
    private array $working_days;
    private Contract $contract;

    public function __construct(string $name, string $birthday, Contract $contract)
    {
        parent::__construct($name, $birthday);

        $this->contract = $contract;
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