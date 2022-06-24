<?php

namespace Alura\Bank\Model;

class People
{
    public function __construct(
        private readonly Cpf $cpf,
        private readonly string $name
    )
    {
        $this->validateNameHolder($name);
    }

    public function validateNameHolder($nameHolder): void
    {
        if (strlen($nameHolder) < 5) {
            echo "Name must be long than 5 characters";
            exit();
        }
    }

    public function getCpf(): string
    {
        return $this->cpf->getCpf();
    }

    protected function getName(): string
    {
        return $this->name;
    }
}