<?php
/* @var $this NaskahController */
/* @var $model TNaskah */

$this->breadcrumbs=array(
	'Tnaskahs'=>array('index'),
	$model->Judul=>array('view','id'=>$model->Judul),
	'Update',
);

$this->menu=array(
	array('label'=>'List TNaskah', 'url'=>array('index')),
	array('label'=>'Create TNaskah', 'url'=>array('create')),
	array('label'=>'View TNaskah', 'url'=>array('view', 'id'=>$model->Judul)),
	array('label'=>'Manage TNaskah', 'url'=>array('admin')),
);
?>

<h1>Update TNaskah <?php echo $model->Judul; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>