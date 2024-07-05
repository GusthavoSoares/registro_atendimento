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
    <link rel="stylesheet" href="./estilos/pg-principal.css">
    <title>Cadastro de Atendimentos</title>
</head>

<body class="relativo h100">
    <form class="formulario absoluto translacao35-40 mr2" method="post">
        <h1 class="formulario__titulo">Atendimentos</h1>
        <fieldset class="formulario__identificacao">
            <legend class="centralizado formulario__subtitulo">Identificação</legend>
            <div class="atendimento">
                <label class="formulario__legenda" for="identificacaoAtendente">Nome do Atendente</label>
                <input type="text" value="" id="identificacaoAtendente" name="identificacaoAtendente"
                    class="formulario__entrada" required minlength="5" maxlength="100">
                <label class="formulario__legenda" for="identificacaoAtendente">Tipo de atendimento</label>
                <select class="formulario__selecao" name="tipoAtendimento" required>
                    <option value="tipo">Escolha o tipo de atendimento...</option>
                    <option value="presencial">Presencial</option>
                    <option value="whats">Whatsapp</option>
                    <option value="telefone">Ligação telefônica</option>
                    <option value="email">E-mail</option>
                    <option value="rede_social">Redes sociais</option>
                    <option value="teams">Teams</option>
                    <option value="outro">Outra</option>
                </select>
            </div>
            <div class="centralizado formulario__subtitulo">
                <label for="pessoaAtendida">Quem estou atendendo </label>
            </div>
            <div class="opcoesAtendimentos">
                <div class="opcaoFormulario">
                    <input value="" type="radio" name="pessoasAtendimento" id="empregador" required>
                    <label for="empregador" class="formulario__legenda">Empregador</label>
                </div>
                <div class="opcaoFormulario">
                    <input value="" type="radio" name="pessoasAtendimento" id="trabalhador" required>
                    <label for="trabalhador" class="formulario__legenda">Trabalhador</label>
                </div>
                <div class="opcaoFormulario">
                    <input value="" type="radio" name="pessoasAtendimento" id="ads" required>
                    <label for="ads" class="formulario__legenda">ADS</label>
                </div>
                <div class="opcaoFormulario">
                    <input value="" type="radio" name="pessoasAtendimento" id="setores" required>
                    <label for="setores" class="formulario__legenda">Setores da FGTAS</label>
                </div>
                <div class="opcaoFormulario">
                    <input value="" type="radio" name="pessoasAtendimento" id="mercadoTrabalho" required>
                    <label for="mercadoTrabalho" class="formulario__legenda">Interessado em informações sobre o Mercado
                        de trabalho</label>
                </div>
                <div class="opcaoFormulario">
                    <input value="" type="radio" name="pessoasAtendimento" class="formulario__legenda" id="outro"
                        required>
                    <label for="outro" class="formulario__legenda">Outro</label>
                </div>
            </div>
            <div class="centralizado">
                <input type="submit" value="Próximo" class="formulario__botao">
            </div>
        </fieldset>

    </form>

    <script src="https://kit.fontawesome.com/df85906e6a.js" crossorigin="anonymous"></script>
</body>

</html>