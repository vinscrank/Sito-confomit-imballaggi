
<?php
require_once('fpdf/fpdf.php');
require_once('fpdf/fpdi.php');

$pdf = new FPDI();

$pageCount = $pdf->setSourceFile('volantino.pdf');
$tplIdx = $pdf->importPage(1, '/MediaBox');

$pdf->addPage();
$pdf->useTemplate($tplIdx, 20, 20, 180);

$pdf->Output();