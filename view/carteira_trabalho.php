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
    <title>Carteira de Trabalho</title>
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
    <form method="post" class="formulario mt15">
        <fieldset class="formulario__campo w70">
            <legend class="formulario__subtitulo">Informações sobre carteira de trabalho, seguro-desemprego, vagas
            </legend>
            <div>
                <input class="formulario__opcao" type="radio" name="trabalho" value="" required id="carteiraTrab">
                <label class="formulario__etiqueta" for="carteiraTrab">Carteira de trabalho física e digital</label>
            </div>
            <div>
                <input class="formulario__opcao" type="radio" name="trabalho" value="" required id="seguroDesemprego">
                <label class="formulario__etiqueta" for="seguroDesemprego">Direito e benefício de
                    seguro-desemprego</label>
            </div>
            <div>
                <input class="formulario__opcao" type="radio" name="trabalho" value="" required id="vagas">
                <label class="formulario__etiqueta" for="vagas">Vagas - cadastramento, registro de retorno,
                    administração</label>
            </div>
            <div>
                <input class="formulario__opcao" type="radio" name="trabalho" value="" required id="outrosServicos">
                <label class="formulario__etiqueta" for="outrosServicos">Outros serviços</label>
            </div>
        </fieldset>
        <section class="grid50-50 gp5 mv0-5 w25 centralizado">
            <a href="./tipo_atendimento.php" class="formulario__botao__secundario formulario__botao__padrao">Voltar</a>
            <input type="submit" value="Enviar" class="formulario__botao formulario__botao__padrao">
        </section>
    </form>
    <script src="https://kit.fontawesome.com/df85906e6a.js" crossorigin="anonymous"></script>
</body>

</html>