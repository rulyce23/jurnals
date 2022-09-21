<?php
/* @var $this NaskahController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tnaskahs',
);

$this->menu=array(
	array('label'=>'Create TNaskah', 'url'=>array('create')),
	array('label'=>'Manage TNaskah', 'url'=>array('admin')),
);
?>

<h1>Tnaskahs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
