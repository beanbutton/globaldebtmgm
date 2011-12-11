<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'claims-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Fk_clientid'); ?>
		<?php echo $form->textField($model,'Fk_clientid'); ?>
		<?php echo $form->error($model,'Fk_clientid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Fk_creditor_id'); ?>
		<?php echo $form->textField($model,'Fk_creditor_id'); ?>
		<?php echo $form->error($model,'Fk_creditor_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'file_number'); ?>
		<?php echo $form->textField($model,'file_number',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'file_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'account_number'); ?>
		<?php echo $form->textField($model,'account_number',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'account_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'type_of_debt'); ?>
		<?php echo $form->textField($model,'type_of_debt',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'type_of_debt'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'amount_of_claim'); ?>
		<?php echo $form->textField($model,'amount_of_claim'); ?>
		<?php echo $form->error($model,'amount_of_claim'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'days_behind'); ?>
		<?php echo $form->textField($model,'days_behind'); ?>
		<?php echo $form->error($model,'days_behind'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'settlement_date'); ?>
		<?php echo $form->textField($model,'settlement_date'); ?>
		<?php echo $form->error($model,'settlement_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'settlement_amount'); ?>
		<?php echo $form->textField($model,'settlement_amount'); ?>
		<?php echo $form->error($model,'settlement_amount'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'savings'); ?>
		<?php echo $form->textField($model,'savings'); ?>
		<?php echo $form->error($model,'savings'); ?>
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