<?php
$this->breadcrumbs=array(
	'Amortizations'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Amortization', 'url'=>array('index')),
	array('label'=>'Create Amortization', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('amortization-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Amortizations</h1>

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
	'id'=>'amortization-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'payment_date',
		'total_monthly_cost',
		'adminstration_fee',
		'maintenance_fee',
		'settlement_savings_fund',
		/*
		'total_monthly_cost_total',
		'total_adminstration_fee',
		'total_maintenance_fee',
		'total_settlement_savings_fund',
		'created_at',
		'updated_at',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
