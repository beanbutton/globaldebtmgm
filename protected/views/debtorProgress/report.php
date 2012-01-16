<?php
	require (dirname(__FILE__) . '/../extensions/fpdf17/fpdf.php');

	$pdf = new FPDF();
	$pdf -> AddPage();
	$pdf -> SetFont('Arial', 'B', 16);
	$pdf -> Cell(40, 10, 'Hello World!');
	$pdf -> Output( 'newpdf.pdf', 'D');
?>

HELLO