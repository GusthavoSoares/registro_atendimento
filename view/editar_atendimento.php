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
    <title>Editar Atendimento</title>
</head>

<body>
    <header class="grid100  menu ">
        <nav class="w100 direita pv1">
            <?php
            if ($_SESSION['nome'] == 'admin') {
                ?>
                <a href="admin.php" class="menu__botao">Admin</a>
                <?php
            }
            ?>
            <a href="../src/controller/deslogando.php" class="menu__botao__secundario">Deslogar</a>
            <a href="usuario.php" class="menu__botao">Usuário</a>
        </nav>
    </header>
    <form method="post" class="formulario mt12-5 centralizado">
        <fieldset class="formulario__campo w80">
            <legend class="formulario__subtitulo">Atendimento</legend>
            <fieldset class="sem_borda w100 centralizado">
                <legend class="formulario__legenda">Id do Solicitante</legend>
                <select class="formulario__selecao w90" name="idSolicitante" value="" required>
                    <option></option>
                </select>
            </fieldset>
            <fieldset class="sem_borda w100 centralizado">
                <legend class="formulario__legenda">Tipo de Atendimento</legend>
                <select class="formulario__selecao w90" name="nomeAtendimento" required>
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
                <fieldset class="sem_borda w100 centralizado">
                    <legend class="formulario__legenda">Informação</legend>
                    <select class="formulario__selecao w90" name="informacao" required>
                        <option></option>
                    </select>
            </div>
        </fieldset>
        </fieldset>
        <div class="grid50-50 w50 centralizado mv0-5 gp5">
            <a href="usuario.php" class="formulario__botao__secundario formulario__botao__padrao">Voltar</a>
            <input type="submit" value="Editar" class="formulario__botao formulario__botao__padrao ">
        </div>
    </form>
</body>

</html>