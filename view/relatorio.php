<?php
    // session_start();
    // if(!array_key_exists('logado', $_SESSION) || $_SESSION['logado'] == false){
    //     header("location: login.php");
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
    <h1>Gerar relatório</h1>
    <form method="post">

        <fieldset>
            <legend>Tipo de exportação</legend>
            <input  value="" type="radio" id="pdf" name="exp">
            <label for="pdf">PDF</label>
            <input value="" type="radio" id="csv" name="exp">
            <label for="csv">CSV</label>
        </fieldset>
        <fieldset>
            <legend>Tipo de atendimento</legend>
            <select>
                <option value="presencial">Presencial</option>
                <option value="whatsapp">Whatsapp</option>
                <option value="telefone">Ligação telefônica</option>
                <option value="email">E-mail</option>
                <option value="redes">Redes sociais</option>
                <option value="teams">Teams</option>
                <option value="outro">Outro</option>
            </select>
        </fieldset>
        <fieldset>
            <legend>Público</legend>
            <select>
                <option value="empregador">Empregador</option>
                <option value="trabalhador">Trabalhador</option>
                <option value="out_agen">Outras agências</option>
                <option value="ads">ADS</option>
                <option value="setores">Setores da FGTAS</option>
                <option value="mercado_trabalho">Interessado de informações sobre o Mercado de Trabalho</option>
                <option value="outro">Outro</option>
            </select>
        </fieldset>
        <fieldset>
            <legend>Tipo de atendimento</legend>
            <select>
                <option value="trabalho">Carteira de Trabalho, SD, Vagas</option>
                <option value="pg_artesanato">Programa Gaúcho do Artesanato</option>
                <option value="vida_centro">Vida Centro Humanístico</option>
                <option value="empreendedorismo">Orientações sobre empreendedorismo</option>
                <option value="qualificacao">Orientações sobre cursos de qualificação</option>
                <option value="mercado_trabalho_info">Informações sobre mercado de trabalho</option>
                <option value="outro">Outro</option>
            </select>
        </fieldset>
        <fieldset>
            <legend>Período</legend>

            <div>
                <label for="data_ini">Data inicial</label>
                <input value="" type="date" id="data_ini">
            </div>

            <div>
                <label for="data_fim">Data final</label>
                <input value="" type="date" id="data_fim">
            </div>
        </fieldset>
        <div>
            <input type="submit" value="Exportar">
        </div>
    </form>
    <script src="https://kit.fontawesome.com/df85906e6a.js" crossorigin="anonymous"></script>
</body>

</html>