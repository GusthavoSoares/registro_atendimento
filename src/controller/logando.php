<?php

if( isset($_POST['login']) ){
    require_once __DIR__ . "/../model/Conexao.php";
    require_once __DIR__ . "/../model/Login.php";
    require_once __DIR__ . "/LoginController.php";

    $email = $_POST['emailUsuario'];
    $senha = $_POST['senhaUsuario'];

    $login = new LoginController($email, $senha);
    $login->getUser();
}
