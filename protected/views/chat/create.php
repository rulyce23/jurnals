<?php
/* @var $this ChatController */
/* @var $model Chat */

$this->breadcrumbs=array(
	'Chat'=>array('index'),
	'Buat Perpesanan',
);


?>
<center>
<h1>Buat Pesan</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>