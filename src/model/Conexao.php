<?php

abstract class Conexao
{
    // Insira os dados do servidor do banco aqui
    private $host = '';
    private $dbname = '';
    private $usuario = '';
    private $senha = '';
    protected $pdo;

    public function __construct()
    {
        $this->conexao();
    }

    protected function conexao()
    {
        $this->pdo = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->usuario, $this->senha);

        return $this->pdo;
    }
}
