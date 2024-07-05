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

    public static function protecao(): void
    {
        session_start();
        if(!array_key_exists('logado', $_SESSION) || $_SESSION['logado'] == false){
            header("location: login.php");
        }
    }
}