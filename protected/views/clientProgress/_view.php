<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('client_id')); ?>:</b>
	<?php echo CHtml::encode($data->client_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('debtor_id')); ?>:</b>
	<?php echo CHtml::encode($data->debtor_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('creditor_id')); ?>:</b>
	<?php echo CHtml::encode($data->creditor_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('negotiator_id')); ?>:</b>
	<?php echo CHtml::encode($data->negotiator_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_at')); ?>:</b>
	<?php echo CHtml::encode($data->created_at); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updated_at')); ?>:</b>
	<?php echo CHtml::encode($data->updated_at); ?>
	<br />


</div>