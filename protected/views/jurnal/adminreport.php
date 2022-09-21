<?php
/* @var $this UsersController */
/* @var $model Users */

$this->breadcrumbs=array(
	'Jurnal',
	'Report',
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
<center>
<h1>Laporan Jurnal</h1>
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
		'artikel',
		'kata_kunci',
		'penulis',
		array(
			'class'=>'CButtonColumn',
			 'template' => '{viewme}{reportme}',
			  'buttons' => array(
                  'viewme' => array(
                    'label' => 'Update Profile',
                    'url' => 'Yii::app()->createUrl("jurnal/viewme", array("id_jurnal"=>$data->id_jurnal))',
                    'imageUrl' => Yii::app()->baseUrl . '/icon/view.png',
                ),
				'reportme' => array(
                    'label' => 'Laporkan data',
                    'url' => 'Yii::app()->createUrl("jurnal/reportme", array("id_jurnal"=>$data->id_jurnal))',
                    'imageUrl' => Yii::app()->baseUrl . '/icon/write.png',
                ),
		),
		),
	),
)); ?>
<?php 
$this->endWidget();
?>
	
