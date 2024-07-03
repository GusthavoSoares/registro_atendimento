<?php

class Usuario
{
    private $idUsuario;
    private $nomeUsuario;
    private $emailUsuario;
    private $loginUsuario;

    public function __construct($idUsuario, $nomeUsuario, $emailUsuario, $loginUsuario)
    {
        $this->idUsuario = $idUsuario;
        $this->nomeUsuario = $nomeUsuario;
        $this->emailUsuario = $emailUsuario;
        $this->loginUsuario = $loginUsuario;
    }

    public function getId()
    {
        return $this->idUsuario;
    }
    public function getNome()
    {
        return $this->nomeUsuario;
    }
    public function getEmail()
    {
        return $this->emailUsuario;
    }
    public function getLogin()
    {
        return $this->loginUsuario;
    }
}