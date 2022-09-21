<?php
/* @var $this TReviewController */
/* @var $model TReview */

$this->breadcrumbs=array(
	'Treviews'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TReview', 'url'=>array('index')),
	array('label'=>'Manage TReview', 'url'=>array('admin')),
);
?>

<h1>Create TReview</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>