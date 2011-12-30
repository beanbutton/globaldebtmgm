<?php
$this->breadcrumbs=array(
	'Claims'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Claims', 'url'=>array('index')),
	array('label'=>'Create Claims', 'url'=>array('create')),
	array('label'=>'View Claims', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Claims', 'url'=>array('admin')),
);
?>

<h1>Update Claims <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>