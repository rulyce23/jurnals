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
		<?php echo $form->labelEx($model,'issn_isbn'); ?>
		<?php echo $form->textField($model,'issn_isbn'); ?>
		<?php echo $form->error($model,'issn_isbn'); ?>
	</div>
	
<div class="row">
		<?php echo $form->labelEx($model,'volume'); ?>
		<?php echo $form->textField($model,'volume'); ?>
		<?php echo $form->error($model,'volume'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'no'); ?>
		<?php echo $form->textField($model,'no'); ?>
		<?php echo $form->error($model,'no'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hal'); ?>
		<?php echo $form->textField($model,'hal'); ?>
		<?php echo $form->error($model,'hal'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'thn'); ?>
		<?php echo $form->textField($model,'thn'); ?>
		<?php echo $form->error($model,'thn'); ?>
	</div>
		
	<div class="row">
		<?php echo $form->labelEx($model,'gambar'); ?>
		<?php echo $form->fileField($model,'gambar',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'gambar'); ?>
	</div>
	
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create & Submit' : 'Save'); ?>
			<a class="btn btn-danger btn-small" id="yw0" href="http://localhost/jurnalfix/index.php?r=site/index">Cancel</a>
		
	</div>
</center>
<?php $this->endWidget(); ?>
<?php $this->endWidget(); ?>
</div>