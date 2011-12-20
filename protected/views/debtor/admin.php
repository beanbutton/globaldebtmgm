<?php
$this->breadcrumbs=array(
	'Debtors'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Debtor', 'url'=>array('index')),
	array('label'=>'Create Debtor', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('debtor-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Debtors</h1>

<br></br>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'debtor-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		/*'id',
		'Fk_user_id',
		'Fk_client_id',
		'Fk_debtor_additional_info_id',
		'Fk_creditor_id',
		'Fk_negotiator_id',
		'Fk_budget_info_id',
		'Fk_program_info_id',
		'Fk_amortization_id',
		'Fk_settlement_offer_id',
		'Fk_client_progress_id',*/
		'file_number',
		'firstname',
		'lastname',
		'address',
		'drivers_licence',
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
		'employment_status',
		'employer',
		'employment_occupation',
		'employment_work_years',
		'employment_telephone',
		'employment_insurance',
		'employment_disability',
		'employee_pension',
		'correspondence_language',
		'comments',
		'spouse_firstname',
		'spouse_lastname',
		'spouse_address',
		'spouse_marital_status',
		'spouse_monthly_income',
		'spouse_gross_monthly_income',
		'spouse_employment_status',
		'spouse_employer',
		'spouse_employment_occupation',
		'spouse_employment_work_years',
		'spouse_number_of_children',
		'spouse_drivers_licence',
		'spouse_active_duty',
		'spouse_comments',
		/*'created_at',
		'updated_at',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
