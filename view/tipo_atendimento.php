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
    <link rel="stylesheet" href="./estilos/pg-login.css">
    <link rel="stylesheet" href="./estilos/secao.css">
    <title>Tipo de Atendimento</title>

</head>

<body>
    <form method="post" class="container">
        <div class="formulario__tipo_atendimento">
            <fieldset>
                <legend class="formulario__subtitulo">Tipo de atendimento</legend> 
                <div>
                <select id="tipoAtendimento" name="tipoAtendimento" class="formulario__entrada" required>
                    <option value="" disabled selected>Selecionar sua resposta</option>
                    <option value="carteira_trabalho">Carteira de Trabalho, SD, Vagas</option>
                    <option value="programa_artesanato">Programa Gaúcho do Artesanato</option>
                    <option value="vida_centro_humanistico">Vida Centro Humanístico</option>
                    <option value="orientacoes_empreendedorismo">Orientações sobre empreendedorismo</option>
                    <option value="orientacoes_cursos_qualificacao">Orientações sobre cursos de qualificação</option>
                    <option value="informacoes_mercado_trabalho">Informações sobre mercado de trabalho</option>
                    <option value="outra">Outra</option>
                </select>
             </div>
            <div id="outra_container" class="formulario__tipo_atendimento hidden">
                <label class="formulario__legenda" for="outraResposta">Insira sua resposta</label>
                <input value="" type="text" id="outraResposta" name="outraResposta" class="formulario__entrada">
            </div>
            <div class="centralizado">
                <input value="" type="button" value="Voltar" class="formulario__botao">
                <input value="" type="button" id="avancar" value="Avançar" class="formulario__botao">
            </div>
        </fieldset>
    </form>

    <script src="https://kit.fontawesome.com/df85906e6a.js" crossorigin="anonymous"></script>
</body>

</html>