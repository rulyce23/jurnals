<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Pengaturan Akun',
	'Kelola Akun Profile',
);



Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#users-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<center>
<h3> Profile Setting </h3>
<?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>'',
		));
		
?>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'users-grid',
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
	'columns'=>array(
		'nama',
		//'username',
		'email',
		'pendidikan',
		'telepon',
		array(
			'class'=>'CButtonColumn',
			 'template' => '{update3}{viewx}',
			    'buttons' => array(
                  'update3' => array(
                    'label' => 'Update Profile',
                    'url' => 'Yii::app()->createUrl("users/update3", array("id"=>$data->id_user))',
                    'imageUrl' => Yii::app()->baseUrl . '/icon/update.png',
                ),
                  'viewx' => array(
                    'label' => 'View My Profile Picture & Data',
                    'url' => 'Yii::app()->createUrl("users/viewx", array("id"=>$data->id_user))',
                    'imageUrl' => Yii::app()->baseUrl . '/icon/view.png',
		),
		),
		),
	),
)); ?>
<?php 
$this->endWidget();
?>