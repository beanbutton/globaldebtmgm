<?php
$this->breadcrumbs=array(
	'Debtor Additional Infos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List DebtorAdditionalInfo', 'url'=>array('index')),
	array('label'=>'Manage DebtorAdditionalInfo', 'url'=>array('admin')),
);
?>

<h1>Create DebtorAdditionalInfo</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>