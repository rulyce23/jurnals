<?php
/* @var $this JurnalController */
/* @var $model Jurnal */

$this->breadcrumbs=array(
	'Jurnal',
	'Perbarui Jurnal Anda',
);

?>

<h1>Perbarui Jurnal Anda #<?php echo $model->id_jurnal; ?></h1>

<?php $this->renderPartial('_formupdate', array('model'=>$model)); ?>