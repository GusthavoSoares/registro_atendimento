<?php
    session_start();
    if(!array_key_exists('logado', $_SESSION)){
        header("location: login.php");
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./estilos/ds.css">
    <link rel="stylesheet" href="./estilos/pg-principal.css">
    <title>Cadastro de Atendimentos</title>
</head>
<body class="relativo h100">
    <form class="formulario absoluto translacao70-70 mr2" method="post">
        <h1  class="formulario__titulo">Atendimentos</h1>
        <fieldset class="formulario__identificacao">
            <legend class="centralizado formulario__subtitulo">Identificação</legend>
            <div class="atendimento">
                <label class="formulario__legenda" for="identificacaoAtendente">Nome do Atendente</label>
                <input type="text" id="identificacaoAtendente" name="identificacaoAtendente" class="formulario__entrada" required minlength="5" maxlength="100">
                <label class="formulario__legenda" for="identificacaoAtendente">Tipo de atendimento</label>
                <select class="formulario__selecao" name="tipoAtendimento" required>
                    <option value="0">Escolha o tipo de atendimento...</option>
                    <option value="1">Presencial</option>
                    <option value="2">Whatsapp</option>
                    <option value="3">Ligação telefônica</option>
                    <option value="4">E-mail</option>
                    <option value="5">Redes sociais</option>
                    <option value="6">Teams</option>
                    <option value="7">Outra</option>
                </select>
            </div>
            <div class="centralizado formulario__subtitulo">
                <label for="pessoaAtendida" >Quem estou atendendo </label>
            </div>
                <div class="opcoesAtendimentos">
                <div class="opcaoFormulario">
                    <input type="radio" name="pessoasAtendimento" id="empregador" required>
                    <label for="empregador" class="formulario__legenda">Empregador</label>
                </div>
                <div class="opcaoFormulario">
                    <input type="radio" name="pessoasAtendimento" id="trabalhador" required>
                    <label for="trabalhador" class="formulario__legenda">Trabalhador</label>
                </div>
                <div class="opcaoFormulario">
                    <input type="radio" name="pessoasAtendimento" id="ads" required> 
                    <label for="ads" class="formulario__legenda">ADS</label> 
                </div>
                <div class="opcaoFormulario">
                    <input type="radio" name="pessoasAtendimento" id="setores" required>
                    <label for="setores" class="formulario__legenda">Setores da FGTAS</label>
                </div>
                <div class="opcaoFormulario">
                    <input type="radio" name="pessoasAtendimento" id="mercadoTrabalho" required>
                    <label for="mercadoTrabalho" class="formulario__legenda">Interessado em informações sobre o Mercado de trabalho</label>
                </div>
                <div class="opcaoFormulario">
                    <input type="radio" name="pessoasAtendimento" class="formulario__legenda" id="outro" required>
                    <label for="outro" class="formulario__legenda">Outro</label>
                </div>
            </div>
            <div class="centralizado">
                <input type="submit" value="Próximo" class="formulario__botao">
            </div>
        </fieldset>

    </form>
    
    <script src="https://kit.fontawesome.com/df85906e6a.js" crossorigin="anonymous"></script>
</body>
</html>