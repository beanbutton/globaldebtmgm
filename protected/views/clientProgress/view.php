<?php
$this->breadcrumbs=array(
	'Client Progresses'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List ClientProgress', 'url'=>array('index')),
	array('label'=>'Create ClientProgress', 'url'=>array('create')),
	array('label'=>'Update ClientProgress', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ClientProgress', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ClientProgress', 'url'=>array('admin')),
);
?>

<h1>View ClientProgress #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'client_id',
		'debtor_id',
		'creditor_id',
		'negotiator_id',
		'created_at',
		'updated_at',
	),
)); ?>
