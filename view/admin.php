<?php
    require_once __DIR__ . "/../src/controller/SessaoController.php";
    $controle = new SessaoController();
    $controle->protecao();
    if($_SESSION['nome'] != 'admin'){
        header("location: home.php");
    }
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
    <section class="secao__usuarios centralizado" >
        <h1 class="formulario__titulo">Bem-vindo..... x</h1>
        <table class="tabela w95 centralizado mc">
            <tr class="cabecalho">
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
                    <a href="./editar_usuario.php" class="tabela__link">Editar</a>
                </td>
                <td>
                    <i class="fa-solid fa-x icone "></i>
                    <a href="../src/controller/excluir_usuario.php" class="tabela__link">Excluir</a>
                </td>
            </tr>
        </table>
    </section>
    <div class="centralizado mt1">
        <a href="./cadastrar_usuario.php" class="formulario__botao__secundario formulario__botao__padrao ">Cadastrar</a>
        <a href="./relatorio.php" type="submit" class="formulario__botao formulario__botao__padrao">Gerar_relatório
        </a>
    </div>
    <script src="https://kit.fontawesome.com/df85906e6a.js" crossorigin="anonymous"></script>
</body>
</html>