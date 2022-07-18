<?php

namespace Alura\Bank\Model;

class Employee extends People
{
    public function __construct(
        public Cpf $cpf,
        public readonly string $name,
        public readonly string $role,
        public readonly float $salary
    )
    {
        parent::__construct($cpf, $name);
        $this->validateNameHolder($name);
    }

    public function calculatebonus(): float
    {
        return $this->salary * 0.1;
    }
}