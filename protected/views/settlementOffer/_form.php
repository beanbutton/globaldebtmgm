<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'settlement-offer-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

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
		<?php echo $form->labelEx($model,'file_number'); ?>
		<?php echo $form->textField($model,'file_number',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'file_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'offer_date'); ?>
		<?php echo $form->textField($model,'offer_date'); ?>
		<?php echo $form->error($model,'offer_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'offer_amount'); ?>
		<?php echo $form->textField($model,'offer_amount'); ?>
		<?php echo $form->error($model,'offer_amount'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'offer_amount_percentage'); ?>
		<?php echo $form->textField($model,'offer_amount_percentage'); ?>
		<?php echo $form->error($model,'offer_amount_percentage'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'client_saving_amonut'); ?>
		<?php echo $form->textField($model,'client_saving_amonut'); ?>
		<?php echo $form->error($model,'client_saving_amonut'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'client_savings_percentage'); ?>
		<?php echo $form->textField($model,'client_savings_percentage'); ?>
		<?php echo $form->error($model,'client_savings_percentage'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'client_reserves'); ?>
		<?php echo $form->textField($model,'client_reserves'); ?>
		<?php echo $form->error($model,'client_reserves'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'service_fees'); ?>
		<?php echo $form->textField($model,'service_fees'); ?>
		<?php echo $form->error($model,'service_fees'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'difference_amount'); ?>
		<?php echo $form->textField($model,'difference_amount'); ?>
		<?php echo $form->error($model,'difference_amount'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'offer_status'); ?>
		<?php echo $form->textField($model,'offer_status'); ?>
		<?php echo $form->error($model,'offer_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'valid_date'); ?>
		<?php echo $form->textField($model,'valid_date'); ?>
		<?php echo $form->error($model,'valid_date'); ?>
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