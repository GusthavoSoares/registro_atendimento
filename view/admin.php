<?php
    // require_once __DIR__ . "/../src/controller/SessaoController.php";
    // $controle = new SessaoController();
    // $controle->protecao();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./estilos/ds.css">
    <title>Administrador</title>
</head>

<body>
    <h1>Bem-vindo..... x</h1>
    <section class="secao__usuarios">
        <table>
            <tr>
                <th>Id</th>
                <th>Email</th>
                <th>Nome</th>
                <th>Cargo</th>
                <th>Ativo</th>
            </tr>
            <tr>
                <td>1</td>
                <td>gusthavorsoares@gmail.com</td>
                <td>Gusthavo</td>
                <td>glsoares</td>
                <td>admin</td>
                <th>Ativado</th>
                <td>
                    <i class="fa-solid fa-pen icone"></i>
                    <a href="./editar_usuario.php">Editar</a>
                </td>
                <td>
                    <i class="fa-solid fa-x icone"></i>
                    <a href="../src/controller/excluir_usuario.php">Excluir</a>
                </td>
            </tr>
        </table>
    </section>
    <a href="./cadastrar_usuario.php">Cadastrar</a>
    <script src="https://kit.fontawesome.com/df85906e6a.js" crossorigin="anonymous"></script>
</body>
</html>