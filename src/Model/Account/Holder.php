<?php

namespace Alura\Bank\Model\Account;

class Holder extends People
{
    public function __construct(
        Cpf $cpf,
        string $name,
        private Address $address,
    )
    {
        parent::__construct($cpf, $name);
    }

    public function getAddressHolder(): Address
    {
        return $this->address;
    }
}