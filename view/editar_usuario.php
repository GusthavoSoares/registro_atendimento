<?php
    require_once __DIR__ . "/../src/controller/SessaoController.php";
    $controle = new SessaoController();
    $controle->protecao();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./estilos/ds.css">
    <title>Editar Usuário</title>
</head>
<body>
<form method="post">
        <fieldset>
            <legend>Usuário</legend>
            <div>
                <label for="nomeUsuario">Nome</label>
                <input type="text" value='' required  id="nomeUsuario" >
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
            <input type="submit" value="Editar">
        </div>
    </form>
</body>
</html>