<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./estilos/principal.css">
    <title>Cadastro de clientes</title>
</head>
<body>
    <form class="formulario" method="post">
        <h1>Atendimentos</h1>
        <fieldset>
            <legend>Identificação</legend>
            <div class="entradaFormulario">
                <label for="identificacaoAtendente">Nome do Atendente</label>
                <input type="text" id="identificacaoAtendente" name="identificacaoAtendente" required minlength="5" maxlength="100">
            </div>
            <div class="entradaFormulario">
                <label for="identificacaoAtendente">Tipo de atendimento</label>
                <select name="tipoAtendimento" required>
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
            <div class="entradaFormulario">
                <label for="pessoaAtendida">Quem estou atendendo </label>
                <div class="opcaoFormulario">
                    <input type="radio" name="pessoasAtendimento" id="empregador" required>
                    <label for="empregador">Empregador</label>
                </div>
                <div class="opcaoFormulario">
                    <input type="radio" name="pessoasAtendimento" id="trabalhador" required>
                    <label for="trabalhador">Trabalhador</label>
                </div>
                <div class="opcaoFormulario">
                    <input type="radio" name="pessoasAtendimento" id="ads" required> 
                    <label for="ads">ADS</label> 
                </div>
                <div class="opcaoFormulario">
                    <input type="radio" name="pessoasAtendimento" id="setores" required>
                    <label for="setores">Setores da FGTAS</label>
                </div>
                <div class="opcaoFormulario">
                    <input type="radio" name="pessoasAtendimento" id="mercadoTrabalho" required>
                    <label for="mercadoTrabalho">Interessado em informações sobre o Mercado de trabalho</label>
                </div>
                <div class="opcaoFormulario">
                    <input type="radio" name="pessoasAtendimento" id="outro" required>
                    <label for="outro">Outro</label>
                </div>
            </div>
            <input type="submit" value="Próximo">
        </fieldset>

    </form>
    <script src="https://kit.fontawesome.com/df85906e6a.js" crossorigin="anonymous"></script>
</body>
</html>