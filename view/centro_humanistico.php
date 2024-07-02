<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vida Centro Humanístico</title>
</head>

<body>
    <form>
        <fieldset>
            <legend>Orientações sobre a vida centro humanístico</legend>
            <div>
                <input type="radio" name="centroHum" required id="atvLudica">
                <label for="atvLudica">Atividades lúdicas e pedagógicas</label>
            </div>
            <div>
                <input type="radio" name="centroHum" required id="recreacao">
                <label for="recreacao">Atividades esportivas e de recreação</label>
            </div>
            <div>
                <input type="radio" name="centroHum" required id="entidadesPrivadas">
                <label for="entidadesPrivadas">Entidades parceiras (privadas)</label>
            </div>
            <div>
                <input type="radio" name="centroHum" required id="entidadesPublicas">
                <label for="entidadesPublicas">Entidades parceiras (públicas)</label>
            </div>
            <div>
                <input type="radio" name="centroHum" required id="eventos">
                <label for="eventos">Eventos, festas e mutirões sociais</label>
            </div>
            <div>
                <input type="radio" name="centroHum" required id="outrosServicos">
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