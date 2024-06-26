<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./estilos/ds.css">
    <link rel="stylesheet" href="./estilos/pg-login.css">
    <title>Login</title>
</head>
<body>
    <form class="formulario w50 h25" method="post">
        <h1>Entrar</h1>
        
            <div class="formulario__login">
                <label class="formulario__legenda centralizado mbt1" for="login">Login</label>
                <input type="email" id="login" name="login" class="formulario__entrada mlr1" required minlength="5" maxlength="100">
            </div>
            <div class="formulario__login">
                <label class="formulario__legenda centralizado  mbt1"  for="senha">Senha</label>
                <div class="grid90_10">
                    <input type="password" id="senha" name="senha" class="formulario__entrada mlr1 relativo" required minlength="5" maxlength="20">
                    <i class="fa-solid fa-eye icone mt1" id="olho"></i>
                </div>
            </div>
            <div class="centralizado">
                <input type="submit" value="Logar" class="formulario__botao">
            </div>

    </form>
    <script src="https://kit.fontawesome.com/df85906e6a.js" crossorigin="anonymous"></script>
    <script src="./js/olho.js"></script>
</body>
</html>