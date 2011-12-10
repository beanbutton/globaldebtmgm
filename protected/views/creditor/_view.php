<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('address')); ?>:</b>
	<?php echo CHtml::encode($data->address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telephone')); ?>:</b>
	<?php echo CHtml::encode($data->telephone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('faxnumber')); ?>:</b>
	<?php echo CHtml::encode($data->faxnumber); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('current_settlement_offer')); ?>:</b>
	<?php echo CHtml::encode($data->current_settlement_offer); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('current_settlement_perc')); ?>:</b>
	<?php echo CHtml::encode($data->current_settlement_perc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('offer_date')); ?>:</b>
	<?php echo CHtml::encode($data->offer_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('offer_valid_until_date')); ?>:</b>
	<?php echo CHtml::encode($data->offer_valid_until_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_at')); ?>:</b>
	<?php echo CHtml::encode($data->created_at); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updated_at')); ?>:</b>
	<?php echo CHtml::encode($data->updated_at); ?>
	<br />

	*/ ?>

</div>