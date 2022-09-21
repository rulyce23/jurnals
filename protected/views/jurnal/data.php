<?php
		
/* @var $this JurnalController */
/* @var $model Jurnal */

$this->breadcrumbs=array(
	'Jurnal',
	'Jurnal Manager',
);


Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#users-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");	
?>
<div class="widget" id='lol'>                       

<div class="flash-info round">
				Anda Dapat Mencari Jurnal Dengan Search Engine Pada Form Anda
			</div>
<?php 
$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>'',
		));
	?>

		<center>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'jurnal-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'artikel',
		'idUser.nrp_nidn',
		'kata_kunci',
		//'kategori',
	     'tgl_diajukan',
		'berkas',
		array(
			'class'=>'CButtonColumn',
			'template' => '{viewjurnal}',
			 'buttons' => array(
                  'viewjurnal' => array(
                    'label' => 'Lihat Data',
                    'url' => 'Yii::app()->createUrl("jurnal/viewjurnal", array("id"=>$data->id_jurnal))',
                    'imageUrl' => Yii::app()->baseUrl . '/icon/view.png',
                ),
		),
	),),
)); ?>

<?php $this->endWidget(); ?>