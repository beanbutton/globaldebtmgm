<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'monthly_payment'); ?>
		<?php echo $form->textField($model,'monthly_payment'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'total_debt'); ?>
		<?php echo $form->textField($model,'total_debt'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'original_debt'); ?>
		<?php echo $form->textField($model,'original_debt'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'monthly_income'); ?>
		<?php echo $form->textField($model,'monthly_income'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'saf_monthly_payment'); ?>
		<?php echo $form->textField($model,'saf_monthly_payment'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nsf_amount'); ?>
		<?php echo $form->textField($model,'nsf_amount'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'monthly_payment_due_date'); ?>
		<?php echo $form->textField($model,'monthly_payment_due_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'enrollment_date'); ?>
		<?php echo $form->textField($model,'enrollment_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'first_monthly_payment_date'); ?>
		<?php echo $form->textField($model,'first_monthly_payment_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'next_payment_due_date'); ?>
		<?php echo $form->textField($model,'next_payment_due_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'contract_due_date'); ?>
		<?php echo $form->textField($model,'contract_due_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'maintenance_fee_manual'); ?>
		<?php echo $form->textField($model,'maintenance_fee_manual'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'maintenance_fee_automatic'); ?>
		<?php echo $form->textField($model,'maintenance_fee_automatic'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'admin_fee_automatic'); ?>
		<?php echo $form->textField($model,'admin_fee_automatic'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'admin_fee_perc_automatic'); ?>
		<?php echo $form->textField($model,'admin_fee_perc_automatic'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'admin_fee_manual'); ?>
		<?php echo $form->textField($model,'admin_fee_manual'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'admin_fee_perc_manual'); ?>
		<?php echo $form->textField($model,'admin_fee_perc_manual'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'service_fee_automatic'); ?>
		<?php echo $form->textField($model,'service_fee_automatic'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'service_fee_perc_automatic'); ?>
		<?php echo $form->textField($model,'service_fee_perc_automatic'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'service_fee_manual'); ?>
		<?php echo $form->textField($model,'service_fee_manual'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'service_fee_perc_manual'); ?>
		<?php echo $form->textField($model,'service_fee_perc_manual'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'created_at'); ?>
		<?php echo $form->textField($model,'created_at'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'updated_at'); ?>
		<?php echo $form->textField($model,'updated_at'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->