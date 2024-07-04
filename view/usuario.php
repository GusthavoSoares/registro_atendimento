<?php
    // session_start();
    // if(!array_key_exists('logado', $_SESSION) || $_SESSION['logado'] == false){
    //     header("location: login.php");
    // }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./estilos/ds.css">
    <title>Usuário</title>
</head>
<body>
<body>
    <section>
        <h1>Solicitante</h1>
        <table>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Tipo da Pessoa</th>
                <th>Tipo do Solicitante</th>
                <th>Forma de Atendimento</th>
                <th>Tipo de Informação</th>
                <th>Data do registro</th>
                <th>Ativo</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Jonas</td>
                <td>Física</td>
                <td>Empregador</td>
                <td>Presencial</td>
                <td>Não possui</td>
                <td>01/01/2024 14:00:20</td>
                <td>Ativado</td>
                <td>
                    <i class="fa-solid fa-pen"></i>
                    <a href="./editar_solicitante.php">Editar</a>
                </td>
                <td>
                    <i class="fa-solid fa-x"></i>
                    <a href="../src/controller/excluir_solicitante.php">Excluir</a>
                </td>
            </tr>
        </table>
    </section>
    <section>
        <h1>Atendimento</h1>
        <table>
            <tr>
                <th>Id</th>
                <th>Id do Solicitante</th>
                <th>Tipo</th>
                <th>Informação</th>
                <th>Data Registro</th>
            </tr>
            <tr>
                <td>1</td>
                <td>1</td>
                <td>Carteira de Trabalho, SD, Vagas</td>
                <td>Carteira de trabalho física e digital</td>
                <td>01/01/2024 14:00:23 </td>
                <td>
                    <i class="fa-solid fa-pen"></i>
                    <a href="./editar_atendimento.php">Editar</a>
                </td>
                <td>
                    <i class="fa-solid fa-x"></i>
                    <a href="../src/controller/excluir_atendimento.php">Excluir</a>
                </td>
            </tr>
        </table>
    </section>
        <script src="https://kit.fontawesome.com/df85906e6a.js" crossorigin="anonymous"></script>
    </body>
</body>
</html>