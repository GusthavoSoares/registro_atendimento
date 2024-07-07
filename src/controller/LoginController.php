<?php

class LoginController extends Login
{
    public $email;
    protected $senha;

    public function __construct($email, $senha)
    {
        $this->email = $email;
        $this->senha = $senha;
    }

    // Validação de inputs
    public function getUser(): void
    {
        if(empty($this->email) || empty($this->senha)){
            header("Location: /view/login.php");
            exit();
        }else {
            $this->autenticar($this->email, $this->senha);
        }
    }
}