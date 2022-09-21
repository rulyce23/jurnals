<?php
/* @var $this TReviewController */
/* @var $data TReview */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_review')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_review), array('view', 'id'=>$data->id_review)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_jurnal')); ?>:</b>
	<?php echo CHtml::encode($data->id_jurnal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama')); ?>:</b>
	<?php echo CHtml::encode($data->nama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('komentar')); ?>:</b>
	<?php echo CHtml::encode($data->komentar); ?>
	<br />


</div>