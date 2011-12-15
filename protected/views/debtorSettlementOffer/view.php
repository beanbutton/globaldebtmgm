<?php
$this->breadcrumbs=array(
	'Debtor Settlement Offers'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List DebtorSettlementOffer', 'url'=>array('index')),
	array('label'=>'Create DebtorSettlementOffer', 'url'=>array('create')),
	array('label'=>'Update DebtorSettlementOffer', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete DebtorSettlementOffer', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage DebtorSettlementOffer', 'url'=>array('admin')),
);
?>

<h1>View DebtorSettlementOffer #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'Fk_debtor_id',
		'Fk_creditor_id',
		'Fk_negotiator_id',
		'offer_date',
		'offer_valid_until_date',
		'offer_amount',
		'offer_amount_percentage',
		'client_saving_amonut',
		'client_savings_percentage',
		'client_reserves',
		'service_fees',
		'difference_amount',
		'offer_status',
		'created_at',
		'updated_at',
	),
)); ?>
