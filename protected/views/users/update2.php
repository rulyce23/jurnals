<?php
/* @var $this UsersController */
/* @var $model Users */

$this->breadcrumbs=array(
	'Users',
	'Perbarui Users Akun ',
);
?>
<center>
<h1>Perbarui User Akun <?php echo $model->id_user; ?></h1>
</center>
<?php $this->renderPartial('_form2', array('model'=>$model)); ?>