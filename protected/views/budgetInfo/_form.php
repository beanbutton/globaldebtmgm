<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'budget-info-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'monthly_income'); ?>
		<?php echo $form->textField($model,'monthly_income'); ?>
		<?php echo $form->error($model,'monthly_income'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'monthly_auto_expenses'); ?>
		<?php echo $form->textField($model,'monthly_auto_expenses'); ?>
		<?php echo $form->error($model,'monthly_auto_expenses'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'monthly_auto_payments'); ?>
		<?php echo $form->textField($model,'monthly_auto_payments'); ?>
		<?php echo $form->error($model,'monthly_auto_payments'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'monthly_utilites'); ?>
		<?php echo $form->textField($model,'monthly_utilites'); ?>
		<?php echo $form->error($model,'monthly_utilites'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'monthly_grocery_expenses'); ?>
		<?php echo $form->textField($model,'monthly_grocery_expenses'); ?>
		<?php echo $form->error($model,'monthly_grocery_expenses'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'monthly_insurance_payments'); ?>
		<?php echo $form->textField($model,'monthly_insurance_payments'); ?>
		<?php echo $form->error($model,'monthly_insurance_payments'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rrsp'); ?>
		<?php echo $form->textField($model,'rrsp'); ?>
		<?php echo $form->error($model,'rrsp'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'food_stamp_or_other'); ?>
		<?php echo $form->textField($model,'food_stamp_or_other'); ?>
		<?php echo $form->error($model,'food_stamp_or_other'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'spouse_monthly_takehome_pay'); ?>
		<?php echo $form->textField($model,'spouse_monthly_takehome_pay'); ?>
		<?php echo $form->error($model,'spouse_monthly_takehome_pay'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'reason_for_hardship'); ?>
		<?php echo $form->textField($model,'reason_for_hardship',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'reason_for_hardship'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'estimated_home_value'); ?>
		<?php echo $form->textField($model,'estimated_home_value'); ?>
		<?php echo $form->error($model,'estimated_home_value'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'remaining_mortgage_balance'); ?>
		<?php echo $form->textField($model,'remaining_mortgage_balance'); ?>
		<?php echo $form->error($model,'remaining_mortgage_balance'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'total_number_dependants'); ?>
		<?php echo $form->textField($model,'total_number_dependants'); ?>
		<?php echo $form->error($model,'total_number_dependants'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'household_expenses'); ?>
		<?php echo $form->textField($model,'household_expenses'); ?>
		<?php echo $form->error($model,'household_expenses'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'total_debt_to_income_perc'); ?>
		<?php echo $form->textField($model,'total_debt_to_income_perc'); ?>
		<?php echo $form->error($model,'total_debt_to_income_perc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'total_expenses_to_income_variance'); ?>
		<?php echo $form->textField($model,'total_expenses_to_income_variance'); ?>
		<?php echo $form->error($model,'total_expenses_to_income_variance'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mortgage'); ?>
		<?php echo $form->textField($model,'mortgage'); ?>
		<?php echo $form->error($model,'mortgage'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rent'); ?>
		<?php echo $form->textField($model,'rent'); ?>
		<?php echo $form->error($model,'rent'); ?>
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