<?php
$this->breadcrumbs=array(
	'Account Payables'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List AccountPayable', 'url'=>array('index')),
	array('label'=>'Create AccountPayable', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('account-payable-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Account Payables</h1>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'account-payable-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		/*'id',
		'Fk_file_id',*/
		'invoice_number',
		'invoice_date',
		'invoice_amount',
		'description',
		/*
		'created_at',
		'updated_at',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
