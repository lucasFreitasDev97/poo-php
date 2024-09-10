<?php
class Funcionario{

    protected string $nome;
    protected float $salario;

    public function __construct(string $nome, float $salario)
    {
        $this->nome = $nome;
        $this->salario = $salario;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getSalario()
    {
        return $this->salario;
    }

    public function calcularPagamento()
    {
        return $this->salario;
    }
}

class FuncionarioCLT extends Funcionario {
    private float $bonus;

    public function __construct(string $nome, float $salario, float $bonus)
    {
        parent::__construct($nome, $salario);
        $this->bonus = $bonus;
    }

    public function calcularPagamento()
    {
        return $this->salario + $this->bonus;
    }
}

class FuncionarioPJ extends Funcionario {
    public function calcularPagamento()
    {
        return $this->salario;
    }
}

$funcionarioCLT = new FuncionarioCLT('Rodrigo', 1_154.67, 23.45);
echo 'Nome: ' . $funcionarioCLT->getNome();
echo 'Pagamento: R$' . $funcionarioCLT->calcularPagamento() . PHP_EOL;

$funcionarioPJ = new FuncionarioPJ('Edgar', 1_500);
echo 'Pagamento: R$' .  $funcionarioPJ->calcularPagamento() . PHP_EOL;
echo 'Nome:' .  $funcionarioPJ->getNome() . PHP_EOL;