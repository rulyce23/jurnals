<?php
/* @var $this TBeritaController */
/* @var $model TBerita */
/* @var $form CActiveForm */
?>
<?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>'Buat Informasi Berita Baru',
		));
		
?>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tberita-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
     'htmlOptions'=>array('enctype'=>'multipart/form-data'),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<center><?php echo $form->errorSummary($model); ?>

	<div class="row">
	
		<?php echo $form->labelEx($model,'jenis'); ?>
	  <?php echo $form->dropDownList($model,'jenis', 
                        array('Penelitian' =>'Penelitian', 
						'Pengabdian' =>'Pengabdian',
							'Pendidikan' =>'Pendidikan'
						),
						array('empty' => '(Pilih Kriteria Jenis Jurnal)','maxlength'=>50)); ?> 
						<?php echo $form->error($model,'jenis'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'penulis'); ?>
		<?php echo $form->textField($model,'penulis',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'penulis'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tanggal'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array('attribute' => 'tanggal',
               'language' => 'en',
               'model' => $model,
               'options' => array(
                    'mode' => 'focus',
                    'dateFormat' => 'yy-mm-dd',
                    'showAnim' => 'slideDown',    
					'changeMonth'=> 'true',
                'changeYear'=> 'true',),
               'htmlOptions' => array('size' => 30, 'class' => 'date')
               )
            ); ?>
		<?php echo $form->error($model,'tanggal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'judul'); ?>
		<?php echo $form->textArea($model,'judul',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'judul'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'deskripsi_acara'); ?>
		<?php echo $form->textArea($model,'deskripsi_acara',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'deskripsi_acara'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'b_gambar'); ?>
		<?php echo $form->fileField($model,'b_gambar',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'b_gambar'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Submit' : 'Save'); ?>
	</div>
</center>
<?php $this->endWidget(); ?>
<?php $this->endWidget(); ?>

</div><!-- form -->