<?php

namespace Alura\Bank\Model;

class Cpf
{
    public function __construct(
        public readonly string $cpf
    )
    {
        $this->validateNumberCpf($this->cpf);
    }

    public function validateNumberCpf($cpf): void
    {
        $cpf = filter_var($cpf, FILTER_VALIDATE_REGEXP, [
            'options' => [
                'regexp' => '/^[0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2}$/'
            ]
        ]);
        if ($cpf === false) {
            echo "Cpf inválido";
            exit();
        }
    }
}