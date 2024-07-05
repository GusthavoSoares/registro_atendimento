<?php

require __DIR__ . '/../../dompdf/autoload.inc.php';
use Dompdf\Dompdf;

$dompdf = new Dompdf();

ob_start();
require_once __DIR__ . '/modelo_pdf.php';
$html = ob_get_clean();

$dompdf->loadHtml($html);
$dompdf->setPaper('A4');
$dompdf->render();
$dompdf->stream();
