<?php
require_once __DIR__ . "/../src/controller/SessaoController.php";
$controle = new SessaoController();
$controle->protecao();
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
            <label class="formulario__legenda centralizado mbt1" for="nomeEmpregador">Nome do Empregador</label>
            <input type="text" id="nomeEmpregador" name="nomeEmpregador" class="formulario__entrada mlr1" value=""
                required maxlength="100">
        </div>

        <div class="formulario__login">
            <label class="formulario__legenda centralizado mbt1" for="cnpj_empregador">CNPJ do Empregador</label>
            <input type="text" id="cnpjEmpregador" name="cnpjEmpregador" class="formulario__entrada mlr1" value=""
                required pattern="^[0-9]{14}$" maxlength="14">
        </div>

        <div class="formulario__login">
            <label class="formulario__legenda centralizado mbt1" for="telefone_empregador">Telefone de Contato</label>
            <input type="tel" id="telefone_empregador" name="telefoneEmpregador" value=""
                class="formulario__entrada mlr1" required pattern="^[0-9]{10,11}$" maxlength="11" value="" placeholder="51123456789">
        </div>

        <div class="centralizado">
            <a href="./index.php">Voltar</a>
            <input type="submit" value="Próximo" class="formulario__botao">
        </div>

    </form>
    <script src="https://kit.fontawesome.com/df85906e6a.js" crossorigin="anonymous"></script>
</body>

</html>