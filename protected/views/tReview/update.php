<?php
/* @var $this TReviewController */
/* @var $model TReview */

$this->breadcrumbs=array(
	'Treviews'=>array('index'),
	$model->id_review=>array('view','id'=>$model->id_review),
	'Update',
);

$this->menu=array(
	array('label'=>'List TReview', 'url'=>array('index')),
	array('label'=>'Create TReview', 'url'=>array('create')),
	array('label'=>'View TReview', 'url'=>array('view', 'id'=>$model->id_review)),
	array('label'=>'Manage TReview', 'url'=>array('admin')),
);
?>

<h1>Update TReview <?php echo $model->id_review; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>