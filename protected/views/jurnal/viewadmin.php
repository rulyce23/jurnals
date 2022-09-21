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
			'title'=>'Lihat Info Admin',
		));
		?>
<h1>Lihat Info Jurnal Dari Admin #<?php echo $model->id_jurnal; ?>
		</h1>		
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idUser.nrp_nidn',
		'kata_kunci',
		'penulis',
		'abstraksi',
		'berkas',
		'ket_admin',
		'publikasi',
),
)); ?>

<?php 
$this->endWidget();
?>
	
