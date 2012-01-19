<?php
$this->breadcrumbs=array(
	'Debtor Progresses',
);

$this->menu=array(
	array('label'=>'Create Reports', 'url'=>array('create')),
	array('label'=>'Manage Reports', 'url'=>array('admin')),
);
?>

<h1>Debtor Reports</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
