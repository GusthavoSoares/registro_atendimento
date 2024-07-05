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
    <title>Editar Solicitante</title>
</head>

<body>
    <form method="post">
        <fieldset>
            <legend>Solicitante</legend>
            <div>
                <label for="nomeSolicitante">Nome</label>
                <input type="text" name="nomeSolicitante" id="nomeSolicitante" value="" required>
            </div>
            <div>
                <label for="emailSolicitante">E-mail</label>
                <input type="email" name="emailSolicitante" id="emailSolicitante" value="" required>
            </div>
            <div>
                <label for="telefoneSolicitante">Telefone</label>
                <input type="tel" name="telefoneSolicitante" id="telefoneSolicitante" value="" required>
            </div>
            <fieldset>
                <legend>Tipo de pessoa</legend>
                <div>
                    <input type="radio" name="tipoPessoa" value="" id="fisica" required>
                    <label for="fisica">Física</label>
                </div>
                <div>
                    <input type="radio" name="tipoPessoa" value="" id="juridica" required>
                    <label for="juridica">Jurídica</label>
                </div>
                <div>
                    <input type="text" value="" name="identificadorUnico" id="identificadorUnico"
                        placeholder="Insira o CPF ou CNPJ">
                </div>
            </fieldset>
            <fieldset>
                <legend>Forma de atendimento</legend>
                <select required name="formaAtendimento">
                    <option value="presencial">Presencial</option>
                    <option value="whatsapp">Whatsapp</option>

                    <option value="telefone">Ligação telefônica</option>
                    <option value="email">E-mail</option>
                    <option value="redesSociais">Redes Sociais</option>
                    <option value="teams">Teams</option>
                    <option value="outro">Outro</option>
                </select>
            </fieldset>
            <fieldset>
                <legend>Tipo de solicitante</legend>
                <div>
                    <select name="tipoSolicitante" required>
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
            <fieldset>
                <legend>Ativo</legend>
                <select name="ativo" required>
                    <option value="Ativado">Ativado</option>
                    <option value="Desativado"></option>
                </select>
            </fieldset>
            <fieldset>
                <legend>Tipo de informação</legend>
                <select name="tipoInformacao">
                    <option></option>
                </select>
            </fieldset>
            <div>
                <label for="descricaoAtividade">Descrição da atividade</label>
                <div>
                    <textarea required id="descricaoAtividade" name="descricaoAtividade" value=""></textarea>
                </div>
            </div>
        </fieldset>
        <div>
            <a href="usuario.php">Voltar</a>
            <input type="submit" value="Editar">
        </div>
    </form>
</body>

</html>