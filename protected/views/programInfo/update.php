<?php
$this->breadcrumbs=array(
	'Program Infos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ProgramInfo', 'url'=>array('index')),
	array('label'=>'Create ProgramInfo', 'url'=>array('create')),
	array('label'=>'View ProgramInfo', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ProgramInfo', 'url'=>array('admin')),
);
?>

<h1>Update ProgramInfo <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>