<?php
class Usuario{
    protected string $nome;
    protected string $email;
    protected string $senha;

    public function __construct(string $nome, string $email, string $senha)
    {
        $this->nome = $nome;
        $this->email = $email;
        $this->senha = $senha;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getEmail()
    {
        return $this->email;
    }
}

class UsuarioAdministrador extends Usuario{
    private bool $restringeAcesso;

    public function __construct(string $nome, string $email, string $senha, bool $restringeAcesso)
    {
        parent::__construct($nome, $email, $senha);
        $this->restringeAcesso = $restringeAcesso;
    }

    public function restringeAcesso()
    {
        return $this->restringeAcesso;
    }
}

$usuario01 = new Usuario('Eduardo', 'eduardo@gmail.com', '123456');
echo 'Nome: ' . $usuario01->getNome() . PHP_EOL;
echo 'E-mail: ' . $usuario01->getEmail() . PHP_EOL;
echo PHP_EOL;

$usuario02 = new UsuarioAdministrador('Oliver', 'oliver@gmail.com', '654321', true);
echo 'Nome: ' . $usuario02->getNome() . PHP_EOL;
echo 'E-mail: ' . $usuario02->getEmail() . PHP_EOL;
echo 'Restringe Acesso? ' . $usuario02->restringeAcesso() . PHP_EOL;