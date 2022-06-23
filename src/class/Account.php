<?php

class Account
{
    private static int $numberOfAccounts = 0;

    public function __construct(
        private readonly Holder $holder,
        private float $balance
    ) {
       self::$numberOfAccounts++;
    }

    public function __destruct()
    {
        self::$numberOfAccounts--;
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

    public static function getNumberOfAccounts(): int
    {
        return self::$numberOfAccounts;
    }

    /**
     * HOLDER
    **/

    public function getNameHolder(): string
    {
        return $this->holder->getNameHolder();
    }

    public function getCpfHolder(): string
    {
        return $this->holder->getCpfHolder();
    }




}