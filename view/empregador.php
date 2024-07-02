<?php
    session_start();
    if(!array_key_exists('logado', $_SESSION) || $_SESSION['logado'] == false){
        header("location: login.php");
    }
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./estilos/ds.css">

    <title>Empregador</title>
</head>

<body>
    <form class="formulario w50 " method="post" action="processa_login.php">
        <h1 class="formulario__titulo">Empregador</h1>

        <div class="formulario__login">
            <label class="formulario__legenda centralizado mbt1" for="nome_empregador">Nome do Empregador</label>
            <input type="text" id="nome_empregador" name="nome_empregador" class="formulario__entrada mlr1" required
                maxlength="100">
        </div>

        <div class="formulario__login">
            <label class="formulario__legenda centralizado mbt1" for="cnpj_empregador">CNPJ do Empregador</label>
            <input type="text" id="cnpj_empregador" name="cnpj_empregador" class="formulario__entrada mlr1" required
                pattern="[0-9]{14}" maxlength="14">
        </div>

        <div class="formulario__login">
            <label class="formulario__legenda centralizado mbt1" for="telefone_empregador">Telefone de Contato:</label>
            <input type="tel" id="telefone_empregador" name="telefone_empregador" class="formulario__entrada mlr1"
                required pattern="[0-9]{10,11}" maxlength="11">
        </div>

        <div class="centralizado">
            <a href="./index.php">Voltar</a>
            <input type="submit" value="Próximo" onclick="window.location.href='secaoempregador.php'"
                class="formulario__botao">
        </div>

    </form>
</body>

</html>