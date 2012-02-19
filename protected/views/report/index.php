<?php
$this->breadcrumbs=array(
	'Debtor Progresses',
);

$this->menu=array(
	array('label'=>'Create Reports', 'url'=>array('create')),
	array('label'=>'Manage Reports', 'url'=>array('admin')),
);
?>

<h1>Debtor Reports</h1>

<p>
	<?php echo CHtml::link( CHtml::encode( "Download Report"), Yii::app()->baseUrl . '/file_uploads/' . "memo"); ?>
</p>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
