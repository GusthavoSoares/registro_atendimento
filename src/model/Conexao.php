<?php

abstract class Conexao
{
    private $host = 'localhost';
    private $dbname = 'atendimentos';
    private $usuario = 'root';
    private $senha = 'jonassj';
    protected $pdo;

    public function __construct()
    {
        $this->conexao();
    }

    protected function conexao()
    {
        $this->pdo = new PDO('mysql:host=' . $this->host . ';dbname='.$this->dbname, $this->usuario, $this->senha);

        return $this->pdo;
    }
}
