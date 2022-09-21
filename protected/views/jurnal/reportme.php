<?php
/* @var $this JurnalController */
/* @var $model Jurnal */

$this->breadcrumbs=array(
	'Jurnal',
	'Buat Keterangan Edit',
);

?>
<center>
<h1>Buat Keterangan Jurnal Pra Edit</h1>
</center>
<?php $this->renderPartial('_formreportedit', array('model'=>$model)); ?>