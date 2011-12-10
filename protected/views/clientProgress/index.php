<?php
$this->breadcrumbs=array(
	'Client Progresses',
);

$this->menu=array(
	array('label'=>'Create ClientProgress', 'url'=>array('create')),
	array('label'=>'Manage ClientProgress', 'url'=>array('admin')),
);
?>

<h1>Client Progresses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
