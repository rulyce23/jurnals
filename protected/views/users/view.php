<?php
/* @var $this UsersController */
/* @var $model Users */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->id_user,
);


?>

<h1>View Users #<?php echo $model->id_user; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_user',
		'nama',
		'jk',
		'telepon',
		'email',
		'pendidikan',
		'alamat',
		//'level',
		//'akses',
		//'username',
		//'password',
		'nrp_nidn',
		//'picture',
	),
)); ?>
