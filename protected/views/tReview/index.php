<?php
/* @var $this TReviewController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Treviews',
);

$this->menu=array(
	array('label'=>'Create TReview', 'url'=>array('create')),
	array('label'=>'Manage TReview', 'url'=>array('admin')),
);
?>

<h1>Treviews</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
