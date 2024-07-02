<?php

class Roteador
{
    public function redireciona($rota)
    {
        session_start();
        if(!array_key_exists('logado', $_SESSION)){
            header("location: $rota.php");
        }
    }
}