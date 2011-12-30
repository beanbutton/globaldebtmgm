<?php
$this->breadcrumbs=array(
	'Debtor Additional Infos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List DebtorAdditionalInfo', 'url'=>array('index')),
	array('label'=>'Create DebtorAdditionalInfo', 'url'=>array('create')),
	array('label'=>'Update DebtorAdditionalInfo', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete DebtorAdditionalInfo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage DebtorAdditionalInfo', 'url'=>array('admin')),
);
?>

<h1>View DebtorAdditionalInfo #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'spouse_firstname',
		'spouse_lastname',
		'spouse_address',
		'spouse_marital_status',
		'spouse_monthly_income',
		'spouse_gross_monthly_income',
		'spouse_employment_status',
		'spouse_employer',
		'spouse_employment_occupation',
		'spouse_employment_work_years',
		'spouse_number_of_children',
		'spouse_drivers_licence',
		'spouse_active_duty',
		'comments',
		'created_at',
		'updated_at',
	),
)); ?>
