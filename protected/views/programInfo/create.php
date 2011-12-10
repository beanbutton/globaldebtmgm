<?php
$this->breadcrumbs=array(
	'Program Infos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ProgramInfo', 'url'=>array('index')),
	array('label'=>'Manage ProgramInfo', 'url'=>array('admin')),
);
?>

<h1>Create ProgramInfo</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>