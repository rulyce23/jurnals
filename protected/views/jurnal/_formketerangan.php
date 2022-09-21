<?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			
		));
		?>
<div class="form">
<center>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'jurnal-form',
	'enableAjaxValidation'=>false,
    // Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'ket_admin'); ?>
		<?php echo $form->textArea($model,'ket_admin',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'ket_admin'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? ' Submit' : 'Save'); ?>
		<a class="btn btn-danger btn-small" id="yw0" href="http://localhost/jurnalfix/index.php?r=site/index">Cancel</a>
		
	</div>
</center>
<?php $this->endWidget(); ?>
<?php $this->endWidget(); ?>
</div>