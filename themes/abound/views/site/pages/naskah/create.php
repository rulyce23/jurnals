<?php
/* @var $this NaskahController */
/* @var $model TNaskah */

$this->breadcrumbs=array(
	'Tnaskahs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TNaskah', 'url'=>array('index')),
	array('label'=>'Manage TNaskah', 'url'=>array('admin')),
);
?>

<h1>Create TNaskah</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>