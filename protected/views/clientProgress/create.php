<?php
$this->breadcrumbs=array(
	'Client Progresses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ClientProgress', 'url'=>array('index')),
	array('label'=>'Manage ClientProgress', 'url'=>array('admin')),
);
?>

<h1>Create ClientProgress</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>