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
    <title>Editar Atendimento</title>
</head>
<body>
<form method="post">
        <fieldset class="formulario__campo">
            <legend class="formulario__legenda">Atendimento</legend>
            <fieldset class="sem_borda">
                <legend class="formulario__legenda">Id do Solicitante</legend>
                <select class="formulario__selecao" value="idSolicitante" required>
                <option></option>
                </select>
            </fieldset>
            <fieldset class="sem_borda">
                <legend class="formulario__legenda">Tipo de Atendimento</legend>
                <select class="formulario__selecao" name="tipoAtendimento" required>
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
            <fieldset class="sem_borda">
                <legend class="formulario__legenda">Informação</legend>
                    <select class="formulario__selecao" name="informacao" required>
                        <option></option>
                    </select>
                </div>
            </fieldset>
        </fieldset>
        <div>
            <a href="usuario.php" class="formulario__botao__secundario formulario__botao__padrao">Voltar</a>
            <input type="submit" value="Editar" class="formulario__botao formulario__botao__padrao ">
        </div>
    </form>
</body>
</html>