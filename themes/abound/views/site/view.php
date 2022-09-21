<?php
/* @var $this JurnalController */
/* @var $model Jurnal */

$this->breadcrumbs=array(
	'Jurnal'=>array('index'),
	$model->id_jurnal,
);

$this->menu=array(
	array('label'=>'List Jurnal', 'url'=>array('index2')),
	array('label'=>'Create Jurnal', 'url'=>array('create')),
	array('label'=>'Update Jurnal', 'url'=>array('update', 'id'=>$model->id_jurnal)),
	array('label'=>'Delete Jurnal', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_jurnal),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Jurnal', 'url'=>array('admin')),
);
?>

<h1>View Pengaju #<?php echo $model->id_jurnal; ?></h1>

<?php echo CHtml::link('_form', array('create', 'id'=>$model->id_jurnal)); ?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_jurnal',
		'id_member',
		'anggota',
		'Kategori',
		'Penulis',
		'judul',
		'nama_jurnal',
		'Abstraksi',
		'vol',
		'no',
		'hal',
		'publikasi',
		'tahun',
		'files',
	),
)); ?>
