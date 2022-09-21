 <?php
/* @var $this JurnalController */
/* @var $data Jurnal */
?>

<div class="view">
		<?php 
	/*<b><?php echo CHtml::encode($data->getAttributeLabel('id_jurnal')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_jurnal), array('view', 'id'=>$data->id_jurnal)); ?>	<br />
		*/?>
		
	<b><?php echo CHtml::encode($data->getAttributeLabel('id_member')); ?>:</b>
	<?php echo CHtml::encode($data->id_member); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('anggota')); ?>:</b>
	<?php echo CHtml::encode($data->anggota); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Kategori')); ?>:</b>
	<?php echo CHtml::encode($data->Kategori); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Penulis')); ?>:</b>
	<?php echo CHtml::encode($data->Penulis); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('judul')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->judul)); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_jurnal')); ?>:</b>
	<?php echo CHtml::encode($data->nama_jurnal); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('Abstraksi')); ?>:</b>
	<?php echo CHtml::encode($data->Abstraksi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vol')); ?>:</b>
	<?php echo CHtml::encode($data->vol); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('no')); ?>:</b>
	<?php echo CHtml::encode($data->no); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hal')); ?>:</b>
	<?php echo CHtml::encode($data->hal); ?>
	<br />
<b><?php echo CHtml::encode($data->getAttributeLabel('tahun')); ?>:</b>
	<?php echo CHtml::encode($data->tahun); ?>
	<br />*/ ?>
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('publikasi')); ?>:</b>
	<?php echo CHtml::encode($data->publikasi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('files')); ?>:</b>
	<?php echo CHtml::encode($data->files); ?>
	<?php
	 ?>
	<br />

	

</div>