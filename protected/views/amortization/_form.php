<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'amortization-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'payment_start_date'); ?>
		<?php echo $form->textField($model,'payment_start_date'); ?>
                <?php echo CHtml::image("images/calendar_btn.jpg","calendar",
                array("id"=>"c_button1","class"=>"pointer")); ?>
                <?php $this->widget('application.extensions.calendar.SCalendar',
                    array(
                    'inputField'=>'Amortization_payment_start_date',
                    'button'=>'c_button1',
                    'ifFormat'=>'%Y-%m-%d',
                ));
                ?>

		<?php echo $form->error($model,'payment_start_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'payment_end_date'); ?>
		<?php echo $form->textField($model,'payment_end_date'); ?>
                <?php echo CHtml::image("images/calendar_btn.jpg","calendar",
                array("id"=>"c_button2","class"=>"pointer")); ?>
                <?php $this->widget('application.extensions.calendar.SCalendar',
                    array(
                    'inputField'=>'Amortization_payment_end_date',
                    'button'=>'c_button2',
                    'ifFormat'=>'%Y-%m-%d',
                ));
                ?>

		<?php echo $form->error($model,'payment_end_date'); ?>
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

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->