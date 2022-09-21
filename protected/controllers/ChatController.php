<?php

class ChatController extends Controller
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
				'actions'=>array('create'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create'),
			'expression'=>'$user->isAuthor()'
			),
				array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create'),
			'expression'=>'$user->isAdmin()'
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
		$model=new Chat;

		if(isset($_POST['Chat']))
		{
			$model->attributes=$_POST['Chat'];
			if($model->save()){
				$mailer = Yii::createComponent('application.extensions.mailer.EMailer');
				$mailer->IsSMTP();
				$mailer->IsHTML(true);
				$mailer->SMTPAuth = true;
				$mailer->SMTPSecure = "ssl";
				$mailer->Host = "smtp.gmail.com";
				$mailer->Port = 465;
				$mailer->Username = "ejurnallpkia@gmail.com";
				$mailer->Password = '13222316ejul';
				$mailer->From = "Nama Pengaju Keluhan : {$model->nama}";
				$mailer->AddAddress($model->ditujukan);
				$mailer->Subject = "Subject : {$model->Subject}";
				$mailer->Body = " Keterangan : {$model->komen}";
				}if($mailer->Send()) 
				{
				 echo "Sukses Kirim Email";
				}else 
				{
					echo "Fail to send your message!";
				}
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Chat');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Chat('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Chat']))
			$model->attributes=$_GET['Chat'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Chat the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Chat::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Chat $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='chat-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
