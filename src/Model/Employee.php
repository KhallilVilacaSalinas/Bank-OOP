<?php

namespace Alura\Bank\Model;

class Employee extends People
{
    public function __construct(
        public Cpf $cpf,
        public readonly string $name,
        public readonly string $role,
    )
    {
        parent::__construct($cpf, $name);
        $this->validateNameHolder($name);
    }
}