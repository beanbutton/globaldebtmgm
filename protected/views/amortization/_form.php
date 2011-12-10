<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'amortization-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'payment_date'); ?>
		<?php echo $form->textField($model,'payment_date'); ?>
		<?php echo $form->error($model,'payment_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'total_monthly_cost'); ?>
		<?php echo $form->textField($model,'total_monthly_cost'); ?>
		<?php echo $form->error($model,'total_monthly_cost'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'adminstration_fee'); ?>
		<?php echo $form->textField($model,'adminstration_fee'); ?>
		<?php echo $form->error($model,'adminstration_fee'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'maintenance_fee'); ?>
		<?php echo $form->textField($model,'maintenance_fee'); ?>
		<?php echo $form->error($model,'maintenance_fee'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'settlement_savings_fund'); ?>
		<?php echo $form->textField($model,'settlement_savings_fund'); ?>
		<?php echo $form->error($model,'settlement_savings_fund'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'total_monthly_cost_total'); ?>
		<?php echo $form->textField($model,'total_monthly_cost_total'); ?>
		<?php echo $form->error($model,'total_monthly_cost_total'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'total_adminstration_fee'); ?>
		<?php echo $form->textField($model,'total_adminstration_fee'); ?>
		<?php echo $form->error($model,'total_adminstration_fee'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'total_maintenance_fee'); ?>
		<?php echo $form->textField($model,'total_maintenance_fee'); ?>
		<?php echo $form->error($model,'total_maintenance_fee'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'total_settlement_savings_fund'); ?>
		<?php echo $form->textField($model,'total_settlement_savings_fund'); ?>
		<?php echo $form->error($model,'total_settlement_savings_fund'); ?>
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