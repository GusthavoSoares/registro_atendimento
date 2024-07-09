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

    <title>Empregador</title>
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
    <form class="formulario mt12-5 centralizado" method="post" action="processa_login.php">
        <h1 class="formulario__titulo">Empregador</h1>
        <fieldset class="formulario__campo w80 mv0-5">
            <label class="formulario__legenda" for="nomeEmpregador">Nome do Empregador</label>
            <div class="mv1">
                <input type="text" id="nomeEmpregador" name="nomeEmpregador" class="w90 formulario__entrada pv2"
                    value="" required maxlength="100">
            </div>

            <section>
                <label class="formulario__legenda centralizado mbt1" for="cnpj_empregador">CNPJ do Empregador</label>
                <div class="mv1">
                    <input type="text" id="cnpjEmpregador" name="cnpjEmpregador" class="formulario__entrada w90"
                        value="" required pattern="^[0-9]{14}$" maxlength="14">
                </div>
            </section>

            <section>
                <label class="formulario__legenda mv1" for="telefone_empregador">Telefone de Contato</label>
                <div class="mv1">
                    <input type="tel" id="telefone_empregador" name="telefoneEmpregador" value=""
                        class="formulario__entrada w90" required pattern="^[0-9]{10,11}$" maxlength="11" value=""
                        placeholder="51123456789">

                </div>
            </section>



        </fieldset>
        <div class="mv0-5 grid50-50 gp5 w33">
            <a href="./index.php" class="formulario__botao__secundario formulario__botao__padrao">Voltar</a>
            <input type="submit" value="Próximo" class="formulario__botao formulario__botao__padrao">
        </div>
    </form>
    <script src="https://kit.fontawesome.com/df85906e6a.js" crossorigin="anonymous"></script>
</body>

</html>