<?php
// require_once __DIR__ . "/../src/controller/SessaoController.php";
// $controle = new SessaoController();
// $controle->protecao();
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
        <fieldset class="formulario__campo">
            <legend class="formulario__legenda">Identificação do trabalhador</legend>
            <section>
                <label class="formulario__etiqueta" for="nomeTrabalhador">Nome</label>
                <div class="mv0-5">
                    <input value="" type="text" required minlength="3" id="nomeTrabalhador" name="nomeTrabalhador" class="formulario__entrada">
                </div>
            </section>
            <section>
                <label for="cpf" class="formulario__etiqueta">CPF</label>
                <div class="mv0-5">
                    <input value="" type="text" required maxlength="11" minlength="11" id="cpf" name="cpfTrabalhador" class="formulario__entrada">
                </div>
            </section>
            <section>
                <label class="formulario__etiqueta" for="telefoneContato">Telefone de contato</label>
                <div class="mv0-5">
                    <input value="" type="text" required minlength="3" id="telefoneContato"
                    name="telefoneContatoTrabalhador" class="formulario__entrada">
                </div>
            </section>
        </fieldset>
        <div>
            <a href="./index.php" class="formulario__botao__secundario formulario__botao__padrao">Voltar</a>
            <input type="submit" class="formulario__botao formulario__botao__padrao" value="Próximo">
        </div>
    </form>
    <script src="https://kit.fontawesome.com/df85906e6a.js" crossorigin="anonymous"></script>
</body>

</html>