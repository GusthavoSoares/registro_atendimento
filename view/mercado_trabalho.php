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
    <title>Interessado de informações sobre o Mercado de Trabalho</title>
</head>

<body>
    <form method="post">
        <fieldset>
            <legend>Informações sobre o mercado de trabalho (SIP)</legend>

            <div>
                <label for="nomeInfoMercado">Nome</label>
                <input value="" type="text" required minlength="3" id="nomeInfoMercado" name="nomeInfoMercado">
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
                    <input type="text" required minlength="3" id="cpf" name="identificadorUnico"
                        placeholder="Informe seu CPF ou CNPJ " value="">
                </div>
            </fieldset>

            <div>
                <label for="telefoneContatoMercado">Telefone</label>
                <input value="" type="tel" minlength="3" id="telefoneContatoMercado" name="telefoneContatoMercado">
            </div>
            <div>
                <label for="emailContatoMercado">E-mail</label>
                <input value="" type="tel" minlength="3" id="emailContatoMercado" name="emailContatoMercado">
            </div>
            <fieldset>
                <legend>Tipo de informações</legend>
                <div>
                    <label for="intermediacao">Estatísticas da intermediação de mão de obra no âmbito do Sine/RS</label>
                    <input value="" type="radio" name="tipoInfoMercado" id="intermediacao">
                </div>
                <div>
                    <label for="seguroDesemprego">Estatísticas do seguro-desemprego no âmbito do Sine/RS</label>
                    <input value="" type="radio" name="tipoInfoMercado" id="seguroDesemprego">
                </div>
                <div>
                    <label for="vagasAbertas">Relação de vagas abertas no Sine/RS</label>
                    <input value="" type="radio" name="tipoInfoMercado" id="vagasAbertas">
                </div>
                <div>
                    <label for="resultadosCAGED">Resultados do Novo CAGED</label>
                    <input value="" type="radio" name="tipoInfoMercado" id="resultadosCAGED">
                </div>
                <div>
                    <label for="pnad">Resultados da PNAD Contínua</label>
                    <input value="" type="radio" name="tipoInfoMercado" id="pnad">
                </div>
                <div>
                    <label for="outro">Outro</label>
                    <input value="" type="radio" name="tipoInfoMercado" id="outro">
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
    <script src="https://kit.fontawesome.com/df85906e6a.js" crossorigin="anonymous"></script>
</body>

</html>