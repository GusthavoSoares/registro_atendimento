<?php

if(isset($_POST['login'])){
    require_once __DIR__ . "/../model/Conexao.php";
    require_once __DIR__ . "/../model/Login.php";
    require_once __DIR__ . "/LoginController.php";

    $email = $_POST['login'];
    $senha = $_POST['senha'];

    $login = new LoginController($email, $senha);
    $login->getUser();
}
