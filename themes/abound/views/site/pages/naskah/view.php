<?php
/* @var $this NaskahController */
/* @var $model TNaskah */

$this->breadcrumbs=array(
	'Tnaskahs'=>array('index'),
	$model->Judul,
);

$this->menu=array(
	array('label'=>'List TNaskah', 'url'=>array('index')),
	array('label'=>'Create TNaskah', 'url'=>array('create')),
	array('label'=>'Update TNaskah', 'url'=>array('update', 'id'=>$model->Judul)),
	array('label'=>'Delete TNaskah', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Judul),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TNaskah', 'url'=>array('admin')),
);
?>

<h1>View TNaskah #<?php echo $model->Judul; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Judul',
		'Penulis',
		'File',
		'Tanggal',
		'Abstrak',
		'Volume',
		'Departement',
		'No_Seri',
		'Keterangan',
		'Konfirmasi',
	),
)); ?>
