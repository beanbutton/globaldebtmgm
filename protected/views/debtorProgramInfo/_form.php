<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'debtor-program-info-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

    	<div class="col">
		<?php echo $form->labelEx($model,'type_of_debt'); ?>
		<?php echo $form->textField($model,'type_of_debt'); ?>
		<?php echo $form->error($model,'type_of_debt'); ?>
	</div>

        <div class="col">
		<?php echo $form->labelEx($model,'program_type'); ?>
		<?php echo $form->dropDownList($model, 'program_type', 
                        array('1' => '1 month', '2' => '2 months', 
                              '3' => '3 months', '4' => '4 months',
                              '5' => '5 months', '6' => '6 months',
                              '7' => '7 months', '8' => '8 months',
                              '9' => '9 months', '10' => '10 months',
                              '11' => '11 months', '12' => '12 months',
                              '13' => '13 months', '14' => '14 months',
                              '15' => '15 months', '16' => '16 months',
                              '17' => '17 months', '18' => '18 months', 
                              '19' => '19 months', '20' => '20 months',
                              '21' => '21 months', '22' => '22 months',
                              '23' => '23 months', '24' => '24 months',
                              '25' => '25 months', '26' => '26 months',
                              '27' => '27 months', '28' => '28 months',
                              '29' => '29 months', '30' => '30 months',
                              '31' => '31 months', '32' => '32 months',
                              '33' => '33 months', '34' => '34 months', 
                              '35' => '35 months', '36' => '36 months',
                              '37' => '37 months', '38' => '38 months',
                              '39' => '39 months', '40' => '40 months',
                              '41' => '41 months', '42' => '42 months',
                              )); ?>
		<?php echo $form->error($model,'program_type'); ?>
	</div>

        <div class="col">
		<?php echo $form->labelEx($model,'total_debt'); ?>
		<?php echo $form->textField($model,'total_debt'); ?>
		<?php echo $form->error($model,'total_debt'); ?>
	</div>

	<div class="col">
		<?php echo $form->labelEx($model,'monthly_payment'); ?>
		<?php echo $form->textField($model,'monthly_payment'); ?>
		<?php echo $form->error($model,'monthly_payment'); ?>
	</div>

	<div class="col">
		<?php echo $form->labelEx($model,'original_debt'); ?>
		<?php echo $form->textField($model,'original_debt'); ?>
		<?php echo $form->error($model,'original_debt'); ?>
	</div>

	<div class="col">
		<?php echo $form->labelEx($model,'monthly_income'); ?>
		<?php echo $form->textField($model,'monthly_income'); ?>
		<?php echo $form->error($model,'monthly_income'); ?>
	</div>

	<div class="col">
		<?php echo $form->labelEx($model,'saf_monthly_payment'); ?>
		<?php echo $form->textField($model,'saf_monthly_payment'); ?>
		<?php echo $form->error($model,'saf_monthly_payment'); ?>
	</div>

        <div class="col">
		<?php echo $form->labelEx($model,'monthly_payment_due_date'); ?>
		<?php echo $form->textField($model,'monthly_payment_due_date'); ?>
                <?php echo CHtml::image("images/calendar_btn.jpg","calendar",
                array("id"=>"c_button1","class"=>"pointer")); ?>
                <?php $this->widget('application.extensions.calendar.SCalendar',
                    array(
                    'inputField'=>'DebtorProgramInfo_monthly_payment_due_date',
                    'button'=>'c_button1',
                    'ifFormat'=>'%Y-%m-%d',
                ));
                ?>

		<?php echo $form->error($model,'monthly_payment_due_date'); ?>
	</div>

	<div class="col">
		<?php echo $form->labelEx($model,'enrollment_date'); ?>
		<?php echo $form->textField($model,'enrollment_date'); ?>
                <?php echo CHtml::image("images/calendar_btn.jpg","calendar",
                array("id"=>"c_button2","class"=>"pointer")); ?>
                <?php $this->widget('application.extensions.calendar.SCalendar',
                    array(
                    'inputField'=>'DebtorProgramInfo_enrollment_date',
                    'button'=>'c_button2',
                    'ifFormat'=>'%Y-%m-%d',
                ));
                ?>

		<?php echo $form->error($model,'enrollment_date'); ?>
	</div>

	<div class="col">
		<?php echo $form->labelEx($model,'first_monthly_payment_date'); ?>
		<?php echo $form->textField($model,'first_monthly_payment_date'); ?>
                <?php echo CHtml::image("images/calendar_btn.jpg","calendar",
                array("id"=>"c_button3","class"=>"pointer")); ?>
                <?php $this->widget('application.extensions.calendar.SCalendar',
                    array(
                    'inputField'=>'DebtorProgramInfo_first_monthly_payment_date',
                    'button'=>'c_button3',
                    'ifFormat'=>'%Y-%m-%d',
                ));
                ?>

		<?php echo $form->error($model,'first_monthly_payment_date'); ?>
	</div>

	<div class="col">
		<?php echo $form->labelEx($model,'next_payment_due_date'); ?>
		<?php echo $form->textField($model,'next_payment_due_date'); ?>
                <?php echo CHtml::image("images/calendar_btn.jpg","calendar",
                array("id"=>"c_button4","class"=>"pointer")); ?>
                <?php $this->widget('application.extensions.calendar.SCalendar',
                    array(
                    'inputField'=>'DebtorProgramInfo_next_payment_due_date',
                    'button'=>'c_button4',
                    'ifFormat'=>'%Y-%m-%d',
                ));
                ?>
		<?php echo $form->error($model,'next_payment_due_date'); ?>
	</div>

	<div class="col">
		<?php echo $form->labelEx($model,'contract_due_date'); ?>
		<?php echo $form->textField($model,'contract_due_date'); ?>
                <?php echo CHtml::image("images/calendar_btn.jpg","calendar",
                array("id"=>"c_button5","class"=>"pointer")); ?>
                <?php $this->widget('application.extensions.calendar.SCalendar',
                    array(
                    'inputField'=>'DebtorProgramInfo_contract_due_date',
                    'button'=>'c_button5',
                    'ifFormat'=>'%Y-%m-%d',
                ));
                ?>

		<?php echo $form->error($model,'contract_due_date'); ?>
	</div>
        
         <div class="col">
		<?php echo $form->labelEx($model,'nsf_amount'); ?>
		<?php echo $form->textField($model,'nsf_amount'); ?>
		<?php echo $form->error($model,'nsf_amount'); ?>
	</div>
           	<div class="col">
		<?php echo $form->labelEx($model,'savings_amount'); ?>
		<?php echo $form->textField($model,'savings_amount'); ?>
		<?php echo $form->error($model,'savings_amount'); ?>
	</div>

	<div class="col">
		<?php echo $form->labelEx($model,'savings_percentage'); ?>
		<?php echo $form->textField($model,'savings_percentage'); ?>
		<?php echo $form->error($model,'savings_percentage'); ?>
	</div>
    
       <div class="col">
		<?php echo $form->labelEx($model,'maintenance_fee_manual'); ?>
		<?php echo $form->textField($model,'maintenance_fee_manual'); ?>
		<?php echo $form->error($model,'maintenance_fee_manual'); ?>
	</div>

	<div class="col">
		<?php echo $form->labelEx($model,'maintenance_fee_automatic'); ?>
		<?php echo $form->textField($model,'maintenance_fee_automatic'); ?>
		<?php echo $form->error($model,'maintenance_fee_automatic'); ?>
	</div>

	<div class="col">
		<?php echo $form->labelEx($model,'admin_fee_automatic'); ?>
		<?php echo $form->textField($model,'admin_fee_automatic'); ?>
		<?php echo $form->error($model,'admin_fee_automatic'); ?>
	</div>

	<div class="col">
		<?php echo $form->labelEx($model,'admin_fee_percentage_automatic'); ?>
		<?php echo $form->textField($model,'admin_fee_percentage_automatic'); ?>
		<?php echo $form->error($model,'admin_fee_percentage_automatic'); ?>
	</div>
        
        <div class="col">
		<?php echo $form->labelEx($model,'service_fee_automatic'); ?>
		<?php echo $form->textField($model,'service_fee_automatic'); ?>
		<?php echo $form->error($model,'service_fee_automatic'); ?>
	</div>

	<div class="col">
		<?php echo $form->labelEx($model,'service_fee_percentage_automatic'); ?>
		<?php echo $form->textField($model,'service_fee_percentage_automatic'); ?>
		<?php echo $form->error($model,'service_fee_percentage_automatic'); ?>
	</div>
    
        	<div class="col">
		<?php echo $form->labelEx($model,'admin_fee_manual'); ?>
		<?php echo $form->textField($model,'admin_fee_manual'); ?>
		<?php echo $form->error($model,'admin_fee_manual'); ?>
	</div>

	<div class="col">
		<?php echo $form->labelEx($model,'admin_fee_percentage_manual'); ?>
		<?php echo $form->textField($model,'admin_fee_percentage_manual'); ?>
		<?php echo $form->error($model,'admin_fee_percentage_manual'); ?>
	</div>

	
	<div class="col">
		<?php echo $form->labelEx($model,'service_fee_manual'); ?>
		<?php echo $form->textField($model,'service_fee_manual'); ?>
		<?php echo $form->error($model,'service_fee_manual'); ?>
	</div>

	<div class="col">
		<?php echo $form->labelEx($model,'service_fee_percentage_manual'); ?>
		<?php echo $form->textField($model,'service_fee_percentage_manual'); ?>
		<?php echo $form->error($model,'service_fee_percentage_manual'); ?>
	</div>
    
    	<div class="col buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->