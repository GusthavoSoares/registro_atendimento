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
        <fieldset class="formulario__campo">
            <legend class="formulario__legenda">Usuário</legend>
            <section>
                <label class="formulario__etiqueta" for="nomeUsuario">Nome</label>
                <div>
                    <input type="text" class="formulario__entrada w50" value='' name="nomeUsuario" required id="nomeUsuario" placeholder="João da Silva"  >
                </div>
            </section>
            <section>
                <label class="formulario__etiqueta" for="emailUsuario">E-mail</label>
                <div>
                    <input class="formulario__entrada w50" type="email" value='' name="emailUsuario" required id="emailUsuario"
                    placeholder="exemploEmail@gmail.com" >
                </div>
            </section>
            <section>
            <fieldset class="sem_borda">
                <legend class="formulario__legenda">Cargo</legend>
                    <select name="cargoUsuario" required class="formulario__selecao w100">
                        <option value="usuario">Usuário</option>
                        <option value="admin">Administrador</option>
                    </select>
                </section>
            </fieldset>
            <fieldset class="formulario__campo">
            <legend class="formulario__legenda">Ativo</legend>
                <div>
                    <select class="formulario__selecao w100" required name="ativo">
                        <option value="Ativado">Ativado</option>
                        <option value="Desativado">Desativado</option>
                    </select>
                </div>
            </fieldset>
        </fieldset>
        <div>
            <a href="admin.php" class="formulario__botao__secundario formulario__botao__padrao">Voltar</a>
            <input type="submit" class="formulario__botao formulario__botao__padrao" value="Cadastrar">
        </div>
    </form>
<script src="https://kit.fontawesome.com/df85906e6a.js" crossorigin="anonymous"></script>
</body>
</html>