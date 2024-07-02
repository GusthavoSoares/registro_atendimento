<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carteira de Trabalho</title>
</head>

<body>
    <form>
        <fieldset>
            <legend>Informações sobre carteira de trabalho, seguro-desemprego, vagas</legend>
            <div>
                <input type="radio" name="trabalho" required id="carteiraTrab">
                <label for="carteiraTrab">Carteira de trabalho física e digital</label>
            </div>
            <div>
                <input type="radio" name="trabalho" required id="seguroDesemprego">
                <label for="seguroDesemprego">Direito e benefício de seguro-desemprego</label>
            </div>
            <div>
                <input type="radio" name="trabalho" required id="vagas">
                <label for="vagas">Vagas - cadastramento, registro de retorno, administração</label>
            </div>
            <div>
                <input type="radio" name="trabalho" required id="outrosServicos">
                <label for="outrosServicos">Outros serviços</label>
            </div>
        </fieldset>
        <div>
            <a href="./tipo_atendimento.php">Voltar</a>
            <input type="submit" value="Enviar">
        </div>
    </form>
</body>

</html>