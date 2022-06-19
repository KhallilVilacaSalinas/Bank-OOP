<?php

class Account
{
    /**
     * @param string $cpfHolder
     * @param string $nameHolder
     * @param float $balance
     */

    public function __construct(
        public readonly string $cpfHolder,
        public readonly string $nameHolder,
        private float $balance
    ) {
       $this->validaNomeTitular($this->nameHolder);
    }

    public function withdrawMoney(float $withdrawValue ): float
    {
        if ($withdrawValue  > $this->balance) {
            echo "The value {$this->balance} is insufficient";
            exit();
        }

        return $this->balance -= $withdrawValue;
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

    public function getCpfHolder(): string
    {
        return $this->cpfHolder;
    }

    public function getNameHolder(): string
    {
        return $this->nameHolder;
    }

    public function validaNomeTitular($nameHolder): void
    {
        if (strlen($nameHolder < 5)) {
            echo "Name must be long than 5 characters";
            exit();
        }
    }




}