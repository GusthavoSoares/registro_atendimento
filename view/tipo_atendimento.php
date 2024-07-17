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
    <title>Tipo de Atendimento</title>
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
    <form method="post" class="formulario centralizado mt12-5">
        <div class="formulario__tipo_atendimento w80">
            <fieldset class="formulario__campo">
                <legend class="formulario__subtitulo">Tipo de atendimento</legend>
                <section class="mv0-5">
                    <select id="tipoAtendimento" name="nomeAtendimento" class="formulario__selecao w90" required>
                        <option value="" disabled selected>Selecionar sua resposta</option>
                        <option value="carteira_trabalho">Carteira de Trabalho, SD, Vagas</option>
                        <option value="programa_artesanato">Programa Gaúcho do Artesanato</option>
                        <option value="vida_centro_humanistico">Vida Centro Humanístico</option>
                        <option value="orientacoes_empreendedorismo">Orientações sobre empreendedorismo</option>
                        <option value="orientacoes_cursos_qualificacao">Orientações sobre cursos de qualificação
                        </option>
                        <option value="informacoes_mercado_trabalho">Informações sobre mercado de trabalho</option>
                        <option value="outra">Outra</option>
                    </select>
                </section>
                <section class="escondido">
                    <label class="formulario__etiqueta" for="outraResposta">Insira sua resposta</label>
                    <div class="mv0-5">
                        <input value="" type="text" id="outraResposta" name="outraResposta"
                            class="formulario__entrada w90">
                    </div>
                </section>
            </fieldset>
            <div class="mv0-5">
                <a href="./index.php" class="formulario__botao__padrao formulario__botao__secundario">Voltar</a>
                <input type="submit" value="Próximo" class="formulario__botao formulario__botao__padrao">
            </div>
    </form>

    <script src="https://kit.fontawesome.com/df85906e6a.js" crossorigin="anonymous"></script>
</body>

</html>