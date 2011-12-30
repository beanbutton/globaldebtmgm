<?php
$this->breadcrumbs=array(
	'Budget Infos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List BudgetInfo', 'url'=>array('index')),
	array('label'=>'Create BudgetInfo', 'url'=>array('create')),
	array('label'=>'View BudgetInfo', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage BudgetInfo', 'url'=>array('admin')),
);
?>

<h1>Update BudgetInfo <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>