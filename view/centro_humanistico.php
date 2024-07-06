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
    <title>Vida Centro Humanístico</title>
</head>

<body>
    <form method="post">
        <fieldset class="formulario__campo">
            <legend class="formulario__legenda">Orientações sobre a vida centro humanístico</legend>
            <div>
                <input type="radio" class="formulario__opcao" name="centroHum" value="" required id="atvLudica">
                <label class="formulario__legenda" for="atvLudica">Atividades lúdicas e pedagógicas</label>
            </div>
            <div>
                <input type="radio" name="centroHum" value="" required id="recreacao" class="formulario__opcao">
                <label class="formulario__legenda" for="recreacao">Atividades esportivas e de recreação</label>
            </div>
            <div>
                <input type="radio" name="centroHum" value="" required id="entidadesPrivadas" class="formulario__opcao">
                <label class="formulario__legenda" for="entidadesPrivadas">Entidades parceiras (privadas)</label>
            </div>
            <div>
                <input type="radio" name="centroHum" value="" required id="entidadesPublicas" class="formulario__opcao">
                <label class="formulario__legenda" for="entidadesPublicas">Entidades parceiras (públicas)</label>
            </div>
            <div>
                <input type="radio" name="centroHum" value="" required id="eventos" class="formulario__opcao">
                <label class="formulario__legenda" for="eventos">Eventos, festas e mutirões sociais</label>
            </div>
            <div>
                <input type="radio" name="centroHum" value="" required id="outrosServicos" class="formulario__opcao">
                <label for="outrosServicos" class="formulario__legenda">Outros serviços</label>
            </div>
        </fieldset>
        <div>
            <a href="./tipo_atendimento.php" class="formulario__botao__secundario formulario__botao__padrao">Voltar</a>
            <input type="submit" value="Enviar" class="formulario__botao formulario__botao__padrao">
        </div>
    </form>
    <script src="https://kit.fontawesome.com/df85906e6a.js" crossorigin="anonymous"></script>
</body>

</html>