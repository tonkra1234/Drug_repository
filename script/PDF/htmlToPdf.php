<?php

require __DIR__.'../../../vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;

$html2pdf = new Html2Pdf();
ob_start();
include './data.php';
$html_code = ob_get_clean();
$html2pdf->writeHTML($html_code);
$html2pdf->output();

?>