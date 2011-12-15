<?php
$this->breadcrumbs=array(
	'Debtor Settlement Offers'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List DebtorSettlementOffer', 'url'=>array('index')),
	array('label'=>'Manage DebtorSettlementOffer', 'url'=>array('admin')),
);
?>

<h1>Create DebtorSettlementOffer</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>