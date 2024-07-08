<?php

class SessaoController
{
    public function protecao(): void
    {
        session_start();
        if(!array_key_exists('logado', $_SESSION) || $_SESSION['logado'] == false){
            header("location: login.php");
        }
    }
}