<?php
/* @var $this NaskahController */
/* @var $data TNaskah */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Judul')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Judul), array('view', 'id'=>$data->Judul)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Penulis')); ?>:</b>
	<?php echo CHtml::encode($data->Penulis); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('File')); ?>:</b>
	<?php echo CHtml::encode($data->File); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Tanggal')); ?>:</b>
	<?php echo CHtml::encode($data->Tanggal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Abstrak')); ?>:</b>
	<?php echo CHtml::encode($data->Abstrak); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Volume')); ?>:</b>
	<?php echo CHtml::encode($data->Volume); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Departement')); ?>:</b>
	<?php echo CHtml::encode($data->Departement); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('No_Seri')); ?>:</b>
	<?php echo CHtml::encode($data->No_Seri); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Keterangan')); ?>:</b>
	<?php echo CHtml::encode($data->Keterangan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Konfirmasi')); ?>:</b>
	<?php echo CHtml::encode($data->Konfirmasi); ?>
	<br />

	*/ ?>

</div>