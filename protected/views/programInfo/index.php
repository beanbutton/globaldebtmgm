<?php
$this->breadcrumbs=array(
	'Program Infos',
);

$this->menu=array(
	array('label'=>'Create ProgramInfo', 'url'=>array('create')),
	array('label'=>'Manage ProgramInfo', 'url'=>array('admin')),
);
?>

<h1>Program Infos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
