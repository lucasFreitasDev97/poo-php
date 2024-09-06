<?php
class Produto{

    private string $nome;
    private float $preco;
    private int $estoque;

    public function __construct(string $nome, float $preco, int $estoque)
    {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->estoque = $estoque;
    }

    public function adicionaEstoque(int $quantidade)
    {
        if ($quantidade > 0){
            $this->estoque += $quantidade;
        }
    }

    public function venderProduto(int $quantidade)
    {
        if ($quantidade > 0 && $quantidade <= $this->estoque){
            $this->estoque -= $quantidade;
        }
    }

    public function verDetalhes()
    {
        return "Nome: {$this->nome}"
            . PHP_EOL .
            "Estoque: {$this->estoque}"
            . PHP_EOL .
            "Preço: R$ {$this->preco}"
            . PHP_EOL .
            'Valor total de estoque: R$ '.
            $this->estoque * $this->preco;
    }
}

$produto01 = new Produto('Garrafa', 4.56, 5);
$produto01->adicionaEstoque(3);
echo $produto01->verDetalhes();
