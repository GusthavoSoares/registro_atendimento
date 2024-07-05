<?php

require_once __DIR__ . "/../../model/Conexao.php";
require_once __DIR__ . "/../../model/Usuario.php";
require_once __DIR__ . "/../../repositorio/UsuarioRepositorio.php";

$nomeArquivo = "relatorio.csv";
header('Content-Type: application/csv');
header("Content-Disposition: attachment; filename=$nomeArquivo");
$repositorio = new UsuarioRepositorio();
$dados = $repositorio->buscar();

$saida = fopen('php://output', 'w');
foreach ($dados as $linha) {
    fputcsv($saida, (array) $linha);
}
fclose($saida);