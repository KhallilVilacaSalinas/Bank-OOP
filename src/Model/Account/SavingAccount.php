<?php

namespace Alura\Bank\Model\Account;

class SavingAccount extends Account
{
    protected function percentualTarifa(): float
    {
        return 0.03;
    }
}