<?php
/* @var $this ChatController */
/* @var $model Chat */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'chat-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>
<?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			
		));
		?>
		<center>
	<p class="note"><span class='label label-info'>Silahkan anda isi form percakapan berikut ini, apabila anda ingin mengirim pesan sesuatu</SPAN></p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nama'); ?>
		<?php echo $form->textField($model,'nama',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'nama'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>35,'maxlength'=>35)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ditujukan'); ?>
		<?php echo $form->textField($model,'ditujukan',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'ditujukan'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'Subject'); ?>
		<?php echo $form->textField($model,'Subject',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'Subject'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'komen'); ?>
		<?php echo $form->textArea($model,'komen',array('size'=>60,'maxlength'=>120)); ?>
		<?php echo $form->error($model,'komen'); ?>
	</div>
	
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Send' : 'Save',array('class'=>'btn btn-danger')); ?>
	</div>

<?php $this->endWidget(); ?>
<?php $this->endWidget(); ?>

</div><!-- form -->