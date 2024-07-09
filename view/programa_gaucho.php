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
    <title>Programa Gaúcho do Artenato</title>
</head>

<body>
    <header class="grid100  menu ">
        <nav class="w100 direita pv1">
            <?php
            if (isset($_SESSION['nome']) == 'admin') {
                ?>
                <a href="admin.php" class="menu__botao">Admin</a>
                <?php
            }
            ?>
            <a href="usuario.php" class="menu__botao">Usuário</a>
        </nav>
    </header>
    <form method="post" class="formulario mt12-5">
        <fieldset class="formulario__campo w50">
            <legend class="formulario__subtitulo centralizado">Informações sobre o programa gaúcho do artesato</legend>
            <div>
                <input value="" type="radio" name="artesanato" required id="carteiraArtesao" class="formulario__opcao">
                <label class="formulario__etiqueta" for="carteiraArtesao">Carteira do artesão PGA e PBA</label>
            </div>
            <div>
                <input value="" type="radio" name="artesanato" required id="feiras" class="formulario__opcao">
                <label class="formulario__etiqueta" for="feiras">Participação em feiras de artesanato</label>
            </div>
            <div>
                <input value="" type="radio" name="artesanato" required id="casaArtesao" class="formulario__opcao">
                <label class="formulario__etiqueta" for="casaArtesao">Participação em casas do artesão</label>
            </div>
            <div>
                <input value="" type="radio" name="artesanato" required id="portal" class="formulario__opcao">
                <label class="formulario__etiqueta" for="portal">Inscrição e acesso ao portal do artesanato
                    gaúcho</label>
            </div>
            <div>
                <input value="" type="radio" name="artesanato" required id="outrosServicos" class="formulario__opcao">
                <label class="formulario__etiqueta" for="outrosServicos">Outros serviços</label>
            </div>
        </fieldset>
        <div class="grid50-50 gp5 w33 mv0-5 centralizado">
            <a class="formulario__botao__secundario formulario__botao__padrao" href="./tipo_atendimento.php">Voltar</a>
            <input type="submit" class="formulario__botao formulario__botao__padrao" value="Enviar" name="envio">
        </div>
    </form>
    <script src="https://kit.fontawesome.com/df85906e6a.js" crossorigin="anonymous"></script>
</body>

</html>