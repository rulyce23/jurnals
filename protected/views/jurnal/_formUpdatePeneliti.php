<?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			
		));
		?>
<div class="form">
<center>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'jurnal-form',
	'enableAjaxValidation'=>false,
     'htmlOptions'=>array('enctype'=>'multipart/form-data'),
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'artikel'); ?>
		<?php echo $form->textArea($model,'artikel',array('rows'=>6, 'cols'=>50,'placeholder'=>"Contoh: Penerapan Algoritma Levenshtein,Penerapan Algoritma AHP ")); ?>
		<?php echo $form->error($model,'anggota'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kata_kunci'); ?>
		<?php echo $form->textField($model,'kata_kunci',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'kata_kunci'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'penulis'); ?>
		<?php echo $form->textField($model,'penulis',array('size'=>50)); ?>
		<?php echo $form->error($model,'penulis'); ?>
	</div>


	<div class="row">
		<?php echo $form->labelEx($model,'abstraksi'); ?>
		<?php echo $form->textArea($model,'abstraksi',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'abstraksi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tgl_diajukan'); ?>
		<?php echo $form->textField($model,'tgl_diajukan',array('readonly'=>true,'value'=>date('Y-m-d'))); ?>
		<?php echo $form->error($model,'tgl_diajukan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'berkas'); ?>
		<?php echo $form->fileField($model,'berkas',array('rows'=>6, 'cols'=>50,)); ?>
		<br><span class='label label-info'>Anda Dapat Memilih Ulang Berkas!,..Apabila Anda Dalam mengajukan terdapat kesalahan dalam memilih Berkas</p></br></span>"
		<?php echo $form->error($model,'berkas'); ?>
	</div>
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create & Submit' : 'Save',array('button class="btn btn-primary"')); ?>
		<a class="btn btn-danger btn-small" id="yw0" href="http://localhost/jurnalfix/index.php?r=site/index">Cancel</a>
		
	</div>
</center>
<?php $this->endWidget(); ?>
<?php $this->endWidget(); ?>
</div>