<?php
/* @var $this JurnalController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Jurnal',
);


?>

<h1>Data Jurnal</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
