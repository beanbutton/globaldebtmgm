<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'client-progress-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'client_id'); ?>
		<?php echo $form->textField($model,'client_id'); ?>
		<?php echo $form->error($model,'client_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'debtor_id'); ?>
		<?php echo $form->textField($model,'debtor_id'); ?>
		<?php echo $form->error($model,'debtor_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'creditor_id'); ?>
		<?php echo $form->textField($model,'creditor_id'); ?>
		<?php echo $form->error($model,'creditor_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'negotiator_id'); ?>
		<?php echo $form->textField($model,'negotiator_id'); ?>
		<?php echo $form->error($model,'negotiator_id'); ?>
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