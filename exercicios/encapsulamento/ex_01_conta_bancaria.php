<?php

class ContaBancaria{
    private float $saldo;
    private string $titular;

    public function __construct(float $saldo, string $titular)
    {
        $this->saldo = $saldo;
        $this->titular = $titular;
    }

    public function depositar(float $valor)
    {
        if ($valor > 0){
            $this->saldo += $valor;
        }
    }

    public function sacar(float $valor)
    {
        if ($valor <= $this->saldo && $valor > 0){
            $this->saldo -= $valor;
        }
    }

    public function exibeSaldoDoTitular(string $titular)
    {
        return "{$this->titular} seu saldo é R$ {$this->saldo}";
    }
}

$saldo01 = new ContaBancaria(500.00, 'Lucas');
$saldo01->depositar(1700.54);
$saldo01->sacar(1050.98);
echo $saldo01->exibeSaldoDoTitular('Lucas');