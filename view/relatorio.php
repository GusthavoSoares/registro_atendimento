<?php

// if ($_REQUEST['exp'] === 'pdf') {
//     header("Location: /../src/controller/relatorios/gerapdf.php");
// } elseif ($_REQUEST['exp'] === 'csv') {
//     header("Location: /../src/controller/relatorios/geracsv.php");
// } else {
//     echo 'ERRO';
// }
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./estilos/ds.css">
    <title>Relatórios</title>
</head>

<body>
    <h1 class="formulario__titulo">Gerar relatório</h1>
    <form method="post">

        <fieldset class="formulario__campo">
            <legend class="formulario__legenda">Tipo de exportação</legend>
            <input class="formulario__opcao"value="" type="radio" id="pdf" name="exp">
            <label class="formulario__etiqueta"for="pdf">PDF</label>
            <input class="formulario__opcao" value="" type="radio" id="csv" name="exp">
            <label class="formulario__etiqueta" for="csv">CSV</label>
        </fieldset>
        <fieldset class="formulario__campo">
            <legend class="formulario__legenda">Forma de atendimento</legend>
            <select name="formaAtendimento" class="formulario__selecao">
                <option value="presencial">Presencial</option>
                <option value="whatsapp">Whatsapp</option>
                <option value="telefone">Ligação telefônica</option>
                <option value="email">E-mail</option>
                <option value="redes">Redes sociais</option>
                <option value="teams">Teams</option>
                <option value="outro">Outro</option>
            </select>
        </fieldset>
        <fieldset class="formulario__campo">
            <legend class="formulario__legenda">Tipo de solicitante</legend>
            <select name="solicitante" class="formulario__selecao">
                <option value="empregador">Empregador</option>
                <option value="trabalhador">Trabalhador</option>
                <option value="out_agen">Outras agências</option>
                <option value="ads">ADS</option>
                <option value="setores">Setores da FGTAS</option>
                <option value="mercado_trabalho">Interessado de informações sobre o Mercado de Trabalho</option>
                <option value="outro">Outro</option>
            </select>
        </fieldset>
        <fieldset class="formulario__campo">
            <legend class="formulario__legenda">Tipo de atendimento</legend>
            <select class="formulario__selecao" name="tipoAtendimento">
                <option value="trabalho">Carteira de Trabalho, SD, Vagas</option>
                <option value="pg_artesanato">Programa Gaúcho do Artesanato</option>
                <option value="vida_centro">Vida Centro Humanístico</option>
                <option value="empreendedorismo">Orientações sobre empreendedorismo</option>
                <option value="qualificacao">Orientações sobre cursos de qualificação</option>
                <option value="mercado_trabalho_info">Informações sobre mercado de trabalho</option>
                <option value="outro">Outro</option>
            </select>
        </fieldset>
        <fieldset class="formulario__campo">
            <legend class="formulario__legenda">Período</legend>

            <section>
                <label class="formulario__etiqueta" for="dataInicial">Data inicial</label>
                <div class="mv0-5">
                    <input class="formulario__entrada" value="" type="datetime-local" name="dataInicial" id="dataInicial">
                </div>
            </section>

            <section>
                <label for="dataFim" class="formulario__etiqueta">Data final</label>
                <div class="mv0-5">
                    <input class="formulario__entrada" value="" type="datetime-local" name="dataFim" id="dataFim">
                </div>
            </section>
        </fieldset>
        <div>
             <a href="./index.php" class="formulario__botao__secundario formulario__botao__padrao">Voltar</a>
            <input class="formulario__botao formulario__botao__padrao" type="submit" value="Exportar">
        </div>
    </form>
    <script src="https://kit.fontawesome.com/df85906e6a.js" crossorigin="anonymous"></script>
</body>

</html>