<?php
/* @var $this JurnalController */
/* @var $model Jurnal */

$this->breadcrumbs=array(
	'Jurnal',
	'Perbarui',
);

?>

<h1>Perbarui Jurnal Saya <?php echo $model->id_jurnal; ?></h1>

<?php $this->renderPartial('_formUpdatePeneliti', array('model'=>$model)); ?>