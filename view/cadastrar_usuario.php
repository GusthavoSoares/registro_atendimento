<?php
    // session_start();
    // if(!array_key_exists('logado', $_SESSION) || $_SESSION['logado'] == false){
    //     header("location: login.php");
    // }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./estilos/ds.css">
    <title>Cadastrar Usuário</title>
</head>
<body>
    <form method="post">
        <fieldset>
            <legend>Usuário</legend>
            <div>
                <label for="nomeUsuario">Nome</label>
                <input type="text" value='' required id="nomeUsuario"  >
            </div>
            <div>
                <label for="emailUsuario">E-mail</label>
                <input type="email" value='' required id="emailUsuario" >
            </div>
            <div>
            <fieldset>
                <legend>Cargo</legend>
                    <select name="cargoUsuario" required>
                        <option value="usuario">Usuário</option>
                        <option value="admin">Administrador</option>
                    </select>
                </div>
            </fieldset>
            <fieldset>
            <legend>Ativo</legend>
                <div>
                    <select required>
                        <option value="Ativado">Ativado</option>
                        <option value="Desativado">Desativado</option>
                    </select>
                </div>
            </fieldset>
        </fieldset>
        <div>
            <a href="admin.php">Voltar</a>
            <input type="submit" value="Cadastrar">
        </div>
    </form>
<script src="https://kit.fontawesome.com/df85906e6a.js" crossorigin="anonymous"></script>
</body>
</html>