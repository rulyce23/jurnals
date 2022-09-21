<?php
/* @var $this NaskahController */
/* @var $model TNaskah */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'Judul'); ?>
		<?php echo $form->textField($model,'Judul',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Penulis'); ?>
		<?php echo $form->textField($model,'Penulis',array('size'=>40,'maxlength'=>40)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'File'); ?>
		<?php echo $form->textField($model,'File',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Tanggal'); ?>
		<?php echo $form->textField($model,'Tanggal',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Abstrak'); ?>
		<?php echo $form->textField($model,'Abstrak',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Volume'); ?>
		<?php echo $form->textField($model,'Volume'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Departement'); ?>
		<?php echo $form->textField($model,'Departement',array('size'=>40,'maxlength'=>40)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'No_Seri'); ?>
		<?php echo $form->textField($model,'No_Seri'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Keterangan'); ?>
		<?php echo $form->textField($model,'Keterangan',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Konfirmasi'); ?>
		<?php echo $form->textField($model,'Konfirmasi',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->