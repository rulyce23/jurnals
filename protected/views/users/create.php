<?php
/* @var $this UsersController */
/* @var $model Users */

$this->breadcrumbs=array(
	'User'=>array('index'),
	'Register',
);


?>

<h1>Buat Akun User Baru</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>