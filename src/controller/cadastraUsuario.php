<?php

    require_once __DIR__ . "/../model/Conexao.php";
    require_once __DIR__ . "/../model/Usuario.php";
    require_once __DIR__ . "/../repositorio/UsuarioRepositorio.php";
    session_start();

    if(isset($_REQUEST['salvar'])){
        $nome = $_POST['nomeUsuario'];
        $email = $_POST['emailUsuario'];
        $senha = password_hash($_POST['senhaUsuario'], PASSWORD_BCRYPT);
        $cargo = $_POST['nomePerfil'];
        $ativo = $_POST['ativo'];

        $user = new Usuario($nome, $email, $cargo, $ativo, $senha);
        $repositorio = new UsuarioRepositorio();
        $repositorio->inserir($user);
        
        header('Location: /view/cadastrar_usuario.php');
    }
