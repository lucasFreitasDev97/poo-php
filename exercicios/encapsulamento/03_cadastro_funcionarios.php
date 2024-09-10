<?php

class FuncionarioEncp{

    private string $nome;
    private string $cargo;
    private float $salario;

    public function __construct(string $nome, string $cargo, float $salario)
    {
        $this->nome = $nome;
        $this->cargo = $cargo;
        $this->salario = $salario;
    }

    public function alterarCargo(string $novoCargo)
    {
        $this->cargo = $novoCargo;
    }

    public function aumentarSalarioPercentual(float $percentual)
    {
        if ($percentual > 0){
            $aumento = $this->salario * ($percentual / 100);
            $this->salario += $aumento;
        }
    }

    public function exibeInfo()
    {
        return "Nome: {$this->nome}"
            . PHP_EOL .
            "Estoque: {$this->cargo}"
            . PHP_EOL .
            "Preço: R$ {$this->salario}";
    }
}

$funcionario = new FuncionarioEncp('Oliver', 'Programador Júnior', 3_500.45);
$funcionario->alterarCargo('Programador Senior');
$funcionario->aumentarSalarioPercentual(2.8);
echo $funcionario->exibeInfo();