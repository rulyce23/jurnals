<?php
/* @var $this TBeritaController */
/* @var $model TBerita */

$this->breadcrumbs=array(
	'Berita',
	'Kelola Berita',
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#tberita-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>'Kelola Info Berita',
		));
		
?>
<center>
<h1>Kelola Informasi Berita</h1>
</center>

<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'tberita-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'LUsers.nrp_nidn',
		'jenis',
		'penulis',
		'tanggal',
		'judul',
		/*
		'b_gambar',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
<?php $this->endWidget(); ?>
