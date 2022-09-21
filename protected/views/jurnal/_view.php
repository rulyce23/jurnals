<?php
/* @var $this JurnalController */
/* @var $data Jurnal */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_jurnal')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_jurnal), array('view', 'id_jurnal'=>$data->id_jurnal)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_user')); ?>:</b>
	<?php echo CHtml::encode($data->id_user); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('artikel')); ?>:</b>
	<?php echo CHtml::encode($data->artikel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kata_kunci')); ?>:</b>
	<?php echo CHtml::encode($data->kata_kunci); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('penulis')); ?>:</b>
	<?php echo CHtml::encode($data->penulis); ?>
	<br />



	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('abstraksi')); ?>:</b>
	<?php echo CHtml::encode($data->abstraksi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tgl_diajukan')); ?>:</b>
	<?php echo CHtml::encode($data->tgl_diajukan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('berkas')); ?>:</b>
	<?php echo CHtml::encode($data->berkas); ?>
	<br />

	*/ ?>

</div>