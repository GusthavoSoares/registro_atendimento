<?php

require_once __DIR__ . "/../../model/Conexao.php";
require_once __DIR__ . '/../../model/RelatorioAtendimento.php';
require_once __DIR__ . '/../../repositorio/AtendimentoRepositorio.php';

$nomeArquivo = "relatorio.csv";
header('Content-Type: application/csv');
header("Content-Disposition: attachment; filename=$nomeArquivo");

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
$dados = $repositorio->buscarTodos($forma, $publico, $tipoAtt, $dataFormIni, $dataFormFim);

$cabecalho = ['Tipos Solicitante', 
    'Identificador Único', 
    'Forma de Atendimento',
    'Nome',
    'E-Mail', 
    'Telefone', 
    'Tipo Atendimento', 
    'Descrição', 
    'Ativo', 
    'Informações'
];

$saida = fopen('php://output', 'w');
fputcsv($saida, $cabecalho);
foreach ($dados as $linha) {
    fputcsv($saida, (array) $linha);
}
fclose($saida);