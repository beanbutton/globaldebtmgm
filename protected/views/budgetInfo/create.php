<?php
$this->breadcrumbs=array(
	'Budget Infos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List BudgetInfo', 'url'=>array('index')),
	array('label'=>'Manage BudgetInfo', 'url'=>array('admin')),
);
?>

<h1>Create BudgetInfo</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>