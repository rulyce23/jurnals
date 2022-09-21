<?php
/* @var $this JurnalController */
/* @var $model Jurnal */

$this->breadcrumbs=array(
	'Download',
);



Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#jurnal-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<div class="flash-info round">
				Anda Dapat Mengunduh Jurnal DI WEB E-Jurnal ini.!
			</div>
<?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>'Menu Unduh Data',
		));
		?>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'jurnal-grid',
	'dataProvider'=>$model->search(),
	'columns'=>array(
		'Jurnals.nrp_nidn',
		'anggota',
		'kata_kunci',
		'penulis',
		'judul',
		'tgl_diajukan',
		'berkas',
		'Publish.status',
			array(      
   'class'=>'CLinkColumn',      
   'header'=>'Download',      
   'urlExpression'=>'Yii::app()->request->baseUrl."/upload/".$data->berkas',      
   'label'=>'Unduh',  
		),
	),
)); ?>
<?php 
$this->endWidget();
?>
	
