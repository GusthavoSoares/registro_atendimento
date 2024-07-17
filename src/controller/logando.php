<?php

if( isset($_POST['login']) ){
    require_once __DIR__ . "/../model/Conexao.php";
    require_once __DIR__ . "/../model/Login.php";
    require_once __DIR__ . "/LoginController.php";

    $email = filter_input(INPUT_POST, 'emailUsuario', FILTER_SANITIZE_EMAIL);
    $senha = filter_input(INPUT_POST, 'senhaUsuario');

    $login = new LoginController($email, $senha);
    $login->getUser();
}
