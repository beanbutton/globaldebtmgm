<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'creditor-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'address'); ?>
		<?php echo $form->textField($model,'address',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telephone'); ?>
		<?php echo $form->textField($model,'telephone',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'telephone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'faxnumber'); ?>
		<?php echo $form->textField($model,'faxnumber',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'faxnumber'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'current_settlement_offer'); ?>
		<?php echo $form->textField($model,'current_settlement_offer'); ?>
		<?php echo $form->error($model,'current_settlement_offer'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'current_settlement_perc'); ?>
		<?php echo $form->textField($model,'current_settlement_perc'); ?>
		<?php echo $form->error($model,'current_settlement_perc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'offer_date'); ?>
		<?php echo $form->textField($model,'offer_date'); ?>
		<?php echo $form->error($model,'offer_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'offer_valid_until_date'); ?>
		<?php echo $form->textField($model,'offer_valid_until_date'); ?>
		<?php echo $form->error($model,'offer_valid_until_date'); ?>
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