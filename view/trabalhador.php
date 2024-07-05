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
    <title>Trabalhador</title>
</head>

<body>
    <form method="post">
        <fieldset>
            <legend>Identificação do trabalhador</legend>
            <div>
                <label for="nomeTrabalhador">Nome</label>
                <input value="" type="text" required minlength="3" id="nomeTrabalhador" name="nomeTrabalhador">
            </div>
            <div>
                <label for="cpf">CPF</label>
                <input value="" type="text" required minlength="3" id="cpf" name="cpfTrabalhador">
            </div>
            <div>
                <label for="telefoneContato">Telefone de contato</label>
                <input value="" type="text" required minlength="3" id="telefoneContato"
                    name="telefoneContatoTrabalhador">
            </div>
        </fieldset>
        <div>
            <a href="./index.php">Voltar</a>
            <input type="submit" value="Próximo">
        </div>
    </form>
    <script src="https://kit.fontawesome.com/df85906e6a.js" crossorigin="anonymous"></script>
</body>

</html>