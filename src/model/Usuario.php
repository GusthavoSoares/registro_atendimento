<?php

class Usuario
{
    private string $nome;
    private string $email;
    private string $cargo;
    private string $ativo;
    private $senha;

    public function __construct($nome, $email, $cargo, $ativo = 'S', $senha = null)
    {
        $this->nome = $nome;
        $this->email = $email;
        $this->cargo = $cargo;
        $this->ativo = $ativo;
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
    public function getSenha()
    {
        return $this->senha;
    }
    public function getCargo()
    {
        return $this->cargo;
    }
    public function getAtivo()
    {
        return $this->ativo;
    }
}