<?php

// referencia o namespace Dompdf 
require 'dompdf/autoload.inc.php';
use Dompdf\Dompdf ;

// instanciar e usar a classe dompdf 
$dompdf = new Dompdf();

ob_start();
require_once 'criaPDF.php';
$html = ob_get_clean();

$dompdf->loadHtml($html);

// (Opcional) Configure o tamanho e a orientação do papel 
$dompdf->setPaper('A4');

// Renderizar o HTML como PDF

$dompdf->render();

// Envie o PDF gerado para o navegador 
$dompdf->stream();