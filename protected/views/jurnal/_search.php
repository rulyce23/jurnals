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

	<div class="row">
		<?php echo $form->label($model,'id_jurnal'); ?>
		<?php echo $form->textField($model,'id_jurnal'); ?>
	</div>
	
	

	<div class="row">
		<?php echo $form->label($model,'id_user'); ?>
		<?php echo $form->textField($model,'id_user'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'artikel'); ?>
		<?php echo $form->textArea($model,'artikel',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kata_kunci'); ?>
		<?php echo $form->textField($model,'kata_kunci',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'penulis'); ?>
		<?php echo $form->textField($model,'penulis',array('size'=>50,'maxlength'=>50)); ?>
	</div>
	
	
	<div class="row">
		<?php echo $form->label($model,'volume'); ?>
		<?php echo $form->textField($model,'volume',array('size'=>50,'maxlength'=>50)); ?>
	</div>
	
		<div class="row">
		<?php echo $form->label($model,'no'); ?>
		<?php echo $form->textField($model,'no',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hal'); ?>
		<?php echo $form->textField($model,'hal',array('size'=>50,'maxlength'=>50)); ?>
	</div>

		<div class="row">
		<?php echo $form->label($model,'issn_isbn'); ?>
		<?php echo $form->textField($model,'issn_isbn',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ket_editor'); ?>
		<?php echo $form->textField($model,'ket_editor',array('size'=>50,'maxlength'=>50)); ?>
	</div>
	
	<div class="row">
		<?php echo $form->label($model,'ket_reviewer'); ?>
		<?php echo $form->textField($model,'ket_reviewer',array('size'=>50,'maxlength'=>50)); ?>
	</div>
	
	<div class="row">
		<?php echo $form->label($model,'ket_admin'); ?>
		<?php echo $form->textField($model,'ket_admin',array('size'=>50,'maxlength'=>50)); ?>
	</div>
	
	<div class="row">
		<?php echo $form->label($model,'status_admin'); ?>
		<?php echo $form->textField($model,'status_admin',array('size'=>50,'maxlength'=>50)); ?>
	</div>
	
	
	<div class="row">
		<?php echo $form->label($model,'status_editor'); ?>
		<?php echo $form->textField($model,'status_editor',array('size'=>50,'maxlength'=>50)); ?>
	</div>
	
	
	<div class="row">
		<?php echo $form->label($model,'status_reviewer'); ?>
		<?php echo $form->textField($model,'status_reviewer',array('size'=>50,'maxlength'=>50)); ?>
	</div>
	
	<div class="row">
		<?php echo $form->label($model,'abstraksi'); ?>
		<?php echo $form->textArea($model,'abstraksi',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tgl_diajukan'); ?>
		<?php echo $form->textField($model,'tgl_diajukan'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'berkas'); ?>
		<?php echo $form->textArea($model,'berkas',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->