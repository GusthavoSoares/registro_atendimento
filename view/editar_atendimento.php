<?php
    require_once __DIR__ . "/../src/controller/SessaoController.php";
    $controle = new SessaoController();
    $controle->protecao();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./estilos/ds.css">
    <title>Editar Atendimento</title>
</head>
<body>
<form method="post">
        <fieldset>
            <legend>Atendimento</legend>
            <fieldset>
                <legend>Id do Solicitante</legend>
                <select value="idSolicitante" required>
                <option></option>
                </select>
            </fieldset>
            <fieldset>
                <legend>Tipo de Atendimento</legend>
                <select value="tipoAtendimento" required>
                    <option value="carteiraTrabalho">Carteira de Trabalho, SD, Vagas</option>
                    <option value="programaGauchoArtesanato">Programa Gaúcho de Artesanato</option>
                    <option value="centroHumanistico">Vida Centro Humanístico</option>
                    <option value="empreendedorismo">Orientação sobre empreendedorismo</option>
                    <option value="cursoQualificacao">Orientação sobre cursos de qualificação</option>
                    <option value="mercadoTrabalho">Informações sobre o mercado de trabalho</option>
                    <option value="outro">Outro</option>
                </select>
            </fieldset>
            <div>
            <fieldset>
                <legend>Informação</legend>
                    <select name="informacao" required>
                        <option></option>
                    </select>
                </div>
            </fieldset>
        </fieldset>
        <div>
            <a href="usuario.php">Voltar</a>
            <input type="submit" value="Editar">
        </div>
    </form>
</body>
</html>