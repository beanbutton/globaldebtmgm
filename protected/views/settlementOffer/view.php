<?php
$this->breadcrumbs=array(
	'Settlement Offers'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List SettlementOffer', 'url'=>array('index')),
	array('label'=>'Create SettlementOffer', 'url'=>array('create')),
	array('label'=>'Update SettlementOffer', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete SettlementOffer', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SettlementOffer', 'url'=>array('admin')),
);
?>

<h1>View SettlementOffer #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'debtor_id',
		'creditor_id',
		'negotiator_id',
		'created_at',
		'updated_at',
	),
)); ?>
