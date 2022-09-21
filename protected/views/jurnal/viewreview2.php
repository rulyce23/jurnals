<?php
/* @var $this JurnalController */
/* @var $model Jurnal */

$this->breadcrumbs=array(
	'Jurnals',
	$model->id_jurnal,
);
?>
<?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>'Lihat Hasil Review',
		));
		?>
<h1>Lihat Review Jurnal #<?php echo $model->id_jurnal; ?>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_jurnal',
		'nm_reviewed',
		'artikel',
		'status_reviewer',
		'ket_reviewer',
	),
)); ?>


<?php 
$this->endWidget();
?>
	
