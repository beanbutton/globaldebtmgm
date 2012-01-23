<?php
	/*require ('/opt/lampp/htdocs/globaldebtmgm/protected/extensions/fpdf17/fpdf.php');*/
        require ('/Users/yuki/htdocs/globaldebtmgm/protected/extensions/fpdf17/fpdf.php');
        require ('/Users/yuki/htdocs/globaldebtmgm/protected/extensions/fpdf17/fpdi.php');
        // Template PDF
        define(TMPL_PDF, "tmplate.pdf");
	
	$cell_width= 0;
	$cell_height= 0;
	$title= "Debtor Program Info";
	$border_style= 0;
	$newline= 1;
	$aligment= 'C';

	$pdf = new FPDF();
        $pdf ->Open();
        //Read Teamplate PDF
        $pageno = $pdf->setSourceFile(TMPL_PDF);
        // ページ番号よりIDを取得
        $tplidx = $pdf->ImportPage(1);
        // ページを追加(新規ページ)
        $pdf->AddPage();
        
        // テンプレート内容の位置、幅を調整 ※useTemplateに引数を与えなければ100%表示がデフォルト
        $pdf->useTemplate($tplidx);
        // PDF書込み ※$pdf->Text(x座標, y座標, テキスト);
        $pdf->Text(0, 10, "テスト");
        // PDFをブラウザに送信
        $pdf->Output();
        // 入力してPDFファイルを閉じる
        $pdf->closeParsers();
        
        /*$pdf -> AddPage();
	$pdf -> SetFont('Arial', 'B', 16);
	$pdf -> Cell( $cell_width, $cell_height, $title, $border_style, $newline, $aligment);
	$pdf->Ln(20);
	*/
	
	$pdf -> Output();
?>