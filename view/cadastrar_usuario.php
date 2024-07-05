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
    <form method="post" action="../src/controller/cadastraUsuario.php?salvar">
        <fieldset>
            <legend>Usuário</legend>
            <div>
                <label for="nomeUsuario">Nome</label>
                <input type="text" name="nome" value="" required id="nomeUsuario"  >
            </div>
            <div>
                <label for="emailUsuario">E-mail</label>
                <input type="email" name="email" value="" required id="emailUsuario" >
            </div>
            <div>
                <label for="senhaUsuario">Senha</label>
                <input type="password" name="senha" value="" required id="senhaUsuario" >
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
                    <select name="ativoUsuario" required>
                        <option value="Ativado">Ativado</option>
                        <option value="Desativado">Desativado</option>
                    </select>
                </div>
            </fieldset>
        </fieldset>
        <div>
            <a href="admin.php">Voltar</a>
            <input type="submit" name="cadastrar" value="Cadastrar">
        </div>
        <?php var_dump($_REQUEST); ?>
    </form>
<script src="https://kit.fontawesome.com/df85906e6a.js" crossorigin="anonymous"></script>
</body>
</html>