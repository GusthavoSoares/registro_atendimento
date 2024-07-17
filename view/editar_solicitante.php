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
    <title>Editar Solicitante</title>
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
        <fieldset class="formulario__campo w80 mt5 centralizado">
            <legend class="formulario__subtitulo">Solicitante</legend>
            <section class="centralizado">
                <label class="formulario__etiqueta" for="nomePublico">Nome</label>
                <div>
                    <input class="formulario__entrada w90" type="text" name="nomePublico" id="nomePublico" value=""
                        required>
                </div>
            </section>
            <section class="centralizado mv0-5">
                <label class="formulario__etiqueta" for="emailSolicitante">E-mail</label>
                <div>
                    <input class="formulario__entrada w90" type="email" name="emailSolicitante" id="emailSolicitante"
                        value="" required>
                </div>
            </section>
            <section class="centralizado mv0-5">
                <label class="formulario__etiqueta" for="telefoneSolicitante">Telefone</label>
                <div>
                    <input type="tel" name="telefoneSolicitante" id="telefoneSolicitante" value="" required
                        class="formulario__entrada w90">
                </div>
            </section>
            <fieldset class="sem_borda mv0-5 centralizado">
                <legend class="formulario__legenda">Tipo de pessoa</legend>
                <div>
                    <input class="formulario__opcao " type="radio" name="tipoPessoa" value="" id="fisica" required>
                    <label class="formulario__etiqueta" for="fisica">Física</label>
                </div>
                <div>
                    <input class="formulario__opcao" type="radio" name="tipoPessoa" value="" id="juridica" required>
                    <label for="juridica" class="formulario__etiqueta">Jurídica</label>
                </div>
                <div>
                    <input class="formulario__entrada w50 mv1" type="text" value="" name="identificadorUnico"
                        id="identificadorUnico" placeholder="Insira o CPF ou CNPJ">
                </div>
            </fieldset>
            <fieldset class="sem_borda centralizado">
                <legend class="formulario__legenda">Forma de atendimento</legend>
                <select class="formulario__selecao w90" required name="formaAtendimento">
                    <option value="presencial">Presencial</option>
                    <option value="whatsapp">Whatsapp</option>
                    <option value="telefone">Ligação telefônica</option>
                    <option value="email">E-mail</option>
                    <option value="redesSociais">Redes Sociais</option>
                    <option value="teams">Teams</option>
                    <option value="outro">Outro</option>
                </select>
            </fieldset>
            <fieldset class="sem_borda mv1 centralizado">
                <legend class="formulario__legenda">Tipo de solicitante</legend>
                <div>
                    <select name="tipoSolicitante" class="formulario__selecao w90" required>
                        <option value="empregador">Empregador</option>
                        <option value="trabalhador">Trabalhador</option>
                        <option value="outraAgencia">Outras agências</option>
                        <option value="ads">ADS</option>
                        <option value="setor">Setores da FGTAS</option>
                        <option value="mercadoTrabalho">Interessado em informações sobre o mercado de trabalho</option>
                        <option value="outro">Outro</option>
                    </select>
                </div>
            </fieldset>
            <fieldset class="sem_borda centralizado">
                <legend class="formulario__legenda">Ativo</legend>
                <select name="ativo" class="formulario__selecao w90" required>
                    <option value="Ativado">Ativado</option>
                    <option value="Desativado">Desativado</option>
                </select>
            </fieldset>
            <fieldset class="sem_borda centralizado">
                <legend class="formulario__legenda">Tipo de informação</legend>
                <select class="formulario__selecao w90" name="tipoInformacao">
                    <option></option>
                </select>
            </fieldset>
            <div class="centralizado">
                <label class="formulario__etiqueta" for="descricaoAtividade">Descrição da atividade</label>
                <div>
                    <textarea required id="descricaoAtividade" name="descricaoAtividade"
                        class="formulario__caixa__texto w90" value=""></textarea>
                </div>
            </div>
        </fieldset>
        <div class="grid50-50 w50 gp5 mv0-5 centralizado">
            <a href="usuario.php" class="formulario__botao__secundario formulario__botao__padrao">Voltar</a>
            <input type="submit" class="formulario__botao formulario__botao__padrao" value="Editar">
        </div>
    </form>
</body>

</html>