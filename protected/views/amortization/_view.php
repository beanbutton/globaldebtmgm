<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('payment_date')); ?>:</b>
	<?php echo CHtml::encode($data->payment_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('total_monthly_cost')); ?>:</b>
	<?php echo CHtml::encode($data->total_monthly_cost); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('adminstration_fee')); ?>:</b>
	<?php echo CHtml::encode($data->adminstration_fee); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('maintenance_fee')); ?>:</b>
	<?php echo CHtml::encode($data->maintenance_fee); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('settlement_savings_fund')); ?>:</b>
	<?php echo CHtml::encode($data->settlement_savings_fund); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('total_monthly_cost_total')); ?>:</b>
	<?php echo CHtml::encode($data->total_monthly_cost_total); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('total_adminstration_fee')); ?>:</b>
	<?php echo CHtml::encode($data->total_adminstration_fee); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('total_maintenance_fee')); ?>:</b>
	<?php echo CHtml::encode($data->total_maintenance_fee); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('total_settlement_savings_fund')); ?>:</b>
	<?php echo CHtml::encode($data->total_settlement_savings_fund); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_at')); ?>:</b>
	<?php echo CHtml::encode($data->created_at); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updated_at')); ?>:</b>
	<?php echo CHtml::encode($data->updated_at); ?>
	<br />

	*/ ?>

</div>