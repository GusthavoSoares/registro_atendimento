<?php
    require_once __DIR__ . "/../src/controller/SessaoController.php";
    $controle = new SessaoController();
    $controle->protecao();
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
        <section class="centralizado mv0-5">
            <h1 class="formulario__titulo">Solicitante</h1>
            <table class="tabela w95 centralizado mc">
                <tbody class="centralizado" >
                <tr class="cabecalho">
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Tipo da Pessoa</th>
                    <th>Tipo do Solicitante</th>
                    <th>Forma de Atendimento</th>
                    <th>Tipo de Informação</th>
                    <th>Data do registro</th>
                    <th>Ativo</th>
                </tr>
                    <td>1</td>
                    <td>Jonas</td>
                    <td>Física</td>
                    <td>Empregador</td>
                    <td>Presencial</td>
                    <td>Não possui</td>
                    <td>01/01/2024 14:00:20</td>
                    <td>Ativado</td>
                    <td>
                        <i class="fa-solid fa-pen icone"></i>
                        <a href="./editar_solicitante.php" class="tabela__link">Editar</a>
                    </td>
                    <td>
                        <i class="fa-solid fa-x icone"></i>
                        <a href="../src/controller/excluir_solicitante.php" class="tabela__link">Excluir</a>
                    </td>
                </tbody>
            </table>
        </section>
        <section class="centralizado mt1">
            <h1 class="formulario__titulo">Atendimento</h1>
            <table class="tabela w95 centralizado mc">
                <tr class="cabecalho">
                    <th>Id</th>
                    <th>Id_Solicitante</th>
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
                        <i class="fa-solid fa-pen icone"></i>
                        <a href="./editar_atendimento.php" class="tabela__link">Editar</a>
                    </td>
                    <td>
                        <i class="fa-solid fa-x icone"></i>
                        <a href="../src/controller/excluir_atendimento.php" class="tabela__link">Excluir</a>
                    </td>
                </tr>
            </table>
        </section>
        <div class="centralizado mt1">
            <a href="./home.php" class="formulario__botao__padrao formulario__botao__terceario">Voltar</a>
            <a href="./relatorio.php" class="formulario__botao__padrao formulario__botao">Gerar Relatório</a>
        </div>
        <script src="https://kit.fontawesome.com/df85906e6a.js" crossorigin="anonymous"></script>
    </body>
</body>

</html>