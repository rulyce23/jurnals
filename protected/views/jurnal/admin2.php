<?php
/* @var $this JurnalController */
/* @var $model Jurnal */

$this->breadcrumbs=array(
	'Jurnal',
	'Editor',
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

<h1>Edit Jurnal</h1>


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
		'artikel',
		'kata_kunci',
		'penulis',
		'template' => '{view}{update3}',
			  'buttons' => array(
                  'update3' => array(
                    'label' => 'Lihat Data',
                    'url' => 'Yii::app()->createUrl("jurnal/update3", array("id_jurnal"=>$data->id_jurnal))',
                    'imageUrl' => Yii::app()->baseUrl . '/icon/update.png',
                ),
                ),
	),
)); ?>
