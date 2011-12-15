<?php
$this->breadcrumbs=array(
	'Debtor Settlement Offers'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List DebtorSettlementOffer', 'url'=>array('index')),
	array('label'=>'Create DebtorSettlementOffer', 'url'=>array('create')),
	array('label'=>'View DebtorSettlementOffer', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage DebtorSettlementOffer', 'url'=>array('admin')),
);
?>

<h1>Update DebtorSettlementOffer <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>