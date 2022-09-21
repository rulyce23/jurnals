<?php
/* @var $this TBeritaController */
/* @var $data TBerita */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_berita')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_berita), array('view', 'id_berita'=>$data->id_berita)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_user')); ?>:</b>
	<?php echo CHtml::encode($data->id_user); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jenis')); ?>:</b>
	<?php echo CHtml::encode($data->jenis); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('penulis')); ?>:</b>
	<?php echo CHtml::encode($data->penulis); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('judul')); ?>:</b>
	<?php echo CHtml::encode($data->judul); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('b_gambar')); ?>:</b>
	<?php echo CHtml::encode($data->b_gambar); ?>
	<br />


</div>