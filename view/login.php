<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./estilos/ds.css">
    <link rel="stylesheet" href="./estilos/pg-login.css">
    <title>Login</title>
</head>
<body class="h100">
    <form class="formulario" method="post">
        <h1 class="formulario__titulo centralizado">Entrar</h1>
        <fieldset class="formulario__campo ">
            <section>
                <label class="formulario__etiqueta" for="login">Login</label>
                <div class="mv0-5">
                 <input value="" type="email" id="login" name="login" class="formulario__entrada" required minlength="5" maxlength="100">
                </div>
            </section>
            <section>
                <label class="formulario__etiqueta"  for="senha">Senha</label>
                <div class="mv0-5">
                    <input value="" type="password" id="senha" name="senha" class="formulario__entrada" required minlength="5" maxlength="20">
                    <i class="fa-solid fa-eye icone centralizado mh1" id="olho"></i>
                </div>
            </section>
            
        </fieldset>
        <div class="centralizado mv0-5">
            <input type="submit" value="Logar" class="formulario__botao formulario__botao__padrao">
        </div>
    </form>
    <script src="https://kit.fontawesome.com/df85906e6a.js" crossorigin="anonymous"></script>
    <script src="./js/olho.js"></script>
</body>
</html>