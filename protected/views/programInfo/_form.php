<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'program-info-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'monthly_payment'); ?>
		<?php echo $form->textField($model,'monthly_payment'); ?>
		<?php echo $form->error($model,'monthly_payment'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'total_debt'); ?>
		<?php echo $form->textField($model,'total_debt'); ?>
		<?php echo $form->error($model,'total_debt'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'original_debt'); ?>
		<?php echo $form->textField($model,'original_debt'); ?>
		<?php echo $form->error($model,'original_debt'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'monthly_income'); ?>
		<?php echo $form->textField($model,'monthly_income'); ?>
		<?php echo $form->error($model,'monthly_income'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'saf_monthly_payment'); ?>
		<?php echo $form->textField($model,'saf_monthly_payment'); ?>
		<?php echo $form->error($model,'saf_monthly_payment'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nsf_amount'); ?>
		<?php echo $form->textField($model,'nsf_amount'); ?>
		<?php echo $form->error($model,'nsf_amount'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'monthly_payment_due_date'); ?>
		<?php echo $form->textField($model,'monthly_payment_due_date'); ?>
		<?php echo $form->error($model,'monthly_payment_due_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'enrollment_date'); ?>
		<?php echo $form->textField($model,'enrollment_date'); ?>
		<?php echo $form->error($model,'enrollment_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'first_monthly_payment_date'); ?>
		<?php echo $form->textField($model,'first_monthly_payment_date'); ?>
		<?php echo $form->error($model,'first_monthly_payment_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'next_payment_due_date'); ?>
		<?php echo $form->textField($model,'next_payment_due_date'); ?>
		<?php echo $form->error($model,'next_payment_due_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contract_due_date'); ?>
		<?php echo $form->textField($model,'contract_due_date'); ?>
		<?php echo $form->error($model,'contract_due_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'maintenance_fee_manual'); ?>
		<?php echo $form->textField($model,'maintenance_fee_manual'); ?>
		<?php echo $form->error($model,'maintenance_fee_manual'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'maintenance_fee_automatic'); ?>
		<?php echo $form->textField($model,'maintenance_fee_automatic'); ?>
		<?php echo $form->error($model,'maintenance_fee_automatic'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'admin_fee_automatic'); ?>
		<?php echo $form->textField($model,'admin_fee_automatic'); ?>
		<?php echo $form->error($model,'admin_fee_automatic'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'admin_fee_perc_automatic'); ?>
		<?php echo $form->textField($model,'admin_fee_perc_automatic'); ?>
		<?php echo $form->error($model,'admin_fee_perc_automatic'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'admin_fee_manual'); ?>
		<?php echo $form->textField($model,'admin_fee_manual'); ?>
		<?php echo $form->error($model,'admin_fee_manual'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'admin_fee_perc_manual'); ?>
		<?php echo $form->textField($model,'admin_fee_perc_manual'); ?>
		<?php echo $form->error($model,'admin_fee_perc_manual'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'service_fee_automatic'); ?>
		<?php echo $form->textField($model,'service_fee_automatic'); ?>
		<?php echo $form->error($model,'service_fee_automatic'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'service_fee_perc_automatic'); ?>
		<?php echo $form->textField($model,'service_fee_perc_automatic'); ?>
		<?php echo $form->error($model,'service_fee_perc_automatic'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'service_fee_manual'); ?>
		<?php echo $form->textField($model,'service_fee_manual'); ?>
		<?php echo $form->error($model,'service_fee_manual'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'service_fee_perc_manual'); ?>
		<?php echo $form->textField($model,'service_fee_perc_manual'); ?>
		<?php echo $form->error($model,'service_fee_perc_manual'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'created_at'); ?>
		<?php echo $form->textField($model,'created_at'); ?>
		<?php echo $form->error($model,'created_at'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'updated_at'); ?>
		<?php echo $form->textField($model,'updated_at'); ?>
		<?php echo $form->error($model,'updated_at'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->