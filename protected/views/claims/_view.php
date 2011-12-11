<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Fk_clientid')); ?>:</b>
	<?php echo CHtml::encode($data->Fk_clientid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Fk_creditor_id')); ?>:</b>
	<?php echo CHtml::encode($data->Fk_creditor_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('file_number')); ?>:</b>
	<?php echo CHtml::encode($data->file_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('account_number')); ?>:</b>
	<?php echo CHtml::encode($data->account_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('type_of_debt')); ?>:</b>
	<?php echo CHtml::encode($data->type_of_debt); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('amount_of_claim')); ?>:</b>
	<?php echo CHtml::encode($data->amount_of_claim); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('days_behind')); ?>:</b>
	<?php echo CHtml::encode($data->days_behind); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('settlement_date')); ?>:</b>
	<?php echo CHtml::encode($data->settlement_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('settlement_amount')); ?>:</b>
	<?php echo CHtml::encode($data->settlement_amount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('savings')); ?>:</b>
	<?php echo CHtml::encode($data->savings); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_at')); ?>:</b>
	<?php echo CHtml::encode($data->created_at); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updated_at')); ?>:</b>
	<?php echo CHtml::encode($data->updated_at); ?>
	<br />

	*/ ?>

</div>