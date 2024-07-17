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
    <title>Vida Centro Humanístico</title>
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
    <form method="post" class="formulario">
        <fieldset class="formulario__campo w50 mt12-5">
            <legend class="formulario__subtitulo centralizado">Orientações sobre a vida centro humanístico</legend>
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
        <div class="grid50-50 gp5 mv0-5 w33 centralizado">
            <a href="./tipo_atendimento.php" class="formulario__botao__secundario formulario__botao__padrao">Voltar</a>
            <input type="submit" value="Enviar" class="formulario__botao formulario__botao__padrao">
        </div>
    </form>
    <script src="https://kit.fontawesome.com/df85906e6a.js" crossorigin="anonymous"></script>
</body>

</html>