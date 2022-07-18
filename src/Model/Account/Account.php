<?php

namespace Alura\Bank\Model\Account;

class Account
{
    private static int $numberOfAccounts = 0;

    public function __construct(
        protected Holder $holder,
        protected float $balance
    ) {
       self::$numberOfAccounts++;
    }

    public function __destruct()
    {
        self::$numberOfAccounts--;
    }

    public function withdrawMoney(float $withdrawValue): float
    {
        $tarifaSaque = $withdrawValue * $this->percentualTarifa();
        $valorSaque = $withdrawValue + $tarifaSaque;
        if ($valorSaque  > $this->balance) {
            echo "The value {$this->balance} is insufficient";
            exit();
        }

        return $this->balance -= $valorSaque;
    }

    public function depositMoney(float $depositValue): float
    {
        if ($depositValue < 0) {
            echo "Must be a value greater than 0";
            exit();
        }

        return $this->balance += $depositValue;
    }

    public function transferMoney(float $transferValue, Account $destinationAccount): void
    {
        if ($transferValue > $this->balance) {
            echo "Unavailable balance";
            return;
        }

        $this->withdrawMoney($transferValue);
        $destinationAccount->depositMoney($transferValue);
    }

    public function getBalance(): float
    {
        return $this->balance;
    }

    public static function getNumberOfAccounts(): int
    {
        return self::$numberOfAccounts;
    }

    /**
     * HOLDER
    **/

    public function getNameHolder(): string
    {
        return $this->holder->name;
    }

    public function getCpfHolder(): string
    {
        return $this->holder->cpf->cpf;
    }

    protected function percentualTarifa(): float
    {
        return 0.05;
    }


}
