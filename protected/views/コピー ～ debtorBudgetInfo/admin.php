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
<br>
<br>
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
		/*'id',
		'Fk_debtor_id',*/
		'monthly_auto_payments',
		'food_stamp_or_other',
		'total_number_dependants',
		'monthly_utilites',
		'spouse_monthly_takehome_pay',
		'household_expenses',
		'monthly_auto_expenses',
		'monthly_income',
		'gross_monthly_income',
		'total_debt_to_income_perc',
		'monthly_grocery_expenses',
		'reason_for_hardship',
		'total_expenses_to_income_variance',
		'monthly_insurance_payments',
		'estimated_home_value',
		'mortgage',
		'rrsp',
		'remaining_mortgage_balance',
		'rent',
		/*'created_at',
		'updated_at',
                */
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
