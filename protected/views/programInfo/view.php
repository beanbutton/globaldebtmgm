<?php
$this->breadcrumbs=array(
	'Program Infos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List ProgramInfo', 'url'=>array('index')),
	array('label'=>'Create ProgramInfo', 'url'=>array('create')),
	array('label'=>'Update ProgramInfo', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ProgramInfo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ProgramInfo', 'url'=>array('admin')),
);
?>

<h1>View ProgramInfo #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'monthly_payment',
		'total_debt',
		'original_debt',
		'monthly_income',
		'saf_monthly_payment',
		'nsf_amount',
		'monthly_payment_due_date',
		'enrollment_date',
		'first_monthly_payment_date',
		'next_payment_due_date',
		'contract_due_date',
		'maintenance_fee_manual',
		'maintenance_fee_automatic',
		'admin_fee_automatic',
		'admin_fee_perc_automatic',
		'admin_fee_manual',
		'admin_fee_perc_manual',
		'service_fee_automatic',
		'service_fee_perc_automatic',
		'service_fee_manual',
		'service_fee_perc_manual',
		'created_at',
		'updated_at',
	),
)); ?>
