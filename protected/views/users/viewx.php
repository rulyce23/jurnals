
 <?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Lihat Detail Users',
	$model->id_user,
);
?>
   <div class="widget" id='lol'>
            <div class="title"></div>                          
            <table cellpadding="0" cellspacing="0" border="0" class="display dTable">
<h1>Detail Profile #<?php echo $model->id_user; ?></h1>
  
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		array('type'=>'raw',
		'label'=>'Gambar',
		'value'=>html_entity_decode(CHtml::image(Yii::app()->baseUrl.'/picture/'.$model->picture,'',
		array('width'=>400,'height'=>500)))
		),
		'username',
		'nama',
		'jk',
		'pendidikan',
		'telepon',
		'email',
		'level',
		),
)); ?>
 <a href="#" title="" onclick="printDiv('lol')" class="smallButton" style="margin: 5px;"><img src="HTML/images/icons/dark/inbox2.png" alt=""></a>

     
      <script>
            function printDiv(divName) {
                       var printContents = document.getElementById(divName).innerHTML;
                       var originalContents = document.body.innerHTML;

                       document.body.innerHTML = printContents;

                       window.print();

                       document.body.innerHTML = originalContents;
                  }
      </script>
