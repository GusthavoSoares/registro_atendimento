<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Identificação</title>
</head>

<body>
    <form method="post">
        <fieldset>
            <legend>Identificação</legend>
            <div>
                <label for="nomeIdentificacao">Nome</label>
                <input type="text" required id="nomeIdentificacao">
            </div>
            <fieldset>
                <legend>Tipo de cadastro</legend>
                <div>
                    <input type="radio" name="tipoPessoa" id="pessoaFisica">
                    <label for="pessoaFisica">Pessoa Física</label>
                </div>
                <div>
                    <input type="radio" name="tipoPessoa" id="pessoaJuridica">
                    <label for="pessoaJuridica">Pessoa Jurídica</label>
                </div>
                <div>
                    <input type="text" required minlength="3" id="cpf" name="identificadorUnico"
                        placeholder="Informe seu CPF ou CNPJ ">
                </div>
            </fieldset>
            <div>
                <label for="telefoneContatoMercado">Telefone</label>
                <input type="tel" minlength="3" id="telefoneContatoMercado" name="telefoneContatoMercado">
            </div>
            <div>
                <label for="emailContatoMercado">E-mail</label>
                <input type="tel" minlength="3" id="emailContatoMercado" name="emailContatoMercado">
            </div>
            <div>
                <label for="desc_atividade">Descrição da atividade</label>
                <div>
                    <textarea required></textarea>
                </div>
            </div>
        </fieldset>
        <div>
            <a href="./index.php">Voltar</a>
            <input type="submit" value="Enviar" name="envio">
        </div>
    </form>
</body>

</html>