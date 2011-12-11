<?php
$this->breadcrumbs=array(
	'Debtor Additional Infos',
);

$this->menu=array(
	array('label'=>'Create DebtorAdditionalInfo', 'url'=>array('create')),
	array('label'=>'Manage DebtorAdditionalInfo', 'url'=>array('admin')),
);
?>

<h1>Debtor Additional Infos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
