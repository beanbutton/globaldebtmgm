<?php
$this->breadcrumbs=array(
	'Debtors'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Debtor', 'url'=>array('index')),
	array('label'=>'Create Debtor', 'url'=>array('create')),
	array('label'=>'Update Debtor', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Debtor', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Debtor', 'url'=>array('admin')),
);
?>

<h1>View Debtor #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'Fk_client_id',
		'Fk_debtor_additional_info_id',
		'Fk_creditor_id',
		'Fk_negotiator_id',
		'Fk_budget_info_id',
		'Fk_program_info_id',
		'Fk_amortization_id',
		'Fk_settlement_offer_id',
		'Fk_client_progress_id',
		'file_number',
		'firstname',
		'lastname',
		'address',
		'date_of_birth',
		'social_insurance_number',
		'date_filed_chapter7',
		'date_filed_chapter13',
		'home_telephone',
		'mobile_telephone',
		'other_telephone',
		'best_time_to_call',
		'faxnumber',
		'email',
		'drivers_licence',
		'credit_card_number',
		'employment_status',
		'employer',
		'employment_occupation',
		'employment_work_years',
		'employment_telephone',
		'employment_insurance',
		'employment_disability',
		'pension',
		'correspondence_language',
		'comments',
		'created_at',
		'updated_at',
	),
)); ?>
