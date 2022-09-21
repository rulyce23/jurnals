<?php
/* @var $this ChatController */
/* @var $data Chat */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->nama), array('view', 'id'=>$data->nama)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ditujukan')); ?>:</b>
	<?php echo CHtml::encode($data->ditujukan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('komen')); ?>:</b>
	<?php echo CHtml::encode($data->komen); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('waktu')); ?>:</b>
	<?php echo CHtml::encode($data->waktu); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cek')); ?>:</b>
	<?php echo CHtml::encode($data->cek); ?>
	<br />


</div>