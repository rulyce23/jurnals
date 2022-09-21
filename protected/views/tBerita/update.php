<?php
/* @var $this TBeritaController */
/* @var $model TBerita */

$this->breadcrumbs=array(
	'Berita',
	'Pembaruan',
);

?>

<h1>Pembaruan Informasi Berita Jurnal <?php echo $model->id_berita; ?></h1>

<?php $this->renderPartial('_form2', array('model'=>$model)); ?>