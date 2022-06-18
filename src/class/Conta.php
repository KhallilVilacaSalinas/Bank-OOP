<?php

class Conta
{
    private string $cpfTitular;
    private string $nomeTitular;
    private float $saldo = 0;

    public function sacar(float $valorSacar): void
    {
        if ($valorSacar > $this->saldo) {
            echo "valor {$this->saldo} é insuficiente";
            return;
        }

        $this->saldo -= $valorSacar;
    }

    public function depositar(float $valorDepositar): void {
        if ($valorDepositar < 0) {
            echo "Deve ser um valor maior que 0";
            return;
        }

        $this->saldo += $valorDepositar;
    }

    public function transferir(float $valorTransferir, Conta $contaDestino): void
    {
        if ($valorTransferir > $this->saldo) {
            echo "Saldo indisponivel";
            return;
        }

        $this->sacar($valorTransferir);
        $contaDestino->depositar($valorTransferir);
    }

    public function recuperarSaldo(): float
    {
        return $this->saldo;
    }

    public function recuperarCpfTitular(): string
    {
        return $this->cpfTitular;
    }

    public function recuperarNomeTitular(): string
    {
        return $this->nomeTitular;
    }

    public function defineCpfTitular(string $cpf): void
    {
        $this->cpfTitular = $cpf;
    }

    public function defineNomeTitular(string $nome): void
    {
        $this->nomeTitular = $nome;
    }

}