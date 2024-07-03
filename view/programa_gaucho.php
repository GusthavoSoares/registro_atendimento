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
    <title>Programa Gaúcho do Artenato</title>
</head>

<body>
    <form method="post">
        <fieldset>
            <legend>Informações sobre o programa gaúcho do artesato</legend>
            <div>
                <label for="carteiraArtesao">Carteira do artesão PGA e PBA</label>
                <input value="" type="radio" name="artesanato" required id="carteiraArtesao">
            </div>
            <div>
                <label for="feiras">Participação em feiras de artesanato</label>
                <input value="" type="radio" name="artesanato" required id="feiras">
            </div>
            <div>
                <label for="casaArtesao">Participação em casas do artesão</label>
                <input value="" type="radio" name="artesanato" required id="casaArtesao">
            </div>
            <div>
                <label for="portal">Inscrição e acesso ao portal do artesanato gaúcho</label>
                <input value="" type="radio"  name="artesanato" required id="portal">
            </div>
            <div>
                <label for="outrosServicos">Outros serviços</label>
                <input value="" type="radio" name="artesanato" required id="outrosServicos">
            </div>
        </fieldset>
        <div>
            <a href="./tipo_atendimento.php">Voltar</a>
            <input type="submit" value="Enviar" name="envio">
        </div>
    </form>
    <script src="https://kit.fontawesome.com/df85906e6a.js" crossorigin="anonymous"></script>
</body>

</html>