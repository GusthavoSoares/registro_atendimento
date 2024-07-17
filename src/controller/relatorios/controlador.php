<?php

if( isset($_REQUEST['exp']) ){

    session_start();
    $_SESSION['form'] = $_REQUEST['formaAtendimento'];
    $_SESSION['public'] = $_REQUEST['solicitante'];
    $_SESSION['att'] = $_REQUEST['tipoAtendimento'];
    $_SESSION['dateInicio'] = $_REQUEST['dataInicial'];
    $_SESSION['dateFim'] = $_REQUEST['dataFim'];

    if($_REQUEST['exp'] === 'pdf'){
        header("Location: gerapdf.php");

    }elseif($_REQUEST['exp'] === 'csv'){
        header("Location: geracsv.php");

    }
}else {
    header("Location: ../../../view/relatorio.php?escolha=0");
}
