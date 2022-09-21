<?php
/* @var $this TBeritaController */
/* @var $model TBerita */

$this->breadcrumbs=array(
	'Berita'=>array('index'),
	'Buat Informasi Berita Baru',
);

?>
<center>
<h1>Buat Informasi Berita Baru</h1>
</center>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>