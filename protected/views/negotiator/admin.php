<?php
$this->breadcrumbs=array(
	'Negotiators'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Negotiator', 'url'=>array('index')),
	array('label'=>'Create Negotiator', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('negotiator-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Negotiators</h1>

<br>
<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'negotiator-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		/*'id',
		'Fk_debtor_id',*/
		'name',
		'address',
		'telephone',
		'faxnumber',
		'email',
		/*'created_at',
		'updated_at',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
