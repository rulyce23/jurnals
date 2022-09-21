<?php
/* @var $this NaskahController */
/* @var $model TNaskah */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tnaskah-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Judul'); ?>
		<?php echo $form->textField($model,'Judul',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'Judul'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Penulis'); ?>
		<?php echo $form->textField($model,'Penulis',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'Penulis'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'File'); ?>
		<?php echo $form->textField($model,'File',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'File'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Tanggal'); ?>
		<?php echo $form->textField($model,'Tanggal',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'Tanggal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Abstrak'); ?>
		<?php echo $form->textField($model,'Abstrak',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'Abstrak'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Volume'); ?>
		<?php echo $form->textField($model,'Volume'); ?>
		<?php echo $form->error($model,'Volume'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Departement'); ?>
		<?php echo $form->textField($model,'Departement',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'Departement'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'No_Seri'); ?>
		<?php echo $form->textField($model,'No_Seri'); ?>
		<?php echo $form->error($model,'No_Seri'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Keterangan'); ?>
		<?php echo $form->textField($model,'Keterangan',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'Keterangan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Konfirmasi'); ?>
		<?php echo $form->textField($model,'Konfirmasi',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'Konfirmasi'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->