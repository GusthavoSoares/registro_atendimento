<?php

if( isset($_REQUEST['exp']) ){

    session_start();
    $_SESSION['form'] = $_REQUEST['forma'];
    $_SESSION['public'] = $_REQUEST['publico'];
    $_SESSION['att'] = $_REQUEST['tipoAtt'];

    if($_REQUEST['exp'] === 'pdf'){
        header("Location: gerapdf.php");

    }elseif($_REQUEST['exp'] === 'csv'){
        header("Location: geracsv.php");

    } 
}else {
    echo "<script>alert('ERRO! Selecione o formato do relatório!');</script>";
    header("Location: ../../../view/relatorio.php");
}