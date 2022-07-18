<?php

namespace Alura\Bank\Model;

class People
{
    public function __construct(
        public readonly Cpf $cpf,
        public readonly string $name
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

}