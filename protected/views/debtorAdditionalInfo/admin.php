<?php
$this->breadcrumbs=array(
	'Debtor Additional Infos'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List DebtorAdditionalInfo', 'url'=>array('index')),
	array('label'=>'Create DebtorAdditionalInfo', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('debtor-additional-info-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Debtor Additional Infos</h1>

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
	'id'=>'debtor-additional-info-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		/*'id',*/
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
		/*'comments',
		'created_at',
		'updated_at',
		
		array(
			'class'=>'CButtonColumn',
		),*/
	),
)); ?>
