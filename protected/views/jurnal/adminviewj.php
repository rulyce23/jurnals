<?php
/* @var $this UsersController */
/* @var $model Users */

$this->breadcrumbs=array(
	'Jurnal',
	'Riwayat',
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
<h1>Riwayat Jurnal Saya</h1>
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
	'itemsCssClass'=>'table table-striped table-bordered table-hover',
	//'filter'=>$model,
	'columns'=>array(
		'id_jurnal',
		'artikel',
		'kata_kunci',
		'penulis',
		array(
			'class'=>'CButtonColumn',
			 'template' => '{viewme}{update}',
			  'buttons' => array(
                  'viewme' => array(
                    'label' => 'Update Profile',
                    'url' => 'Yii::app()->createUrl("jurnal/viewme", array("id_jurnal"=>$data->id_jurnal))',
                    'imageUrl' => Yii::app()->baseUrl . '/icon/view.png',
                ),
		),
	),
	),
)); ?>


<a href="#" title="" onclick="printDiv('lol')" class="smallButton" style="margin: 5px;"><img src="HTML/images/icons/dark/inbox2.png" alt=""></a>
<center><?php echo CHtml::link('Lihat Reviewer & Lihat Jurnal Saya', array('jurnal/adminx'), array('class'=>'btn btn-primary')); ?>
  <script>
            function printDiv(divName) {
                       var printContents = document.getElementById(divName).innerHTML;
                       var originalContents = document.body.innerHTML;

                       document.body.innerHTML = printContents;

                       window.print();

                       document.body.innerHTML = originalContents;
                  }
      </script>
<?php 
$this->endWidget();
?>

	
