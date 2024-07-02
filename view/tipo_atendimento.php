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
    <div class="container">
        <h1>Tipo de Atendimento</h1>

        <div class="formulario__tipo_atendimento">
            <label class="formulario__legenda" for="tipo_atendimento">Selecionar Tipo de Atendimento</label>
            <select id="tipo_atendimento" name="tipo_atendimento" class="formulario__entrada" required onchange="toggleOutra()">
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
            <label class="formulario__legenda" for="outra_resposta">Insira sua resposta</label>
            <input type="text" id="outra_resposta" name="outra_resposta" class="formulario__entrada">
        </div>
        <div class="centralizado">
            <input type="button" value="Voltar" onclick="window.location.href='empregador.php'" class="formulario__botao">
            <input type="button" id="avancar" value="Avançar" onclick="window.location.href='.php'" class="formulario__botao">
            <input type="submit" id="enviar" value="Enviar" class="formulario__botao hidden">
        </div>
    </div>

    <script>
        function toggleOutra() {
            var tipoAtendimento = document.getElementById('tipo_atendimento').value;
            var outraContainer = document.getElementById('outra_container');
            var avancarButton = document.getElementById('avancar');
            var enviarButton = document.getElementById('enviar');

            if (tipoAtendimento === 'outra') {
                outraContainer.classList.remove('hidden');
                avancarButton.classList.add('hidden');
                enviarButton.classList.remove('hidden');
            } else {
                outraContainer.classList.add('hidden');
                avancarButton.classList.remove('hidden');
                enviarButton.classList.add('hidden');
            }
        }
    </script>
</body>

</html>