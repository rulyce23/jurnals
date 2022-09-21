<?php
/* @var $this JurnalController */
/* @var $model Jurnal */

$this->breadcrumbs=array(
	'Jurnal',
	'Buat Keterangan Publikasi Jurnal',
);

?>
<center>
<h1>Buat Keterangan Jurnal</h1>
</center>
<?php $this->renderPartial('_formketerangan', array('model'=>$model)); ?>