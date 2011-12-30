<?php
$this->breadcrumbs=array(
	'Client Progresses'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ClientProgress', 'url'=>array('index')),
	array('label'=>'Create ClientProgress', 'url'=>array('create')),
	array('label'=>'View ClientProgress', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ClientProgress', 'url'=>array('admin')),
);
?>

<h1>Update ClientProgress <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>