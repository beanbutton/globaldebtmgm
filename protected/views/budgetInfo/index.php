<?php
$this->breadcrumbs=array(
	'Budget Infos',
);

$this->menu=array(
	array('label'=>'Create BudgetInfo', 'url'=>array('create')),
	array('label'=>'Manage BudgetInfo', 'url'=>array('admin')),
);
?>

<h1>Budget Infos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
