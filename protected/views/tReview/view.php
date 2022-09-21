<?php
/* @var $this TReviewController */
/* @var $model TReview */

$this->breadcrumbs=array(
	'Treviews'=>array('index'),
	$model->id_review,
);

$this->menu=array(
	array('label'=>'List TReview', 'url'=>array('index')),
	array('label'=>'Create TReview', 'url'=>array('create')),
	array('label'=>'Update TReview', 'url'=>array('update', 'id'=>$model->id_review)),
	array('label'=>'Delete TReview', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_review),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TReview', 'url'=>array('admin')),
);
?>

<h1>View TReview #<?php echo $model->id_review; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_review',
		'id_jurnal',
		'nama',
		'status',
		'komentar',
	),
)); ?>
