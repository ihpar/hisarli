<?php
require 'vendor/autoload.php';

use Dompdf\Dompdf;

$dompdf = new Dompdf();
$options = $dompdf->getOptions();
$options->setDefaultFont('Times New Roman');
$dompdf->setOptions($options);

$dompdf->loadHtml('Hello World');

$dompdf->setPaper('A4');
$dompdf->render();
// $dompdf->stream();
$output = $dompdf->output();
$dir_path = "uploads/";
$file_name = "AA_Test.pdf";
file_put_contents($dir_path . $file_name, $output);
