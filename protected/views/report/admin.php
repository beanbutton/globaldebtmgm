<?php
$this->breadcrumbs=array(
	'Reports'=>array('index'),
	'Manage Reports',
);

$this->menu=array(
	array('label'=>'List Reports', 'url'=>array('index')),
	array('label'=>'Create Reports', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('debtor-progress-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Reports</h1>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'debtor-progress-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		/*'id',
		'Fk_debtor_id',
		'Fk_creditor_id',
		'Fk_negotiator_id',*/
                'offer_date',
		'offer_valid_until_date',
		'current_settlement_offer',
		'current_settlement_perc',
		'type_of_debt',
		'total_debt',
		'days_behind',
		'settlement_date',
		'settlement_amount',
		'savings',
		'status',
                /*'created_at',
		'updated_at',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

