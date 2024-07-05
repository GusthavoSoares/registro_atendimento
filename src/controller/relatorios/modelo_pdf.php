<?php
    require_once __DIR__ . '/../../model/Conexao.php';
    require_once __DIR__ . '/../../model/Usuario.php';
    require_once __DIR__ . '/../../repositorio/UsuarioRepositorio.php';

    $user = new UsuarioRepositorio();
    $usuarios = $user->buscar();
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
                <th>Nome</th>
                <th>CPF</th>
                <th>Email</th>
                <th>Cargo</th>
                <th>ativo</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($usuarios as $usuario): ?>
            <tr>
                <td><?= $usuario->getNome() ?></td>
                <td>123.456.789-00</td>
                <td><?= $usuario->getEmail() ?></td>
                <td><?= $usuario->getCargo() ?></td>
                <td><?= $usuario->getAtivo() ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
