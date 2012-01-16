<div class="form">
	<?php $form = $this -> beginWidget('CActiveForm', array('id' => 'file-upload-item-form', 'enableAjaxValidation' => false, 
	'htmlOptions' => array('enctype' => 'multipart/form-data'), ));?>

	<p class="note">
		Fields with <span class="required">*</span> are required.
	</p>
	<?php echo $form -> errorSummary($model);?>

	<div class="row">
		<?php echo $form -> labelEx($model, 'description');?>
		<?php echo $form -> textField($model, 'description', array('rows' => 6, 'cols' => 50));?>
		<?php echo $form -> error($model, 'description');?>	
	</div>
	
	<div class="row">
		<?php echo $form -> labelEx($model, 'filename');?>
		<?php echo $form -> fileField($model, 'filename', array('size' => 60, 'maxlength' => 128));?>
		<?php echo $form -> error($model, 'filename');?>
	</div>
	
	<!--
	<div class="row">
	<?php echo $form->labelEx($model,'create_user_id'); ?>
	<?php echo $form->textField($model,'create_user_id'); ?>
	<?php echo $form->error($model,'create_user_id'); ?>
	</div>

	<div class="row">
	<?php echo $form->labelEx($model,'update_user_id'); ?>
	<?php echo $form->textField($model,'update_user_id'); ?>
	<?php echo $form->error($model,'update_user_id'); ?>
	</div>

	<div class="row">
	<?php echo $form->labelEx($model,'create_time'); ?>
	<?php echo $form->textField($model,'create_time'); ?>
	<?php echo $form->error($model,'create_time'); ?>
	</div>

	<div class="row">
	<?php echo $form->labelEx($model,'update_time'); ?>
	<?php echo $form->textField($model,'update_time'); ?>
	<?php echo $form->error($model,'update_time'); ?>
	</div>

	-->
	<div class="row buttons">
		<?php echo CHtml::submitButton($model -> isNewRecord ? 'Submit' : 'Save');?>
	</div>
	<?php $this -> endWidget();?>
</div><!-- form -->