<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'debtor-progress-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="col">
		<?php echo $form->labelEx($model,'offer_date'); ?>
		<?php echo $form->textField($model,'offer_date'); ?>
                <?php echo CHtml::image("images/calendar_btn.jpg","calendar",
                array("id"=>"c_button1","class"=>"pointer")); ?>
                <?php $this->widget('application.extensions.calendar.SCalendar',
                    array(
                    'inputField'=>'DebtorProgress_offer_date',
                    'button'=>'c_button1',
                    'ifFormat'=>'%Y-%m-%d',
                ));
                ?>

		<?php echo $form->error($model,'offer_date'); ?>
	</div>

	<div class="col">
		<?php echo $form->labelEx($model,'offer_valid_until_date'); ?>
		<?php echo $form->textField($model,'offer_valid_until_date'); ?>
    	        <?php echo CHtml::image("images/calendar_btn.jpg","calendar",
                array("id"=>"c_button2","class"=>"pointer")); ?>
                <?php $this->widget('application.extensions.calendar.SCalendar',
                    array(
                    'inputField'=>'DebtorProgress_offer_valid_until_date',
                    'button'=>'c_button2',
                    'ifFormat'=>'%Y-%m-%d',
                ));
                ?>

		<?php echo $form->error($model,'offer_valid_until_date'); ?>
	</div>

        <div class="col">
		<?php echo $form->labelEx($model,'current_settlement_offer'); ?>
		<?php echo $form->textField($model,'current_settlement_offer'); ?>
		<?php echo $form->error($model,'current_settlement_offer'); ?>
	</div>

	<div class="col">
		<?php echo $form->labelEx($model,'current_settlement_perc'); ?>
		<?php echo $form->textField($model,'current_settlement_perc'); ?>
		<?php echo $form->error($model,'current_settlement_perc'); ?>
	</div>

	<div class="col">
		<?php echo $form->labelEx($model,'type_of_debt'); ?>
		<?php echo $form->textField($model,'type_of_debt'); ?>
		<?php echo $form->error($model,'type_of_debt'); ?>
	</div>

	<div class="col">
		<?php echo $form->labelEx($model,'total_debt'); ?>
		<?php echo $form->textField($model,'total_debt'); ?>
		<?php echo $form->error($model,'total_debt'); ?>
	</div>

	<div class="col">
		<?php echo $form->labelEx($model,'days_behind'); ?>
		<?php echo $form->textField($model,'days_behind'); ?>
		<?php echo $form->error($model,'days_behind'); ?>
	</div>

	<div class="col">
		<?php echo $form->labelEx($model,'settlement_date'); ?>
		<?php echo $form->textField($model,'settlement_date'); ?>
		<?php echo $form->error($model,'settlement_date'); ?>
	</div>

	<div class="col">
		<?php echo $form->labelEx($model,'settlement_amount'); ?>
		<?php echo $form->textField($model,'settlement_amount'); ?>
		<?php echo $form->error($model,'settlement_amount'); ?>
	</div>

	<div class="col">
		<?php echo $form->labelEx($model,'savings'); ?>
		<?php echo $form->textField($model,'savings'); ?>
		<?php echo $form->error($model,'savings'); ?>
	</div>

        <div class="col">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>
	
	<div class="col buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
            <a href="report.php">report</a>
               	<?php echo CHtml::submitButton($model->isNewRecord ? 'Add Report' : 'Save'); ?>
	</div>
        
        
        <?php /*
        //Prepare the pdf exporter
        $html2pdfPath = Yii::getPathOfAlias('ext.tcpdf');
        spl_autoload_unregister(array('YiiBase','autoload'));
        require_once("$html2pdfPath/tcpdf.php");
        $pdf = new TCPDF('L', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
        spl_autoload_register(array('YiiBase','autoload'));

        // set document information
        $pdf->SetCreator(PDF_CREATOR);  

        $pdf->SetTitle("title");                
        $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, "title", "subtitle");
        $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
        $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
        $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
        $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
        $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
        $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
        $pdf->SetFont('helvetica', '', 8);
        $pdf->SetTextColor(80,80,80);
        $pdf->AddPage();

        //Write the html from a Yii view
        $html = Yii::app()->controller->renderPartial('//viewPath/_export', true,true);

        //Convert the Html to a pdf document
        $pdf->writeHTML($html, true, false, true, false, '');

        // reset pointer to the last page
        $pdf->lastPage();

        //Close and output PDF document
        $pdf->Output('filename.pdf', 'I');

      */ ?> 
        
        
        
        <?php/*
$pdf = Yii::createComponent('application.extensions.tcpdf.ETcPdf', 
                            'P', 'cm', 'A4', true, 'UTF-8');
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor("Nicola Asuni");
$pdf->SetTitle("TCPDF Example 002");
$pdf->SetSubject("TCPDF Tutorial");
$pdf->SetKeywords("TCPDF, PDF, example, test, guide");
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont("times", "BI", 20);
$pdf->Cell(0,10,"Example 002",1,1,'C');
$pdf->Output("example_002.pdf", "I");
*/?>
        
  
<?php $this->endWidget(); ?>


</div><!-- form -->

