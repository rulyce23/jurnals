<?php

class SiteController extends Controller
{
public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */

	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
	
        $model=new Jurnal('search');
		$kategori=new Kategori();
		$criteria = new CDbCriteria();
		$criteria->addCondition('status_admin="APPROVED"');
		$count = $model->count($criteria);
		$pages=new CPagination($count);
        $pages->pageSize=5;
        $pages->applyLimit($criteria);
			//$this->performAjaxValidation($model);
         
        $sort=new CSort('Jurnal');
		$sort->attributes=array('Jurnal');
        $sort->applyOrder($criteria);
		$dataProvider=$model->findAll();
		$dataProvider=new CActiveDataProvider('Jurnal', array('criteria'=>$criteria));
        $data=$model->findAll($criteria);
       // $data2=$model2->findAll($criteria);
        $this->render('index',array(
		'data'=>$data,
		'pages'=>$pages,'sort'=>$sort,
		'dataProvider'=>$dataProvider,
			'model'=>$model,
			'kategori'=>$kategori,
		
		));
    }

			public function actionProfile()
	{
		$this->render('profile');
	}		
	
	public function actionPanduan()
	{
		$this->render('panduan');
	}
		
		public function actionChat()
	{
		$this->render('chat');
	}
	
	public function actionQRC()
	{
		$this->render('qrcode');
	}
	
	
	public function actionDownload()
	{
		$this->render('download');
	}
	
	public function actionPilihan()
	{
		$this->render('pilihan');
	}
	

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}
	
	   public function getToken($token)
	{
		$model=Users::model()->findByAttributes(array('token'=>$token));
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}
        
        public function actionVerToken($token)
        {
            $model=$this->getToken($token);
            if(isset($_POST['Ganti']))
            {
                if($model->token==$_POST['Ganti']['tokenhid']){
                    $model->password=md5($_POST['Ganti']['password']);
                    $model->token="null";
                    $model->save();
                    Yii::app()->user->setFlash('ganti','<b>Password berhasil di ubah! silahkan login</b>');
                    $this->redirect('http://localhost/jurnalfix/index.php?r=site/login');
                    $this->refresh();
                }
            }
            $this->render('verifikasi',array(
			'model'=>$model,
		));
        }
        
        public function actionForgot()
	{
		$model = new Users;
         
         $getEmail=$_POST['Lupa']['email'];
            $getModel= Users::model()->findByAttributes(array('email'=>$getEmail));
            if(isset($_POST['Lupa']))
            {
                $getToken=rand(0, 99999);
                $getTime=date("H:i:s");
                $getModel->token=md5($getToken.$getTime);
                $namaPengirim="E-JURNAL PRODI MI LPKIA";
                $emailadmin="ejurnallpkia@gmail.com";
                $subjek="Reset Password";
				$mail->Port=465;
                $setpesan="you have successfully reset your password<br/>
                    <a href='localhost/jurnalfix/index.php?r=site/vertoken/view&token=".$getModel->token."'>Click Here to Reset Password</a>";
                if($getModel->validate())
            {
                $name='=?UTF-8?B?'.base64_encode($namaPengirim).'?=';
                $subject='=?UTF-8?B?'.base64_encode($subjek).'?=';
                $headers="From: $name <{$emailadmin}>\r\n".
                    "Reply-To: {$emailadmin}\r\n".
                    "MIME-Version: 1.0\r\n".
                    "Content-type: text/html; charset=UTF-8";
                $getModel->save();
                                Yii::app()->user->setFlash('forgot','link to reset your password has been sent to your email');
                mail($getEmail,$subject,$setpesan,$headers);
                $this->refresh();
            }
 
            }
        $this->render('forgot');
    }

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-Type: text/plain; charset=UTF-8";

				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->user->returnUrl);
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
}