<?php
/* @var $this TBeritaController */
/* @var $model TBerita */

$this->breadcrumbs=array(
	'Lihat Data berita',
	$model->id_berita,
);

?>

<h1>Lihat Informasi Berita #<?php echo $model->id_berita; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
	
		array('type'=>'raw',
		'label'=>'Gambar',
		'value'=>html_entity_decode(CHtml::image(Yii::app()->baseUrl.'/berita/'.$model->b_gambar,'',
		array('width'=>400,'height'=>500)))
		),
		//'id',
		'jenis',
		'penulis',
		'tanggal',
		'judul',
	),
)); ?>
