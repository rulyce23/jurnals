<?php
/* @var $this JurnalController */
/* @var $model Jurnal */

$this->breadcrumbs=array(
	'Jurnal',
	'Reviewer',
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
<center><h1>Reviewer Jurnal</h1></center>

<?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>'',
		));
		
?>


<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'jurnal-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_jurnal',
		//'id_user',
		//'Jurnals.nrp_nidn',
		'artikel',
		'kata_kunci',
		'penulis',
		/*
		'judul',
		'abstraksi',
		'tgl_diajukan',
		'berkas',
		*/
				array(      
   'class'=>'CLinkColumn',      
   'header'=>'Download',      
   'urlExpression'=>'Yii::app()->request->baseUrl."/upload/".$data->berkas',      
   'label'=>'Unduh',  
		),
		array(
			'class'=>'CButtonColumn',
			 'template' => '{review}{view}{viewadmin}',
			 'header'=>'Action',
			    'buttons' => array(
                  'review' => array(
                    'label' => 'Review Jurnal',
                    'url' => 'Yii::app()->createUrl("jurnal/review", array("id_jurnal"=>$data->id_jurnal))',
                    'imageUrl' => Yii::app()->baseUrl . '/icon/write.png',
                ),
	 'viewadmin' => array(
                    'label' => 'Lihat Informasi Jurnal Dari Admin',
                    'url' => 'Yii::app()->createUrl("jurnal/viewadmin", array("id_jurnal"=>$data->id_jurnal))',
                    'imageUrl' => Yii::app()->baseUrl . '/icon/view.png',
                ),
		),
		),
	),
)); ?>
<?php 
$this->endWidget();
?>