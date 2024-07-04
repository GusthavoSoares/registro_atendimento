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
    <link rel="stylesheet" href="./estilos/pg-login.css">
    <title>Login</title>
</head>
<body class="h100">
    <form class="formulario w50 absoluto translacao50-100" method="post">
        <h1 class="formulario__titulo centralizado">Entrar</h1>
        <fieldset class="formulario__agrupamento">

            <div class="formulario__login">
                <label class="formulario__legenda centralizado
             mb2" for="login">Login</label>
                <input value="" type="email" id="login" name="login" class="formulario__entrada mh1" required minlength="5" maxlength="100">
            </div>
            <div class="formulario__login">
                <label class="formulario__legenda centralizado  mb2"  for="senha">Senha</label>
                <div class="grid90-10">
                    <input value="" type="password" id="senha" name="senha" class="formulario__entrada mh1 relativo" required minlength="5" maxlength="20">
                    <i class="fa-solid fa-eye icone centralizado mh1" id="olho"></i>
                </div>
            </div>
            <div class="centralizado">
                <input type="submit" value="Logar" class="formulario__botao">
            </div>
            
        </fieldset>
    </form>
    <script src="https://kit.fontawesome.com/df85906e6a.js" crossorigin="anonymous"></script>
    <script src="./js/olho.js"></script>
</body>
</html>