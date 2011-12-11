<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'debtor-additional-info-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'spouse_firstname'); ?>
		<?php echo $form->textField($model,'spouse_firstname',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'spouse_firstname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'spouse_lastname'); ?>
		<?php echo $form->textField($model,'spouse_lastname',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'spouse_lastname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'spouse_address'); ?>
		<?php echo $form->textField($model,'spouse_address',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'spouse_address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'spouse_marital_status'); ?>
		<?php echo $form->textField($model,'spouse_marital_status'); ?>
		<?php echo $form->error($model,'spouse_marital_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'spouse_monthly_income'); ?>
		<?php echo $form->textField($model,'spouse_monthly_income'); ?>
		<?php echo $form->error($model,'spouse_monthly_income'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'spouse_gross_monthly_income'); ?>
		<?php echo $form->textField($model,'spouse_gross_monthly_income'); ?>
		<?php echo $form->error($model,'spouse_gross_monthly_income'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'spouse_employment_status'); ?>
		<?php echo $form->textField($model,'spouse_employment_status'); ?>
		<?php echo $form->error($model,'spouse_employment_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'spouse_employer'); ?>
		<?php echo $form->textField($model,'spouse_employer',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'spouse_employer'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'spouse_employment_occupation'); ?>
		<?php echo $form->textField($model,'spouse_employment_occupation',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'spouse_employment_occupation'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'spouse_employment_work_years'); ?>
		<?php echo $form->textField($model,'spouse_employment_work_years'); ?>
		<?php echo $form->error($model,'spouse_employment_work_years'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'spouse_number_of_children'); ?>
		<?php echo $form->textField($model,'spouse_number_of_children'); ?>
		<?php echo $form->error($model,'spouse_number_of_children'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'spouse_drivers_licence'); ?>
		<?php echo $form->textField($model,'spouse_drivers_licence',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'spouse_drivers_licence'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'spouse_active_duty'); ?>
		<?php echo $form->textField($model,'spouse_active_duty'); ?>
		<?php echo $form->error($model,'spouse_active_duty'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'comments'); ?>
		<?php echo $form->textField($model,'comments',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'comments'); ?>
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