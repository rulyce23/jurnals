<?php
/* @var $this JurnalController */
/* @var $model Jurnal */

$this->breadcrumbs=array(
	'Jurnal'=>array('index'),
	'Buat Data Publikasi Jurnal',
);

?>
<center>
<h1>Buat Data Publikasi Jurnal</h1>
</center>
<?php $this->renderPartial('/./kategori/_form', array('model'=>$kategori)); ?>