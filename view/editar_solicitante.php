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
    <title>Editar Solicitante</title>
</head>

<body>
    <form method="post">
        <fieldset class="formulario__campo">
            <legend class="formulario__legenda">Solicitante</legend>
            <section>
                <div>
                    <label class="formulario__etiqueta" for="nomeSolicitante">Nome</label>
                </div>
                <input class="formulario__entrada" type="text" name="nomeSolicitante" id="nomeSolicitante" value="" required>
            </section>
            <section>
                <div>
                    <label class="formulario__etiqueta" for="emailSolicitante">E-mail</label>
                </div>
                <input class="formulario__entrada" type="email" name="emailSolicitante" id="emailSolicitante" value="" required>
            </section>
            <section>
                <label class="formulario__etiqueta" for="telefoneSolicitante">Telefone</label>
                <div>
                    <input type="tel" name="telefoneSolicitante" id="telefoneSolicitante" value="" required class="formulario__entrada">
                </div>
            </section>
            <fieldset class="sem_borda"> 
                <legend class="formulario__legenda">Tipo de pessoa</legend>
                <div>
                    <input class="formulario__opcao" type="radio" name="tipoPessoa" value="" id="fisica" required>
                    <label class="formulario__etiqueta" for="fisica">Física</label>
                </div>
                <div>
                    <input class="formulario__opcao" type="radio" name="tipoPessoa" value="" id="juridica"  required>
                    <label for="juridica" class="formulario__etiqueta">Jurídica</label>
                </div>
                <div>
                    <input class="formulario__entrada mv1" type="text" value="" name="identificadorUnico" id="identificadorUnico"
                        placeholder="Insira o CPF ou CNPJ">
                </div>
            </fieldset>
            <fieldset class="sem_borda">
                <legend class="formulario__legenda">Forma de atendimento</legend>
                <select class="formulario__selecao" required name="formaAtendimento">
                    <option value="presencial">Presencial</option>
                    <option value="whatsapp">Whatsapp</option>
                    <option value="telefone">Ligação telefônica</option>
                    <option value="email">E-mail</option>
                    <option value="redesSociais">Redes Sociais</option>
                    <option value="teams">Teams</option>
                    <option value="outro">Outro</option>
                </select>
            </fieldset >
            <fieldset class="sem_borda mv1">
                <legend class="formulario__legenda">Tipo de solicitante</legend>
                <div>
                    <select name="tipoSolicitante" class="formulario__selecao" required>
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
            <fieldset class="sem_borda">
                <legend class="formulario__legenda">Ativo</legend>
                <select name="ativo" class="formulario__selecao" required>
                    <option value="Ativado">Ativado</option>
                    <option value="Desativado">Desativado</option>
                </select>
            </fieldset>
            <fieldset class="sem_borda">
                <legend class="formulario__legenda">Tipo de informação</legend>
                <select class="formulario__selecao" name="tipoInformacao">
                    <option></option>
                </select>
            </fieldset>
            <div>
                <label class="formulario__etiqueta" for="descricaoAtividade">Descrição da atividade</label>
                <div>
                    <textarea required id="descricaoAtividade" name="descricaoAtividade" class="formulario__caixa__texto w50" value=""></textarea>
                </div>
            </div>
        </fieldset>
        <div>
            <a href="usuario.php" class="formulario__botao__secundario formulario__botao__padrao">Voltar</a>
            <input type="submit" class="formulario__botao formulario__botao__padrao" value="Editar">
        </div>
    </form>
</body>

</html>