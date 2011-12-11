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
		<?php echo $form->label($model,'spouse_firstname'); ?>
		<?php echo $form->textField($model,'spouse_firstname',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'spouse_lastname'); ?>
		<?php echo $form->textField($model,'spouse_lastname',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'spouse_address'); ?>
		<?php echo $form->textField($model,'spouse_address',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'spouse_marital_status'); ?>
		<?php echo $form->textField($model,'spouse_marital_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'spouse_monthly_income'); ?>
		<?php echo $form->textField($model,'spouse_monthly_income'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'spouse_gross_monthly_income'); ?>
		<?php echo $form->textField($model,'spouse_gross_monthly_income'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'spouse_employment_status'); ?>
		<?php echo $form->textField($model,'spouse_employment_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'spouse_employer'); ?>
		<?php echo $form->textField($model,'spouse_employer',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'spouse_employment_occupation'); ?>
		<?php echo $form->textField($model,'spouse_employment_occupation',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'spouse_employment_work_years'); ?>
		<?php echo $form->textField($model,'spouse_employment_work_years'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'spouse_number_of_children'); ?>
		<?php echo $form->textField($model,'spouse_number_of_children'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'spouse_drivers_licence'); ?>
		<?php echo $form->textField($model,'spouse_drivers_licence',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'spouse_active_duty'); ?>
		<?php echo $form->textField($model,'spouse_active_duty'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'comments'); ?>
		<?php echo $form->textField($model,'comments',array('size'=>60,'maxlength'=>255)); ?>
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