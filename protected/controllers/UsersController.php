<?php

class UsersController extends Controller
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
				'actions'=>array('index','view','reset','viewreseted'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create'),
			'expression'=>'$user->isGuest'
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
			'expression'=>'$user->isAdmin()'
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete','update2','adminauth','disables1'),
			'expression'=>'$user->isAdmin()'
			),
			
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin2','update3','viewx','viewresult','adminviewj'),
			'expression'=>'$user->isAuthor()'
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
	
			public function actionViewX($id)
	{
		$this->render('viewx',array(
			'model'=>$this->loadModel($id),
		));
	}

	public function actionViewResult($id)
	{
		$this->render('viewresult',array(
			'model'=>$this->loadModel($id),
		));
	}
	
		public function actionViewReseted($id)
	{
		$this->render('viewreseted',array(
			'model'=>$this->loadModel($id),
		));
	}

		public function actionUpdate2($id)
	{
			$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		if(isset($_POST['Users']))
		{
			$model->attributes=$_POST['Users'];
			if($model->save()){
	
	$this->redirect(array('view','id'=>$model->id_user));
		}
	}
		$this->render('update2',array(
			'model'=>$model,
		));
	}
	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Users;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Users']))
		{
			$model->scenario='GUEST';
		$model->level='GUEST';
			$model->attributes=$_POST['Users'];
			if($model->save())
				
				$this->redirect(array('view','id'=>$model->id_user));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}
	
		public function actionAdmin2()
	{
		$model=new Users('search');
		$model->unsetAttributes(); 
	$model->username=Yii::app()->user->name;		// clear any default values
		if(isset($_GET['Users']))
			$model->attributes=$_GET['Users'];
		$this->render('admin2',array(
			'model'=>$model,
		));
	}
	
	public function actionReset()
	{
		if(isset($_POST['Users']))
		{
			$model->attributes=$_POST['Users'];
			if($model->save())
				$this->redirect(array('viewreseted','id'=>$model->id_user));
		}
		$this->render('reset',array(
			'model'=>$model,
		));
	}
	public function actionUpdate3($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		if(isset($_POST['Users']))
		{
			$model->attributes=$_POST['Users'];
			$picture=CUploadedFile::getInstance($model,'picture');
			$model->picture=CUploadedFile::getInstance($model,'picture');
			if($model->save()){
				$picture->saveAs(Yii::app()->basePath.'/../picture/'.$model->id_user.'jpg');
	$this->redirect(array('viewresult','id'=>$model->id_user));
		}
	}
		$this->render('update3',array(
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

		if(isset($_POST['Users']))
		{
			$model->attributes=$_POST['Users'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_user));
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
		$dataProvider=new CActiveDataProvider('Users');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}
	
	
	
	public function actionDisables1($id)
	{
	 $model=$this->loadModel($id_user);
	 $model->scenario='guest';
	$model->level='guest';
	if($model->save(false))
				$mailer = Yii::createComponent('application.extensions.mailer.EMailer');
				$mailer->IsSMTP();
				$mailer->IsHTML(true);
				$mailer->SMTPAuth = true;
				$mailer->SMTPSecure = "ssl";
				$mailer->Host = "smtp.gmail.com";
				$mailer->Port = 465;
				$mailer->Username = "rulyce23@gmail.com";
				$mailer->Password = '23071996rce';
				$mailer->From = "PJ JURNAL LPKIA";
				$mailer->FromName = "PJ JURNAL LPKIA";
				$mailer->AddAddress($model->email);
				$mailer->Subject = "Congratulation !!!";
				$mailer->Body = "Mohon Maaf Akun Anda Telah Kami Nonaktifkan Untuk Sementara Waktu,Karena Anda Tidak Pernah Mengajukan Jurnal Dalam Tempo Hari Yang Sudah Lama,Nama :{$model->nama}";
				if($mailer->Send()) 
				{
					echo "Message sent successfully!";
				}else 
				{
					echo "Fail to send your message!";
				}
				$this->redirect(array('adminauth'));
		$this->render('adminauth',array(
			'model'=>$model,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Users('search');
	 // clear any default values 
	       //$model->scenario='admin';
		 
	    if(isset($_GET['Users']))
			$model->attributes=$_GET['Users'];
		$dataProvider=$model->findAll();
	  		$criteria = new CDbCriteria();
		   		$criteria->addCondition('level="Editor"');
		   		$criteria->addCondition('level="Reviewer"');
		   		$criteria->addCondition('level="Admin"');
				
	$dataProvider=new CActiveDataProvider('Users', array('criteria'=>$criteria));
        
		$this->render('admin',array(
			'model'=>$model,
		'dataProvider'=>$dataProvider,
		));
	}
	
		public function actionAdminAuth()
	{
		$model=new Users('search');
			 $model->scenario='author';
	        $model->level='author';
  // clear any default values
		$this->render('adminauth',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Users the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Users::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Users $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='users-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
