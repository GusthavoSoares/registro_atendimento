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
    <form method="post" class="formulario mt12-5 centralizado">
        <fieldset class="formulario__campo w80">
            <legend class="formulario__subtitulo">Usuário</legend>
            <section class="centralizado">
                <label class="formulario__etiqueta" for="nomeUsuario">Nome</label>
                <div>
                    <input type="text" class="formulario__entrada w90" value='' name="nomeUsuario" required id="nomeUsuario" placeholder="João da Silva"  >
                </div>
            </section>
            <section class="centralizado mv1">
                <label class="formulario__etiqueta" for="emailUsuario ">E-mail</label>
                <div>
                    <input class="formulario__entrada w90" type="email" value='' name="emailUsuario" required id="emailUsuario"
                    placeholder="exemploEmail@gmail.com" >
                </div>
            </section>
            <section>
            <fieldset class="sem_borda mh2 mv1 centralizado">
                <legend class="formulario__legenda">Cargo</legend>
                    <select name="cargoUsuario" required class="formulario__selecao w90">
                        <option value="usuario">Usuário</option>
                        <option value="admin">Administrador</option>
                    </select>
                </section>
            </fieldset>
            <fieldset class="formulario__campo w80 mt2">
            <legend class="formulario__subtitulo">Ativo</legend>
                <div class="centralizado mv0-5">
                    <select class="formulario__selecao w90" required name="ativo">
                        <option value="Ativado">Ativado</option>
                        <option value="Desativado">Desativado</option>
                    </select>
                </div>
            </fieldset>
        </fieldset>
        <div class="w80 centralizado mv0-5">
            <a href="admin.php" class="formulario__botao__secundario formulario__botao__padrao">Voltar</a>
            <input type="submit" class="formulario__botao formulario__botao__padrao" value="Cadastrar">
        </div>
    </form>
<script src="https://kit.fontawesome.com/df85906e6a.js" crossorigin="anonymous"></script>
</body>
</html>