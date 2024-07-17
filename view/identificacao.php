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
    <title>Identificação</title>
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
    <form method="post" class="formulario centralizado mt10">
        <fieldset class="formulario__campo w90">
            <legend class="formulario__subtitulo">Identificação</legend>
            <section>
                <label class="formulario__etiqueta" for="nomeIdentificacao">Nome</label>
                <div class="mv0-5">
                    <input type="text" value="" name="nomeIdentificacao" required id="nomeIdentificacao"
                        class="formulario__entrada w90">
                </div>
            </section>
            <fieldset class="sem_borda">
                <legend class="formulario__legenda">Tipo de cadastro</legend>
                <section class="mv0-5">
                    <input class="formulario__entrada" value="" type="radio" name="tipoPessoa" id="pessoaFisica">
                    <label for="pessoaFisica" class="formulario__etiqueta">Pessoa Física</label>
                </section>
                <section>
                    <input value="" type="radio" name="tipoPessoa" id="pessoaJuridica">
                    <label class="formulario__etiqueta" for="pessoaJuridica">Pessoa Jurídica</label>
                </section>
                <section class="mv1">
                    <input type="text" required minlength="3" value="" id="cpf" name="identificadorUnico"
                        placeholder="Informe seu CPF ou CNPJ " pattern="^[0-9]{11,14}$" maxlength="14" minlength="11"
                        class="formulario__entrada w50">
                </section>
            </fieldset>
            <section>
                <label class="formulario__etiqueta" for="telefoneContatoMercado">Telefone</label>
                <div class="mv0-5">
                    <input type="tel" minlength="3" value="" id="telefoneContatoMercado" name="telefoneContatoMercado"
                        pattern="^[0-9]{10,11}$" placeholder="51123456789" class="formulario__entrada w90">
                </div>
            </section>
            <section>
                <label class="formulario__etiqueta" for="emailContatoMercado">E-mail</label>
                <div class="mv0-5">
                    <input type="tel" minlength="3" value="" id="emailContatoMercado" name="emailContatoMercado"
                        placeholder="exemplo@gmail.com" class="formulario__entrada w90">
                </div>
            </section>
            <section>
                <label class="formulario__etiqueta" for="desc_atividade">Descrição da atividade</label>
                <div class="mv0-5">
                    <textarea class="formulario__caixa__texto w90" id="desc_atividade" required></textarea>
                </div>
            </section>
        </fieldset>
        <div class="mv0-5 grid50-50 gp5 centralizado w50">
            <a href="./index.php" class="formulario__botao__secundario formulario__botao__padrao">Voltar</a>
            <input class="formulario__botao formulario__botao__padrao" type="submit" value="Enviar" name="envio">
        </div>
    </form>
    <script src="https://kit.fontawesome.com/df85906e6a.js" crossorigin="anonymous"></script>
</body>

</html>