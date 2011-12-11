<?php
$this->breadcrumbs=array(
	'Claims'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Claims', 'url'=>array('index')),
	array('label'=>'Create Claims', 'url'=>array('create')),
	array('label'=>'Update Claims', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Claims', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Claims', 'url'=>array('admin')),
);
?>

<h1>View Claims #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'Fk_clientid',
		'Fk_creditor_id',
		'file_number',
		'account_number',
		'type_of_debt',
		'amount_of_claim',
		'days_behind',
		'settlement_date',
		'settlement_amount',
		'savings',
		'created_at',
		'updated_at',
	),
)); ?>
