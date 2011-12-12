<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'program-info-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

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
		<?php echo $form->labelEx($model,'maintenance_fee_automatic'); ?>
		<?php echo $form->textField($model,'maintenance_fee_automatic'); ?>
		<?php echo $form->error($model,'maintenance_fee_automatic'); ?>
	</div>
	
	<div class="col">
		<?php echo $form->labelEx($model,'maintenance_fee_manual'); ?>
		<?php echo $form->textField($model,'maintenance_fee_manual'); ?>
		<?php echo $form->error($model,'maintenance_fee_manual'); ?>
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
                        'inputField'=>'ProgramInfo_monthly_payment_due_date',
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
                        'inputField'=>'ProgramInfo_enrollment_date',
                        'button'=>'c_button2',
                        'ifFormat'=>'%Y-%m-%d',
                    ));
                  ?>
		<?php echo $form->error($model,'enrollment_date'); ?>
	</div>

	<div class="col">
		<?php echo $form->labelEx($model,'admin_fee_automatic'); ?>
		<?php echo $form->textField($model,'admin_fee_automatic'); ?>
		<?php echo $form->error($model,'admin_fee_automatic'); ?>
	</div>

	<div class="col">
		<?php echo $form->labelEx($model,'admin_fee_perc_automatic'); ?>
		<?php echo $form->textField($model,'admin_fee_perc_automatic'); ?>
		<?php echo $form->error($model,'admin_fee_perc_automatic'); ?>
	</div>

	<div class="col">
		<?php echo $form->labelEx($model,'first_monthly_payment_date'); ?>
		<?php echo $form->textField($model,'first_monthly_payment_date'); ?>
            	<?php echo CHtml::image("images/calendar_btn.jpg","calendar",
                array("id"=>"c_button3","class"=>"pointer")); ?>
                 <?php $this->widget('application.extensions.calendar.SCalendar',
                        array(
                        'inputField'=>'ProgramInfo_first_monthly_payment_date',
                        'button'=>'c_button3',
                        'ifFormat'=>'%Y-%m-%d',
                  ));
                  ?>
		<?php echo $form->error($model,'first_monthly_payment_date'); ?>
	</div>

	<div class="col">
		<?php echo $form->labelEx($model,'admin_fee_manual'); ?>
		<?php echo $form->textField($model,'admin_fee_manual'); ?>
		<?php echo $form->error($model,'admin_fee_manual'); ?>
	</div>

	<div class="col">
		<?php echo $form->labelEx($model,'admin_fee_perc_manual'); ?>
		<?php echo $form->textField($model,'admin_fee_perc_manual'); ?>
		<?php echo $form->error($model,'admin_fee_perc_manual'); ?>
	</div>

	<div class="col">
		<?php echo $form->labelEx($model,'next_payment_due_date'); ?>
		<?php echo $form->textField($model,'next_payment_due_date'); ?>
            	<?php echo CHtml::image("images/calendar_btn.jpg","calendar",
                array("id"=>"c_button4","class"=>"pointer")); ?>
                    <?php $this->widget('application.extensions.calendar.SCalendar',
                        array(
                        'inputField'=>'ProgramInfo_next_payment_due_date',
                        'button'=>'c_button4',
                        'ifFormat'=>'%Y-%m-%d',
                    ));
                  ?>
		<?php echo $form->error($model,'next_payment_due_date'); ?>
	</div>

	<div class="col">
		<?php echo $form->labelEx($model,'service_fee_automatic'); ?>
		<?php echo $form->textField($model,'service_fee_automatic'); ?>
		<?php echo $form->error($model,'service_fee_automatic'); ?>
	</div>

	<div class="col">
		<?php echo $form->labelEx($model,'service_fee_perc_automatic'); ?>
		<?php echo $form->textField($model,'service_fee_perc_automatic'); ?>
		<?php echo $form->error($model,'service_fee_perc_automatic'); ?>
	</div>

	<div class="col">
		<?php echo $form->labelEx($model,'contract_due_date'); ?>
		<?php echo $form->textField($model,'contract_due_date'); ?>
            	<?php echo CHtml::image("images/calendar_btn.jpg","calendar",
                array("id"=>"c_button5","class"=>"pointer")); ?>
                    <?php $this->widget('application.extensions.calendar.SCalendar',
                        array(
                        'inputField'=>'ProgramInfo_contract_due_date',
                        'button'=>'c_button5',
                        'ifFormat'=>'%Y-%m-%d',
                    ));
                  ?>
		<?php echo $form->error($model,'contract_due_date'); ?>
	</div>

	<div class="col">
		<?php echo $form->labelEx($model,'service_fee_manual'); ?>
		<?php echo $form->textField($model,'service_fee_manual'); ?>
		<?php echo $form->error($model,'service_fee_manual'); ?>
	</div>

	<div class="col">
		<?php echo $form->labelEx($model,'service_fee_perc_manual'); ?>
		<?php echo $form->textField($model,'service_fee_perc_manual'); ?>
		<?php echo $form->error($model,'service_fee_perc_manual'); ?>
	</div>
	
	<div class="col">
		<?php echo $form->labelEx($model,'nsf_amount'); ?>
		<?php echo $form->textField($model,'nsf_amount'); ?>
		<?php echo $form->error($model,'nsf_amount'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->