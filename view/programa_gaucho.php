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
    <title>Programa Gaúcho do Artenato</title>
</head>

<body>
    <form>
        <fieldset>
            <legend>Informações sobre o programa gaúcho do artesato</legend>
            <div>
                <input type="radio" name="artesanato" required id="carteiraArtesao">
                <label for="carteiraArtesao">Carteira do artesão PGA e PBA</label>
            </div>
            <div>
                <input type="radio" name="artesanato" required id="feiras">
                <label for="feiras">Participação em feiras de artesanato</label>
            </div>
            <div>
                <input type="radio" name="artesanato" required id="casaArtesao">
                <label for="casaArtesao">Participação em casas do artesão</label>
            </div>
            <div>
                <input type="radio" name="artesanato" required id="portal">
                <label for="portal">Inscrição e acesso ao portal do artesanato gaúcho</label>
            </div>
            <div>
                <input type="radio" name="artesanato" required id="outrosServicos">
                <label for="outrosServicos">Outros serviços</label>
            </div>
        </fieldset>
        <div>
            <a href="./tipo_atendimento.php">Voltar</a>
            <input type="submit" value="Enviar" name="envio">
        </div>
    </form>
</body>

</html>