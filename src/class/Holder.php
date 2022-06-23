<?php

class Holder
{
    public function __construct(
        private readonly Cpf $cpf,
        private readonly string $nameHolder
    )
    {
        $this->validateNameHolder($this->nameHolder);
    }

    public function getCpfHolder(): string
    {
        return $this->cpf->getCpf();
    }

    public function getNameHolder(): string
    {
        return $this->nameHolder;
    }

    private function validateNameHolder($nameHolder): void
    {
        if (strlen($nameHolder) < 5) {
            echo "Name must be long than 5 characters";
            exit();
        }
    }
}