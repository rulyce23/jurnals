<?php
/* @var $this UsersController */
/* @var $model Users */

$this->breadcrumbs=array(
	'User'=>array('index'),
	'Reset Password',
);


?>

<h1>Buat Akun User Baru</h1>

<?php $this->renderPartial('_formreset', array('model'=>$model)); ?>