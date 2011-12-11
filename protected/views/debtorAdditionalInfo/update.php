<?php
$this->breadcrumbs=array(
	'Debtor Additional Infos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List DebtorAdditionalInfo', 'url'=>array('index')),
	array('label'=>'Create DebtorAdditionalInfo', 'url'=>array('create')),
	array('label'=>'View DebtorAdditionalInfo', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage DebtorAdditionalInfo', 'url'=>array('admin')),
);
?>

<h1>Update DebtorAdditionalInfo <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>