<?php
    session_start();
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
                <input type="text" value='' name="nomeUsuario" required id="nomeUsuario" placeholder="João da Silva"  >
            </div>
            <div>
                <label for="emailUsuario">E-mail</label>
                <input type="email" value='' name="emailUsuario" required id="emailUsuario"
                placeholder="exemploEmail@gmail.com" >
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
                    <select required name="ativo">
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