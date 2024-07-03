<?php
    session_start();
    if(!array_key_exists('logado', $_SESSION) || $_SESSION['logado'] == false){
        header("location: login.php");
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./estilos/ds.css">
    <title>Carteira de Trabalho</title>
</head>

<body>
    <form method="post">
        <fieldset>
            <legend>Informações sobre carteira de trabalho, seguro-desemprego, vagas</legend>
            <div>
                <input type="radio" name="trabalho" value="" required id="carteiraTrab">
                <label for="carteiraTrab">Carteira de trabalho física e digital</label>
            </div>
            <div>
                <input type="radio" name="trabalho" value="" required id="seguroDesemprego">
                <label for="seguroDesemprego">Direito e benefício de seguro-desemprego</label>
            </div>
            <div>
                <input type="radio" name="trabalho" value="" required id="vagas">
                <label for="vagas">Vagas - cadastramento, registro de retorno, administração</label>
            </div>
            <div>
                <input type="radio" name="trabalho" value="" required id="outrosServicos">
                <label for="outrosServicos">Outros serviços</label>
            </div>
        </fieldset>
        <div>
            <a href="./tipo_atendimento.php">Voltar</a>
            <input type="submit" value="Enviar">
        </div>
    </form>
    <script src="https://kit.fontawesome.com/df85906e6a.js" crossorigin="anonymous"></script>
</body>

</html>