<?php
/* @var $this JurnalController */
/* @var $model Jurnal */

$this->breadcrumbs=array(
	'Jurnals'=>array('index'),
	$model->id_kategori,
);
?>
<?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>'Lihat Detail Jurnal',
		));
		?>
<h1>Lihat Hasil Edit Jurnal #<?php echo $model->id_jurnal; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php $this->widget('application.extensions.qrcode.QRCodeGenerator',array(
                          'data' =>'Artikel:'.$model->artikel.',
						  Penulis :'.$model->penulis.',
						  URL :        http://www.ejournal.lpkia.ac.id',
                            'filename' => $model->id_jurnal.".png",		
                            'subfolderVar' => true,
                            'matrixPointSize' => 2,
                            'displayImage'=>true,
                            'errorCorrectionLevel'=>'M', // 1 to 10 only
                        )) ?>
		</h1>		
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idUser.nrp_nidn',
		'kata_kunci',
		'penulis',
		'issn_isbn',
		'abstraksi',
		'tgl_diajukan',
		'berkas',
		'volume',
		'no',
		'hal',
		
	),
)); ?>


<?php 
$this->endWidget();
?>
	
