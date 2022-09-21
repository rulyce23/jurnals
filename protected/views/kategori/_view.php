<?php
/* @var $this KategoriController */
/* @var $data Kategori */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_kategori')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_kategori), array('view', 'id'=>$data->id_kategori)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('judul_kategori')); ?>:</b>
	<?php echo CHtml::encode($data->judul_kategori); ?>
	<br />


</div>