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
    <title>Interessado de informações sobre o Mercado de Trabalho</title>
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
    <form method="post" class="formulario centralizado">
        <header class="grid100  menu ">
            
        </header>
        <fieldset class="formulario__campo w80">
            <legend class="formulario__subtitulo">Informações sobre o mercado de trabalho (SIP)</legend>
            <section>
                <label for="nomeInfoMercado" class="formulario__etiqueta">Nome</label>
                <div class="mv0-5">
                    <input value="" type="text" required minlength="3" id="nomeInfoMercado" name="nomeInfoMercado"
                        class="formulario__entrada w90">
                </div>
            </section>
            <fieldset class="sem_borda">
                <legend class="formulario__legenda">Tipo de cadastro</legend>
                <div>
                    <input value="" type="radio" name="tipoPessoa" id="pessoaFisica" class="formulario__opcao">
                    <label for="pessoaFisica" class="formulario__etiqueta">Pessoa Física</label>
                </div>
                <div>
                    <input value="" type="radio" name="tipoPessoa" id="pessoaJuridica" class="formulario__opcao">
                    <label class="formulario__etiqueta" for="pessoaJuridica">Pessoa Jurídica</label>
                </div>
                <div class="mv0-5">
                    <input type="text" required minlength="3" id="cpf" name="identificadorUnico"
                        placeholder="Informe seu CPF ou CNPJ" pattern="^[0-9]{11,14}$" maxlength="14" minlength="11"
                        value="" class="formulario__entrada w50">
                </div>
            </fieldset>

            <section>

                <label class="formulario__etiqueta" for="telefoneContatoMercado">Telefone</label>
                <div class="mv0-5">
                    <input value="" type="tel" minlength="3" id="telefoneContatoMercado" name="telefoneContatoMercado"
                        class="formulario__entrada w90">
                </div>
            </section>
            <section>
                <label class="formulario__etiqueta" for="emailContatoMercado">E-mail</label>
                <div class="mv0-5">
                    <input value="" type="tel" minlength="3" id="emailContatoMercado" name="emailContatoMercado"
                        class="formulario__entrada w90">
                </div>
            </section>
            <fieldset class="sem_borda mv0-5">
                <legend class="formulario__legenda">Tipo de informações</legend>
                <div>
                    <input value="" class="formulario__opcao" type="radio" name="tipoInfoMercado" id="intermediacao">
                    <label class="formulario__etiqueta" for="intermediacao">Estatísticas da intermediação de mão de obra
                        no âmbito do Sine/RS</label>
                </div>
                <div>
                    <input value="" type="radio" name="tipoInfoMercado" id="seguroDesemprego" class="formulario__opcao">
                    <label for="seguroDesemprego" class="formulario__etiqueta">Estatísticas do seguro-desemprego no
                        âmbito do Sine/RS</label>
                </div>
                <div>
                    <input value="" type="radio" name="tipoInfoMercado" class="formulario__opcao" id="vagasAbertas">
                    <label class="formulario__etiqueta" for="vagasAbertas">Relação de vagas abertas no Sine/RS</label>
                </div>
                <div>
                    <input value="" type="radio" name="tipoInfoMercado" id="resultadosCAGED" class="formulario__opcao">
                    <label for="resultadosCAGED" class="formulario__etiqueta">Resultados do Novo CAGED</label>
                </div>
                <div>
                    <input value="" type="radio" name="tipoInfoMercado" class="formulario__opcao" id="pnad">
                    <label for="pnad" class="formulario__etiqueta">Resultados da PNAD Contínua</label>
                </div>
                <div>
                    <input value="" type="radio" name="tipoInfoMercado" class="formulario__opcao" id="outro">
                    <label for="outro" class="formulario__etiqueta">Outro</label>
                </div>

            </fieldset>
            <div>
                <label class="formulario__etiqueta" for="descAtividade">Descrição da atividade</label>
                <div>
                    <textarea name="descAtividade" id="descAtividade" class="formulario__caixa__texto w90"></textarea>
                </div>

            </div>
        </fieldset>
        <div class="grid50-50 gp5 mv0-5 w50">
            <a href="./index.php" class="formulario__botao__secundario formulario__botao__padrao">Voltar</a>
            <input type="submit" class="formulario__botao formulario__botao__padrao" value="Enviar" name="envio">
        </div>
    </form>
    <script src="https://kit.fontawesome.com/df85906e6a.js" crossorigin="anonymous"></script>
</body>

</html>