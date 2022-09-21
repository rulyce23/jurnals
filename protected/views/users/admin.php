<?php
/* @var $this UsersController */
/* @var $model Users */

$this->breadcrumbs=array(
	'User Akun',
	'Kelola',
);

$this->menu=array(
	array('label'=>'Buat User Akun Baru', 'url'=>array('create')),
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

<?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>'Kelola Akun',
		));
		?>
		<center>
<h1>Kelola User Akun</h1>

<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'users-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_user',
		'nama',
		'jk',
		'telepon',
		'email',
		'pendidikan',
		/*
		'alamat',
		'level',
		'akses',
		'username',
		'password',
		'nrp_nidn',
		'picture',
		*/
		array(
			'class'=>'CButtonColumn',
			 'template' => '{update2}{view}{delete}',
			  'buttons' => array(
                  'update2' => array(
                    'label' => 'Update Profile',
                    'url' => 'Yii::app()->createUrl("users/update2", array("id"=>$data->id_user))',
                    'imageUrl' => Yii::app()->baseUrl . '/icon/update.png',
                ),
		),
		),
	),

)); ?>
<?php 
$this->endWidget();
?>