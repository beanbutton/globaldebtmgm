<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'debtor-settlement-offer-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="col">
		<?php echo $form->labelEx($model,'offer_date'); ?>
		<?php echo $form->textField($model,'offer_date'); ?>
		<?php echo CHtml::image("images/calendar_btn.jpg","calendar",
                array("id"=>"c_button1","class"=>"pointer")); ?>
                <?php $this->widget('application.extensions.calendar.SCalendar',
                    array(
                    'inputField'=>'DebtorSettlementOffer_offer_date',
                    'button'=>'c_button1',
                    'ifFormat'=>'%Y-%m-%d',
                ));
                ?>
                <?php echo $form->error($model,'offer_date'); ?>
	</div>

	<div class="col">
		<?php echo $form->labelEx($model,'offer_valid_until_date'); ?>
		<?php echo $form->textField($model,'offer_valid_until_date'); ?>
                <?php echo CHtml::image("images/calendar_btn.jpg","calendar",
                array("id"=>"c_button2","class"=>"pointer")); ?>
                <?php $this->widget('application.extensions.calendar.SCalendar',
                    array(
                    'inputField'=>'DebtorSettlementOffer_offer_valid_until_date',
                    'button'=>'c_button2',
                    'ifFormat'=>'%Y-%m-%d',
                ));
                ?>
		<?php echo $form->error($model,'offer_valid_until_date'); ?>
	</div>

	<div class="col">
		<?php echo $form->labelEx($model,'offer_amount'); ?>
		<?php echo $form->textField($model,'offer_amount'); ?>
		<?php echo $form->error($model,'offer_amount'); ?>
	</div>

	<div class="col">
		<?php echo $form->labelEx($model,'offer_amount_percentage'); ?>
		<?php echo $form->textField($model,'offer_amount_percentage'); ?>
		<?php echo $form->error($model,'offer_amount_percentage'); ?>
	</div>

	<div class="col">
		<?php echo $form->labelEx($model,'client_saving_amonut'); ?>
		<?php echo $form->textField($model,'client_saving_amonut'); ?>
		<?php echo $form->error($model,'client_saving_amonut'); ?>
	</div>

	<div class="col">
		<?php echo $form->labelEx($model,'client_savings_percentage'); ?>
		<?php echo $form->textField($model,'client_savings_percentage'); ?>
		<?php echo $form->error($model,'client_savings_percentage'); ?>
	</div>

	<div class="col">
		<?php echo $form->labelEx($model,'client_reserves'); ?>
		<?php echo $form->textField($model,'client_reserves'); ?>
		<?php echo $form->error($model,'client_reserves'); ?>
	</div>

	<div class="col">
		<?php echo $form->labelEx($model,'service_fees'); ?>
		<?php echo $form->textField($model,'service_fees'); ?>
		<?php echo $form->error($model,'service_fees'); ?>
	</div>

	<div class="col">
		<?php echo $form->labelEx($model,'difference_amount'); ?>
		<?php echo $form->textField($model,'difference_amount'); ?>
		<?php echo $form->error($model,'difference_amount'); ?>
	</div>

	<div class="col">
		<?php echo $form->labelEx($model,'offer_status'); ?>
		<?php echo $form->textField($model,'offer_status'); ?>
		<?php echo $form->error($model,'offer_status'); ?>
	</div>

	<div class="col buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->