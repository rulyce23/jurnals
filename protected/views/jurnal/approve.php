<?php
/* @var $this PenerimaController */
/* @var $model Penerima */

$this->breadcrumbs=array(
	'Publikasi',
	'Publishing Jurnal',
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
				Anda dapat mengontrol keputusan Terbit / Tidaknya Jurnal Pada menu ini dari saran keputusan yang telah diberikan keterangannya oleh pihak Reviewer
			</div>

<?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>'Kelola Jurnal',
		));
		
?>
			<center>
<h1>Keputusan Penerbitan Jurnal</h1>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'jurnal-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
	array(
		'header' => 'No',
		'value' => '$row+1',
		),
		'artikel',
		'kata_kunci',
		'idKategori.judul_kategori',
		'volume',
		'no',
		'hal',
		'publikasi',
		'status_admin',
		array(
            'class'=>'CButtonColumn',
            'template' => '{viewp}{approved}{decline}{keterangan}{viewreport}{viewreview2}',
			
            'buttons' => array(
                  'viewp' => array(
                    'label' => 'Lihat Data',
                    'url' => 'Yii::app()->createUrl("jurnal/view2", array("id_jurnal"=>$data->id_jurnal))',
                    'imageUrl' => Yii::app()->baseUrl . '/icon/view.png',
                ),
				'approved' => array(
                    'label' => 'approved',
                    'url' => 'Yii::app()->createUrl("jurnal/approved", array("id_jurnal"=>$data->id_jurnal))',
                    'imageUrl' => Yii::app()->baseUrl . '/icon/agree.png',
                ),
				'decline' => array(
                    'label' => 'Decline',
                    'url' => 'Yii::app()->createUrl("jurnal/declined", array("id_jurnal"=>$data->id_jurnal))',
                    'imageUrl' => Yii::app()->baseUrl . '/icon/decline.png',
				),
				
				'keterangan' => array(
                    'label' => 'Buat Keterangan U/ Author',
                    'url' => 'Yii::app()->createUrl("jurnal/keterangan", array("id_jurnal"=>$data->id_jurnal))',
                    'imageUrl' => Yii::app()->baseUrl . '/icon/write.png',
				),
				'viewreport' => array(
                    'label' => 'Lihat Review',
                    'url' => 'Yii::app()->createUrl("jurnal/viewreport", array("id_jurnal"=>$data->id_jurnal))',
                    'imageUrl' => Yii::app()->baseUrl . '/icon/review-icon-6.png',
				),
					'viewreview2' => array(
                    'label' => 'Lihat Review',
                    'url' => 'Yii::app()->createUrl("jurnal/viewreview2", array("id_jurnal"=>$data->id_jurnal))',
                    'imageUrl' => Yii::app()->baseUrl . '/icon/review-icon-6.png',
				),
				),
				),
				),
            
)); ?>


<center>

<?php echo CHtml::endForm(); ?>
</div>
    <?php $this->endWidget();?>

