<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->
        <!--mainmenu-->
	        
         <?php $this->widget('application.extensions.mbmenu.MbMenu',array( 
            'items'=>array( 
                array('label'=>'Home', 'url'=>array('/site/index')), 
                array('label'=>'Clients', 'url'=>array('/client/admin')), 
                array('label'=>'Creditors', 'url'=>array('/creditor')),
                array('label'=>'Debtors',
                  'items'=>array(
                     array('label'=>'Debtors Info',
                      'items'=>array(
                        array('label'=>'Create User', 'url'=>array('/debtor/create')),
                        array('label'=>'List Debtors', 'url'=>array('/debtor/admin')),
                          ),
                        ),
                     array('label'=>'Debtor Progress', 'url'=>array('/debtorProgress/admin')),
                     array('label'=>'Budget Info', 'url'=>array('/debtorBudgetInfo/admin')),
                     array('label'=>'Program Info', 'url'=>array('/debtorProgramInfo/admin')),
                     array('label'=>'Amortization', 'url'=>array('/amortization/admin')),
                     array('label'=>'Settlement Offer', 'url'=>array('/settlementOffer/admin')),
                   ),
                  ),
                array('label'=>'Admin', 'url'=>array('/user/create'), 
                  'items'=>array( 
                    array('label'=>'Add User', 'url'=>array('/user/create')),
                    array('label'=>'Change Password', 'url'=>array('/user/list')),
                    array('label'=>'Manage Employees', 'url'=>array('/employee/admin')),
                    array('label'=>'Financial Info', 'url'=>array('/debtorFinancialInfo/admin')),
                    array('label'=>'Manage Reports', 'url'=>array('/user/create')), 
                    array('label'=>'File Access', 'url'=>array('/user/create')), 
                   
                  ), 
                ),
                array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
		array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
		
            ),  
             
        )); ?> 
	
        <!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by Global Debt Freedom.<br/>
		All Rights Reserved.<br/>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>