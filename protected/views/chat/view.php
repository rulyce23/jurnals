<?php
/* @var $this ChatController */
/* @var $model Chat */

$this->breadcrumbs=array(
	'Chats'=>array('index'),
	$model->nama,
);

$this->menu=array(
	array('label'=>'List Chat', 'url'=>array('index')),
	array('label'=>'Create Chat', 'url'=>array('create')),
	array('label'=>'Update Chat', 'url'=>array('update', 'id'=>$model->nama)),
	array('label'=>'Delete Chat', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->nama),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Chat', 'url'=>array('admin')),
);
?>

<h1>View Chat #<?php echo $model->nama; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'nama',
		'email',
		'ditujukan',
		'komen',
		'waktu',
		'cek',
	),
)); ?>
