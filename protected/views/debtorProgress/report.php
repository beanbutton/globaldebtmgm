<?php
	/*require ('/opt/lampp/htdocs/globaldebtmgm/protected/extensions/fpdf17/fpdf.php');*/
        require ('/Users/yuki/htdocs/globaldebtmgm/protected/extensions/fpdf17/fpdf.php');
        require ('/Users/yuki/htdocs/globaldebtmgm/protected/extensions/fpdf17/fpdi.php');
        // Template PDF
        //define(TMPL_PDF, "/Users/yuki/htdocs/globaldebtmgm/protected/extensions/fpdf17/template.pdf");
	

// initiate FPDI
$pdf = new FPDI();
// add a page
$pdf->AddPage();
// set the sourcefile
$pdf->setSourceFile('/Users/yuki/htdocs/globaldebtmgm/protected/extensions/fpdf17/template.pdf');
// import page 1
$tplIdx = $pdf->importPage(1);
// use the imported page and place it at point 10,10 with a width of 100 mm
$pdf->useTemplate($tplIdx, 0, 0, 200);

// now write some text above the imported page
$pdf->SetFont('Arial','','10pt');
$pdf->SetTextColor(255,0,0);
$pdf->SetXY(40, 25);
$pdf->Write(25, "This is just a simple text");

$pdf->Output('newpdf.pdf', 'D');

?>