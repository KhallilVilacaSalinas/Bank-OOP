<?php

namespace Alura\Bank\Model\Account;

use Alura\Bank\Model\Address;
use Alura\Bank\Model\Cpf;
use Alura\Bank\Model\People;

class Holder extends People
{
    public function __construct(
        public Cpf $cpf,
        string $name,
        private Address $address,
    )
    {
        parent::__construct($cpf, $name);
    }

    public function getAddressHolder(): Address
    {
        return $this->address ;
    }
}
