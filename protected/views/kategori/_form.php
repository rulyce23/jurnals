<?php
/* @var $this KategoriController */
/* @var $model Kategori */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'kategori-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
	<?php echo $form->labelEx($model,'jenis_kategori'); ?>
	  <?php echo $form->dropDownList($model,'jenis_kategori', 
                        array(				
						'Jurnal' =>'Jurnal',
							'Prosiding' =>'Prosiding',
							'Artikel' =>'Artikel',
							'Buku' =>'Buku',
						),
						array('empty' => '(Pilih Level)','maxlength'=>50)); ?> 
						<?php echo $form->error($model,'jenis_kategori'); ?>
						
	<div class="row">
		<?php echo $form->labelEx($model,'judul_kategori'); ?>
		<?php echo $form->textField($model,'judul_kategori',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'judul_kategori'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'tgl_publish'); ?>
		
		<?php echo $form->textField($model,'tgl_publish',array('readonly'=>true,'value'=>date('Y-m-d'))); ?>
		<?php echo $form->error($model,'tgl_publish'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->