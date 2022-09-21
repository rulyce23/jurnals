<?php
/* @var $this JurnalController */
/* @var $model Jurnal */

$this->breadcrumbs=array(
	'Jurnal',
	'Buat Keterangan Jurnal Pra Edit',
);

?>
<center>
<h1>Buat Keterangan Jurnal Pra Edit</h1>
</center>
<?php $this->renderPartial('_formketeranganeditor', array('model'=>$model)); ?>