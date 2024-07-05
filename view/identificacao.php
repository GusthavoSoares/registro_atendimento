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
    <title>Identificação</title>
</head>

<body>
    <form method="post">
        <fieldset>
            <legend>Identificação</legend>
            <div>
                <label for="nomeIdentificacao">Nome</label>
                <input type="text" value="" name="nomeIdentificacao" required id="nomeIdentificacao">
            </div>
            <fieldset>
                <legend>Tipo de cadastro</legend>
                <div>
                    <label for="pessoaFisica">Pessoa Física</label>
                    <input value="" type="radio" name="tipoPessoa" id="pessoaFisica">
                </div>
                <div>
                    <label for="pessoaJuridica">Pessoa Jurídica</label>
                    <input value="" type="radio" name="tipoPessoa" id="pessoaJuridica">
                </div>
                <div>
                    <input type="text" required minlength="3" value="" id="cpf" name="identificadorUnico"
                        placeholder="Informe seu CPF ou CNPJ " pattern="^[0-9]{11,14}$" maxlength="14" minlength="11">
                </div>
            </fieldset>
            <div>
                <label for="telefoneContatoMercado">Telefone</label>
                <input type="tel" minlength="3" value="" id="telefoneContatoMercado" name="telefoneContatoMercado"
                    pattern="^[0-9]{10,11}$" placeholder="51123456789">
            </div>
            <div>
                <label for="emailContatoMercado">E-mail</label>
                <input type="tel" minlength="3" value="" id="emailContatoMercado" name="emailContatoMercado" placeholder="exemplo@gmail.com">
            </div>
            <div>
                <label for="desc_atividade">Descrição da atividade</label>
                <div>
                    <textarea id="desc_atividade" required></textarea>
                </div>
            </div>
        </fieldset>
        <div>
            <a href="./index.php">Voltar</a>
            <input type="submit" value="Enviar" name="envio">
        </div>
    </form>
    <script src="https://kit.fontawesome.com/df85906e6a.js" crossorigin="anonymous"></script>
</body>

</html>