<?php
$this->breadcrumbs=array(
	'Account Receivables'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List AccountReceivable', 'url'=>array('index')),
	array('label'=>'Create AccountReceivable', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('account-receivable-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Account Receivables</h1>


<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'account-receivable-grid',
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
