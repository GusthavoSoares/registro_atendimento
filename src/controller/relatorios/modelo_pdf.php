<?php
    require_once __DIR__ . '/../../model/Conexao.php';
    require_once __DIR__ . '/../../model/RelatorioAtendimento.php';
    require_once __DIR__ . '/../../repositorio/AtendimentoRepositorio.php';

    session_start();
    $forma = $_SESSION['form'];
    $publico = $_SESSION['public'];
    $tipoAtt = $_SESSION['att'];

    $dataFormIni = '';
    $dataFormFim = '';
    if($_SESSION['dateInicio'] != ''){
        $dataFormIni = date('Y-m-d H:i:s', strtotime($_SESSION['dateInicio']));
    }
    if($_SESSION['dateFim']){
        $dataFormFim = date('Y-m-d H:i:s', strtotime($_SESSION['dateFim']));
    }    

    $repositorio = new AtendimentoRepositorio();
    $conteudo = $repositorio->buscarTodos($forma, $publico, $tipoAtt, $dataFormIni, $dataFormFim);

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório Atendimentos</title>
</head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
    margin: 20px auto;
}

th {
    background-color: #eee;
    text-align: center;
    padding: 10px;
    border: 1px solid #ccc;
}

td {
    border: 1px solid #ccc;
    padding: 8px; 
}


tr:nth-child(even) {
    background-color: #f2f2f2; 
}
</style>

<body>
    <table>
        <thead>
            <tr>
                <th>Tipo Solicitante</th>
                <th>Identificador Unico</th>
                <th>Forma de Atendimento</th>
                <th>Nome</th>
                <th>E-Mail</th>
                <th>Telefone</th>
                <th>Tipo Atendimento</th>
                <th>Descrição</th>
                <th>Ativo</th>
                <th>Informações</th>
                <th>Data de Registro</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($conteudo as $linha): ?>
            <tr>
                <td><?= $linha->getTipoSolicitante(); ?></td>
                <td><?= $linha->getIdentificadorUnico(); ?></td>
                <td><?= $linha->getFormaAtendimento(); ?></td>
                <td><?= $linha->getNome(); ?></td>
                <td><?= $linha->getEmail(); ?></td>
                <td><?= $linha->getTelefone(); ?></td>
                <td><?= $linha->getTipoInformacao(); ?></td>
                <td><?= $linha->getDescricao(); ?></td>
                <td><?= $linha->getAtivo(); ?></td>
                <td><?= $linha->getInformacao(); ?></td>
                <td><?= $linha->getData(); ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
