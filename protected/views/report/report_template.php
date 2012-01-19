<?php
	require ('/opt/lampp/htdocs/globaldebtmgm/protected/extensions/fpdf17/fpdf.php');
	
	$cell_width= 0;
	$cell_height= 0;
	$title= "Debtor Program Info";
	$border_style= 0;
	$newline= 1;
	$aligment= 'C';

	$pdf = new FPDF();
	$pdf -> AddPage();
	$pdf -> SetFont('Arial', 'B', 16);
	$pdf -> Cell( $cell_width, $cell_height, $title, $border_style, $newline, $aligment);
	$pdf->Ln(20);
	
	
	$pdf -> Output();
?>