<?php
/* @var $this JurnalController */
/* @var $model Jurnal */

$this->breadcrumbs=array(
	'Jurnal'=>array('index'),
	'Buat keterangan Review',
);

?>
<center>
<h1>Buat Ket Review</h1>
</center>
<?php $this->renderPartial('_formreview', array('model'=>$model)); ?>