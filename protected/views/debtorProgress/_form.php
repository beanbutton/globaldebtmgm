<div class="form">
	<?php $form = $this -> beginWidget('CActiveForm', array('id' => 'debtor-progress-form', 'enableAjaxValidation' => false, ));?>

	<p class="note">
		Fields with <span class="required">*</span> are required.
	</p>
	<?php echo $form -> errorSummary($model);?>

	<div class="col">
		<?php echo $form -> labelEx($model, 'offer_date');?>
		<?php echo $form -> textField($model, 'offer_date');?>
		<?php echo CHtml::image("images/calendar_btn.jpg", "calendar", array("id" => "c_button1", "class" => "pointer"));?>
		<?php $this -> widget('application.extensions.calendar.SCalendar', array('inputField' => 'DebtorProgress_offer_date', 'button' => 'c_button1', 'ifFormat' => '%Y-%m-%d', ));?>

		<?php echo $form -> error($model, 'offer_date');?>
	</div>
	<div class="col">
		<?php echo $form -> labelEx($model, 'offer_valid_until_date');?>
		<?php echo $form -> textField($model, 'offer_valid_until_date');?>
		<?php echo CHtml::image("images/calendar_btn.jpg", "calendar", array("id" => "c_button2", "class" => "pointer"));?>
		<?php $this -> widget('application.extensions.calendar.SCalendar', array('inputField' => 'DebtorProgress_offer_valid_until_date', 'button' => 'c_button2', 'ifFormat' => '%Y-%m-%d', ));?>

		<?php echo $form -> error($model, 'offer_valid_until_date');?>
	</div>
	<div class="col">
		<?php echo $form -> labelEx($model, 'current_settlement_offer');?>
		<?php echo $form -> textField($model, 'current_settlement_offer');?>
		<?php echo $form -> error($model, 'current_settlement_offer');?>
	</div>
	<div class="col">
		<?php echo $form -> labelEx($model, 'current_settlement_perc');?>
		<?php echo $form -> textField($model, 'current_settlement_perc');?>
		<?php echo $form -> error($model, 'current_settlement_perc');?>
	</div>
	<div class="col">
		<?php echo $form -> labelEx($model, 'type_of_debt');?>
		<?php echo $form -> textField($model, 'type_of_debt');?>
		<?php echo $form -> error($model, 'type_of_debt');?>
	</div>
	<div class="col">
		<?php echo $form -> labelEx($model, 'total_debt');?>
		<?php echo $form -> textField($model, 'total_debt');?>
		<?php echo $form -> error($model, 'total_debt');?>
	</div>
	<div class="col">
		<?php echo $form -> labelEx($model, 'days_behind');?>
		<?php echo $form -> textField($model, 'days_behind');?>
		<?php echo $form -> error($model, 'days_behind');?>
	</div>
	<div class="col">
		<?php echo $form -> labelEx($model, 'settlement_date');?>
		<?php echo $form -> textField($model, 'settlement_date');?>
		<?php echo $form -> error($model, 'settlement_date');?>
	</div>
	<div class="col">
		<?php echo $form -> labelEx($model, 'settlement_amount');?>
		<?php echo $form -> textField($model, 'settlement_amount');?>
		<?php echo $form -> error($model, 'settlement_amount');?>
	</div>
	<div class="col">
		<?php echo $form -> labelEx($model, 'savings');?>
		<?php echo $form -> textField($model, 'savings');?>
		<?php echo $form -> error($model, 'savings');?>
	</div>
	<div class="col">
		<?php echo $form -> labelEx($model, 'status');?>
		<?php echo $form -> textField($model, 'status');?>
		<?php echo $form -> error($model, 'status');?>
	</div>
	<div class="col buttons">
		<?php echo CHtml::submitButton($model -> isNewRecord ? 'Create' : 'Save');?>
<?php echo CHtml::submitButton( "Generate Report", 
			array('submit' => "index.php?r=debtorProgress/report&id=" . $model->id));?>            
            
			<!--
		<?php echo CHtml::submitButton($model -> isNewRecord ? 'Add Report' : 'Save');?>
		<?php echo CHtml::submitButton( "Generate Report", 
			array('submit' => "index.php?r=debtorProgress/report&id=" . $model->id));?>
		-->
	</div>
	<?php $this -> endWidget();?>
</div><!-- form -->
