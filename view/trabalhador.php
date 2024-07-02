<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabalhador</title>
</head>

<body>
    <form method="post">
        <fieldset>
            <legend>Identificação do trabalhador</legend>
            <div>
                <label for="nomeTrabalhador">Nome</label>
                <input type="text" required minlength="3" id="nomeTrabalhador" name="nomeTrabalhador">
            </div>
            <div>
                <label for="cpf">CPF</label>
                <input type="text" required minlength="3" id="cpf" name="cpfTrabalhador">
            </div>
            <div>
                <label for="telefoneContato">Telefone de contato</label>
                <input type="text" required minlength="3" id="telefoneContato" name="telefoneContatoTrabalhador">
            </div>
        </fieldset>
        <div>
            <a href="./index.php">Voltar</a>
            <input type="submit" value="Próximo">
        </div>
    </form>
</body>

</html>