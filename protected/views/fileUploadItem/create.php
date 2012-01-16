<?php
	$this -> breadcrumbs = array('File Uploads' => array('index'), 'Create', );

	$this -> menu = array( 
	array('label' => 'List File Uploads', 
		'url' => array('index')), 
		array('label' => 'Manage File Uploads', 
		'url' => array('admin')), );
?>

<h1>File Uploads</h1>
<?php echo $this -> renderPartial('_form', array('model' => $model));?>