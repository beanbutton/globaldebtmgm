<?php
$this->breadcrumbs=array(
	'File Upload Items'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List FileUploadItem', 'url'=>array('index')),
	array('label'=>'Create FileUploadItem', 'url'=>array('create')),
	array('label'=>'Update FileUploadItem', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete FileUploadItem', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage FileUploadItem', 'url'=>array('admin')),
);
?>

<h1>View FileUploadItem #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'description',
		'filename',
		'create_user_id',
		'update_user_id',
		'create_time',
		'update_time',
	),
)); ?>
