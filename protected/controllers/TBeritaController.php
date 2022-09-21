<?php

class TBeritaController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view','indexes','index2','index3','lihatdata'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new TBerita;
		//$model2=new Users;

		// Uncomment the following line if AJAX validation is needed
	  // $this->performAjaxValidation($model);

		if(isset($_POST['TBerita']))
		{
			$model->attributes=$_POST['TBerita'];
		 		$bgambar=CUploadedFile::getInstance($model,'b_gambar');
		$model->b_gambar=CUploadedFile::getInstance($model,'b_gambar');
		$model->id_user=Yii::app()->user->id;
			if($model->save()){
			$bgambar->saveAs(Yii::app()->basePath.'/../picture/'.$model->b_gambar);
				$this->redirect(array('view','id'=>$model->id_berita));
		 }
		}
		$this->render('create',array(
			'model'=>$model,
		));
	}
	

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['TBerita']))
		{
			
			$model->attributes=$_POST['TBerita'];
				$bgambar=CUploadedFile::getInstance($model,'b_gambar');
		$model->b_gambar=CUploadedFile::getInstance($model,'b_gambar');
			if($model->save()){
				$bgambar->saveAs(Yii::app()->basePath.'/../picture/'.$model->id_berita);
				$this->redirect(array('view','id'=>$model->id_berita));
		}
		}
		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('TBerita');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}
	public function actionIndexes()
	{
		 $model=new TBerita('search');

		$criteria = new CDbCriteria();
		$count = $model->count($criteria);
		$pages=new CPagination($count);
        $pages->pageSize=5;
        $pages->applyLimit($criteria);
			//$this->performAjaxValidation($model);
         
        $sort=new CSort('TBerita');
		$sort->attributes=array('TBerita');
        $sort->applyOrder($criteria);
		$dataProvider=$model->findAll();
		$dataProvider=new CActiveDataProvider('TBerita', array('criteria'=>$criteria));
        $data=$model->findAll($criteria);
       // $data2=$model2->findAll($criteria);
        $this->render('indexes',array(
		'data'=>$data,
		'pages'=>$pages,'sort'=>$sort,
		'dataProvider'=>$dataProvider,
			'model'=>$model,		
		));
    }
	
	
	public function actionIndex2()
	{
		$model=new TBerita;
		$criteria = new CDbCriteria();
		$count = $model->count($criteria);
		$pages=new CPagination($count);
        $pages->pageSize=5;
        $pages->applyLimit($criteria);
			//$this->performAjaxValidation($model);
         
		$model->scenario='pengabdian';
		$model->jenis='pengabdian';
        $sort=new CSort('TBerita');
		$sort->attributes=array('TBerita');
		$criteria->addCondition('jenis="pengabdian"');
        $sort->applyOrder($criteria);
		$dataProvider=$model->findAll();
		$dataProvider=new CActiveDataProvider('TBerita', array('criteria'=>$criteria));
        $data=$model->findAll($criteria);
       // $data2=$model2->findAll($criteria);
        $this->render('index2',array(
		'data'=>$data,
		'pages'=>$pages,'sort'=>$sort,
		'dataProvider'=>$dataProvider,
			'model'=>$model,		
		));
    }
	
	
	public function actionIndex3()
	{
		$model=new TBerita;
		$model->scenario='pendidikan';
		$model->jenis='pendidikan';
		$criteria = new CDbCriteria();
		$count = $model->count($criteria);
		$pages=new CPagination($count);
		$criteria->addCondition('jenis="pendidikan"');
        $pages->pageSize=5;
        $pages->applyLimit($criteria);
			//$this->performAjaxValidation($model);
         
        $sort=new CSort('TBerita');
		$sort->attributes=array('TBerita');
        $sort->applyOrder($criteria);
		$dataProvider=$model->findAll();
		$dataProvider=new CActiveDataProvider('TBerita', array('criteria'=>$criteria));
        $data=$model->findAll($criteria);
       // $data2=$model2->findAll($criteria);
        $this->render('index3',array(
		'data'=>$data,
		'pages'=>$pages,'sort'=>$sort,
		'dataProvider'=>$dataProvider,
			'model'=>$model,		
		));
    }
	
	public function actionLihatData($id)
	{		
		$this->render('lihatdata',array(
			'model'=>$this->loadModel($id),
		));
	}
	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new TBerita('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['TBerita']))
			$model->attributes=$_GET['TBerita'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}
	
	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return TBerita the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=TBerita::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param TBerita $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='tberita-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
