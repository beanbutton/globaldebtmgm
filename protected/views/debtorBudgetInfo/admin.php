<?php
$this->breadcrumbs=array(
	'Debtor Budget Infos'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List DebtorBudgetInfo', 'url'=>array('index')),
	array('label'=>'Create DebtorBudgetInfo', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('debtor-budget-info-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Debtor Budget Infos</h1>

<br></br>
<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'debtor-budget-info-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'monthly_income',
		'monthly_auto_expenses',
		'car_payment1',
		'car_payment2',
		'recreational_vehicle',
		/*
		'monthly_auto_payments',
		'monthly_utilites',
		'monthly_grocery_expenses',
		'monthly_insurance_payments',
		'rrsp',
		'gas_and_electricuty',
		'telephone',
		'water_trash_sewer',
		'cable_and_internet_services',
		'food_stamp_or_other',
		'spouse_monthly_takehome_pay',
		'reason_for_hardship',
		'estimated_home_value',
		'remaining_mortgage_balance',
		'total_number_dependants',
		'household_expenses',
		'total_debt_to_income_perc',
		'total_expenses_to_income_variance',
		'mortgage',
		'rent',
		'created_at',
		'updated_at',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
