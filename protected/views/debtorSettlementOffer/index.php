<?php
$this->breadcrumbs=array(
	'Debtor Settlement Offers',
);

$this->menu=array(
	array('label'=>'Create DebtorSettlementOffer', 'url'=>array('create')),
	array('label'=>'Manage DebtorSettlementOffer', 'url'=>array('admin')),
);
?>

<h1>Debtor Settlement Offers</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
