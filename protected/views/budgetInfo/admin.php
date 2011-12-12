<?php
$this->breadcrumbs=array(
	'Budget Infos'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List BudgetInfo', 'url'=>array('index')),
	array('label'=>'Create BudgetInfo', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('budget-info-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Budget Infos</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'budget-info-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		/*'id',*/
		'monthly_auto_payments',
		'food_stamp_or_other',
		'total_number_dependants',
		'monthly_utilites',
		'spouse_monthly_takehome_pay',
		'household_expenses',
		'monthly_auto_expenses',
		'monthly_income',
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
		
		array(
			'class'=>'CButtonColumn',
		),*/
	),
)); ?>
