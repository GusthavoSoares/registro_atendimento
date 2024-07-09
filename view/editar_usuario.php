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
    <form method="post" class="formulario">
        <fieldset class="formulario__campo centralizado w80 mt12-5">
            <legend class="formulario__subtitulo">Usuário</legend>
            <section>
                <label class="formulario__legenda" for="nomeUsuario">Nome</label>
                <div>
                    <input class="formulario__entrada w90" type="text" value='' name="nomeUsuario" required
                        id="nomeUsuario" placeholder="Maria Rosana">
                </div>
            </section>
            <section class="mv0-5">
                <label class="formulario__legenda" for="emailUsuario">E-mail</label>
                <div>
                    <input type="email" value='' name="emailUsuario" required id="emailUsuario"
                        class="formulario__entrada w90" placeholder="exemplo@gmail.com">
                </div>
            </section>
            <section>
                <fieldset class="sem_borda mv0-5">
                    <legend class="formulario__legenda">Cargo</legend>
                    <select class="formulario__selecao w90" name="cargoUsuario" required>
                        <option value="usuario">Usuário</option>
                        <option value="admin">Administrador</option>
                    </select>
            </section>
        </fieldset>
        <fieldset class="formulario__campo w80 mt1 centralizado">
            <legend class="formulario__subtitulo">Ativo</legend>
            <div>
                <select class="formulario__selecao w90" name="ativo" required>
                    <option value="Ativado">Ativado</option>
                    <option value="Desativado">Desativado</option>
                </select>
            </div>
        </fieldset>
        </fieldset>
        <div class="grid50-50 gp5 centralizado w33 mv0-5">
            <a href="admin.php" class="formulario__botao__secundario formulario__botao__padrao">Voltar</a>
            <input type="submit" class="formulario__botao formulario__botao__padrao" value="Editar">
        </div>
    </form>
</body>

</html>