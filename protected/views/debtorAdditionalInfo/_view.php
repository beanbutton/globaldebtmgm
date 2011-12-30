<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('spouse_firstname')); ?>:</b>
	<?php echo CHtml::encode($data->spouse_firstname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('spouse_lastname')); ?>:</b>
	<?php echo CHtml::encode($data->spouse_lastname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('spouse_address')); ?>:</b>
	<?php echo CHtml::encode($data->spouse_address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('spouse_marital_status')); ?>:</b>
	<?php echo CHtml::encode($data->spouse_marital_status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('spouse_monthly_income')); ?>:</b>
	<?php echo CHtml::encode($data->spouse_monthly_income); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('spouse_gross_monthly_income')); ?>:</b>
	<?php echo CHtml::encode($data->spouse_gross_monthly_income); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('spouse_employment_status')); ?>:</b>
	<?php echo CHtml::encode($data->spouse_employment_status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('spouse_employer')); ?>:</b>
	<?php echo CHtml::encode($data->spouse_employer); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('spouse_employment_occupation')); ?>:</b>
	<?php echo CHtml::encode($data->spouse_employment_occupation); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('spouse_employment_work_years')); ?>:</b>
	<?php echo CHtml::encode($data->spouse_employment_work_years); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('spouse_number_of_children')); ?>:</b>
	<?php echo CHtml::encode($data->spouse_number_of_children); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('spouse_drivers_licence')); ?>:</b>
	<?php echo CHtml::encode($data->spouse_drivers_licence); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('spouse_active_duty')); ?>:</b>
	<?php echo CHtml::encode($data->spouse_active_duty); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comments')); ?>:</b>
	<?php echo CHtml::encode($data->comments); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_at')); ?>:</b>
	<?php echo CHtml::encode($data->created_at); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updated_at')); ?>:</b>
	<?php echo CHtml::encode($data->updated_at); ?>
	<br />

	*/ ?>

</div>