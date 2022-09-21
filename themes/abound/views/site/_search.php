<?php
/* @var $this JurnalController */
/* @var $model Jurnal */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<center><div class="row">
		<?php echo $form->label($model,' Select Berdasarkan Kategori'); ?>
                <?php echo $form->dropDownList($model,'Kategori', 
                        array('Bisnis' =>'Bisnis', 'SPK' =>'SPK','Management Information'=>'Management Information',
                            'Komputer'=>'Komputer','Desain Grafis'=>'Desain Grafis',
                            'Akuntansi'=>'Akuntansi',
                            'Management Proyek'=>'Management Proyek',
                            'SDM'=>'SDM',
							'Kantor'=>'Kantor',
							'Education'=>'Education',
							'Goverment'=>'Goverment'), array('empty' => '(Pilih Jenis Kategori)'));?>
		<?php echo $form->error($model,'Kategori'); ?>
	</div></center>

	<center><div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->