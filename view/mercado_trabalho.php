<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interessado de informações sobre o Mercado de Trabalho</title>
</head>

<body>
    <form method="post">
        <fieldset>
            <legend>Informações sobre o mercado de trabalho (SIP)</legend>

            <div>
                <label for="nomeInfoMercado">Nome</label>
                <input type="text" required minlength="3" id="nomeInfoMercado" name="nomeInfoMercado">
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
            <fieldset>
                <legend>Tipo de informações</legend>
                <div>
                    <input type="radio" name="tipoInfoMercado" id="intermediacao">
                    <label for="intermediacao">Estatísticas da intermediação de mão de obra no âmbito do Sine/RS</label>
                </div>
                <div>
                    <input type="radio" name="tipoInfoMercado" id="seguroDesemprego">
                    <label for="seguroDesemprego">Estatísticas do seguro-desemprego no âmbito do Sine/RS</label>
                </div>
                <div>
                    <input type="radio" name="tipoInfoMercado" id="vagasAbertas">
                    <label for="vagasAbertas">Relação de vagas abertas no Sine/RS</label>
                </div>
                <div>
                    <input type="radio" name="tipoInfoMercado" id="resultadosCAGED">
                    <label for="resultadosCAGED">Resultados do Novo CAGED</label>
                </div>
                <div>
                    <input type="radio" name="tipoInfoMercado" id="pnad">
                    <label for="pnad">Resultados da PNAD Contínua</label>
                </div>
                <div>
                    <input type="radio" name="tipoInfoMercado" id="outro">
                    <label for="outro">Outro</label>
                </div>

            </fieldset>
            <div>
                <label for="desc_atividade">Descrição da atividade</label>
                <div>
                    <textarea></textarea>
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