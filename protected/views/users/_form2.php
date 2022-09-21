<?php
/* @var $this UsersController */
/* @var $model Users */
/* @var $form CActiveForm */
?>
<?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>'Register',
		));
		?>
<center>
		<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'users-form',
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('enctype'=>'multipart/form-data'),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nama'); ?>
		<?php echo $form->textField($model,'nama',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'nama'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'nrp_nidn'); ?>
		<?php echo $form->textField($model,'nrp_nidn',array('size'=>30,'maxlength'=>30)); ?>
		<p><span class="label label-info">Note :</span>NIDN wajib Diisi & dibutuhkan apabila anda telah mempunyai id NIDN & apabila tidak diharapkan untuk tidak diwajibkan untuk diisi.</p>
		<?php echo $form->error($model,'nrp_nidn'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'jk'); ?>
		<?php echo $form->radioButtonList($model,'jk',
array('Laki-Laki'=>'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L','Perempuan'=>'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;P'),
array(
'template'=>'{input}{label}',
'separator'=>'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;',
'labelOptions'=>array(
'style'=> '
padding-left:10px;
width:15px;
float:left;
'),
'style'=>'float:center;',
));
?><?php echo $form->error($model,'jk'); ?>
	</div>


	
	<div class="row">
		<?php echo $form->labelEx($model,'alamat'); ?>
		<?php echo $form->textField($model,'alamat',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'alamat'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'pendidikan'); ?>
		<?php echo $form->textField($model,'pendidikan',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'pendidikan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telepon'); ?>
		<?php echo $form->textField($model,'telepon',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'telepon'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>
	
		<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>     
		<?php echo $form->dropDownList($model,'status', 
                        array('Mahasiswa' =>'Mahasiswa', 'Dosen' =>'Dosen'), array('empty' => '(Pilih Jenis Kategori)'));?>
		<?php echo $form->error($model,'kategori'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<?php echo $form->labelEx($model,'level'); ?>
	  <?php echo $form->dropDownList($model,'level', 
                        array(				
						'Editor' =>'Editor',
							'Admin' =>'Admin',
							'Author' =>'Author',
							'Reviewer' =>'Reviewer',
							'Guest' =>'Guest',
						),
						array('empty' => '(Pilih Level)','maxlength'=>50)); ?> 
						<?php echo $form->error($model,'level'); ?>
						
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Submit' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>
<?php 
$this->endWidget();
?>
</div><!-- form -->