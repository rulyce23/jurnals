<?php

class JurnalController extends Controller
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
			'actions'=>array('index','view','viewe','admin2','download','index2','admin','data','data2','data3','data4','data5','data6','data7','data8','viewp','viewx','viewjurnal'),
				'users'=>array('*'),
			),
				array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view','admin2','download','adminviewj'),
				'expression'=>'$user->isAuthor()'
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','download','update2','delete','view2','adminx','update3','create2','create3','viewme'),
			'expression'=>'$user->isAuthor()'
			),
				array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('download'),
			'expression'=>'$user->isGuest()'
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('update2','update3','create2','create3','viewresult','admin2','adminreport','viewme','reportme','viewreport'),
			'expression'=>'$user->isEditor() '
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('update2','update3','create2','create3','viewresult','admin2','adminreport','viewme','adminreviewer','review','viewreview','viewadmin'),
			'expression'=>'$user->isReviewer()'
			),
				array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('download','update','delete'),
			'users'=>array('*'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete','update','approve','approve','declined','approved','index2','view2','viewp','create','createketerangan','viewketerangan','keterangan','viewreview2','viewreport'),
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

public function actionViewReview($id_jurnal)
	{
		$this->render('viewreview',array(
			'model'=>$this->loadModel($id_jurnal),
		));
	}
	
	
public function actionViewReview2($id_jurnal)
	{
		
		$criteria = new CDbCriteria(array('order'=>'id_jurnal DESC'));
		$criteria->addCondition('idUser.nama = "reviewer"');
		$dataProvider=new CActiveDataProvider('Jurnal', array('criteria'=>$criteria));
		$this->render('viewreview2',array(
			'model'=>$this->loadModel($id_jurnal),
					'dataProvider'=>$dataProvider,
		));
	}
	
	public function actionReview($id_jurnal)
	{
		$model=$this->loadModel($id_jurnal);
		
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		if(isset($_POST['Jurnal']))
		{
			$model->attributes=$_POST['Jurnal'];
			$model->nm_reviewed=Yii::app()->user->name;
			if($model->save()){
				$this->redirect(array('viewreview','id_jurnal'=>$model->id_jurnal));
		}
	}
		$this->render('review',array(
			'model'=>$model,
		));
	}
	
	
		public function actionView2($id_jurnal)
	{
		$this->render('view2',array(
			'model'=>$this->loadModel($id_jurnal),
		));
	}
	
		public function actionViewResult($id_kategori)
	{
		$this->render('viewresult',array(
			'model'=>$this->loadModel($id_kategori),
		));
	}
	
	public function actionDeclined($id_jurnal)
	{	$model = new Jurnal;
		$model=$this->loadModel($id_jurnal);
		$model->status_admin='DECLINED';
		$model->s_admin2=0;
		$model->publikasi='Tidak Terbit';
	    $model->scenario='DECLINED';
		
			if($model->save(false)){
				$mailer = Yii::createComponent('application.extensions.mailer.EMailer');
				$mailer->IsSMTP();
				$mailer->IsHTML(true);
				$mailer->SMTPAuth = true;
				$mailer->SMTPSecure = "ssl";
				$mailer->Host = "smtp.gmail.com";
				$mailer->Port = 465;
				$mailer->Username = "ejurnallpkia@gmail.com";
				$mailer->Password = '13222316ejul';
				$mailer->From = "E-JURNAL TIM PRODI MI LPKIA";
				$mailer->FromName = "E-JURNAL TIM PRODI MI LPKIA";
				$mailer->AddAddress($model->idUser->email);
				$mailer->Subject = "Congratulation !!!";
				$mailer->Body = "Mohon Maaf Jurnal Anda Tidak Di Acc Oleh Admin Prodi MI LPKIA Dan Kini Jurnal Anda Tidak Dapat Di Terbitkan dengan,Jurnal Anda:{$model->artikel} Tahun :{$model->thn} Dengan Vol :{$model->volume}No :{$model->no}Hal :{$model->hal} status adnmin:{$model->status_admin}  ";
				}if($mailer->Send()) 
				{
					echo "Message sent successfully!";
				}else 
				{
					echo "Fail to send your message!";
				}
				$this->redirect(array('approve'));
		$this->render('approve',array(
			'model'=>$model,
		));
	}
		public function actionApproved($id_jurnal)
	{
		$model = new Jurnal;
		$model=$this->loadModel($id_jurnal);
		$model->scenario='APPROVED';
		$model->status_admin='APPROVED';
		$model->s_admin2=1;
		$model->publikasi='TERBIT';
		$model->nm_publisher=Yii::app()->user->name;
		
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
				if($model->save(false)){
				$mailer = Yii::createComponent('application.extensions.mailer.EMailer');
				$mailer->IsSMTP();
				$mailer->IsHTML(true);
				$mailer->SMTPAuth = true;
				$mailer->SMTPSecure = "ssl";
				$mailer->Host = "smtp.gmail.com";
				$mailer->Port = 465;
				$mailer->Username = "ejurnallpkia@gmail.com";
				$mailer->Password = '13222316ejul';
				$mailer->From = "E-JURNAL TIM PRODI MI LPKIA";
				$mailer->FromName = "E-JURNAL TIM PRODI MI LPKIA";
				$mailer->AddAddress($model->idUser->email);
				$mailer->Subject = "Congratulation !!!";
				$mailer->Body = "Selamat Jurnal Anda Telah Di Acc Oleh Admin Prodi MI LPKIA Dan Kini Jurnal Anda Telah Terbit dengan,Jurnal :{$model->artikel} Tahun :{$model->thn} Dengan Vol :{$model->volume}No :{$model->no}Hal :{$model->hal} status adnmin:{$model->status_admin}  ";
				}if($mailer->Send()) 
				{
					echo "Message sent successfully!";
				}else 
				{
					echo "Fail to send your message!";
				}
				$this->redirect(array('approve'));
		$this->render('create',array(
			'model'=>$model,
		));
	}
	public function actionUpdate3($id_jurnal)
	{
		$model=$this->loadModel($id_jurnal);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Jurnal']))
		{
			$model->attributes=$_POST['Jurnal'];
			$gambar=CUploadedFile::getInstance($model,'gambar');
			$model->gambar=CUploadedFile::getInstance($model,'gambar');
			$model->nm_editor=Yii::app()->user->name;
			$model->id_kategori==Yii::app()->user->id;
			if($model->save()){		
				//$model->idKategori.id_kategori==Yii::app()->user->id;
				$gambar->saveAs(Yii::app()->basePath.'/../berita/'.$model->id_jurnal.'.jpg');
				$this->redirect(array('create3','id_jurnal'=>$model->id_jurnal));
		}
	}
		$this->render('create2',array(
			'model'=>$model,
		));
	}
	

	
	public function actionKeterangan($id_jurnal)
	{
				$model=$this->loadModel($id_jurnal);
				$useed=new Users('search');
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);	
		if(isset($_POST['Jurnal']))
		{
			$model->attributes=$_POST['Jurnal'];
				$mailer = Yii::createComponent('application.extensions.mailer.EMailer');
				$mailer->IsSMTP();
				$mailer->IsHTML(true);
				$mailer->SMTPAuth = true;
				$mailer->SMTPSecure = "ssl";
				$mailer->Host = "smtp.gmail.com";
				$mailer->Port = 465;
				$mailer->Username = "ejurnallpkia@gmail.com";
				$mailer->Password = '13222316ejul';
				$mailer->From = "E-JURNAL TIM PRODI MI LPKIA";
				$mailer->FromName = "E-JURNAL TIM PRODI MI LPKIA";
				$mailer->AddAddress($model->idUser->email);
				$mailer->Subject = "Please Read This Information";
				$mailer->Body = "Keterangan :{$model->ket_admin} ";
		
		if($model->save()){
				if($mailer->Send()) 
				{
					echo "Message sent successfully!";
				}else 
				{
					echo "Fail to send your message!";
				}	
				
			$this->redirect(array('viewketerangan','id_jurnal'=>$model->id_jurnal));
		}
		}
			$this->render('createketerangan',array(
			'model'=>$model,
		));
	}
	
	
	
		public function actionViewjurnal($id)
	{ $model=new Jurnal('search');
		$kategori=new Kategori();
		$criteria = new CDbCriteria(array('order'=>'id_jurnal DESC'));
		$count = $model->count($criteria);
		$pages=new CPagination($count);
		$criteria->addCondition('status_admin="APPROVED"');
        $pages->pageSize=1;
        $pages->applyLimit($criteria);
			//$this->performAjaxValidation($model);
         
        $sort=new CSort('Jurnal');
		$sort->attributes=array('artikel','Jurnal');
        $sort->applyOrder($criteria);
		$dataProvider=$model->findAll();
		//$criteria->select='max(id_beasiswa) as id_beasiswa';
		//$criteria->addCondition('tanggal_akhir = "'$tanggal_akhir'">"'.date('Y-m-d').'"');
		$dataProvider=new CActiveDataProvider('Jurnal', array('criteria'=>$criteria));
        $data=$model->findAll($criteria);
		$this->render('viewjurnal',array(
			'model'=>$this->loadModel($id),
			'data'=>$data,
		'pages'=>$pages,'sort'=>$sort,
		'dataProvider'=>$dataProvider,
			'model'=>$model,
		));
	}
	
			public function actionViewMe($id_jurnal)
	{
		$this->render('viewme',array(
			'model'=>$this->loadModel($id_jurnal),
		));
	}
	public function actionViewAdmin($id_jurnal)
	{
		$this->render('viewadmin',array(
			'model'=>$this->loadModel($id_jurnal),
		));
	}
	
	
		public function actionViewKeterangan($id_jurnal)
	{
		$this->render('viewketerangan',array(
			'model'=>$this->loadModel($id_jurnal),
		));
	}
	
	
			public function actionViewX($id_jurnal)
	{
		$this->render('viewx',array(
			'model'=>$this->loadModel($id_jurnal),
		));
	}
	
			public function actionViewReport($id_jurnal)
	{
		$this->render('viewreport',array(
			'model'=>$this->loadModel($id_jurnal),
		));
	}
	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Jurnal;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		
		$model->scenario='WAITING FOR SUBMITTED & REVIEWED';
		$model->ket_admin='WAITING FOR SUBMITTED & REVIEWED';
		$model->ket_reviewer='WAITING FOR SUBMITTED & REVIEWED';
		$model->status_reviewer='WAITING FOR SUBMITTED & REVIEWED';

		if(isset($_POST['Jurnal']))
		{
			$model->attributes=$_POST['Jurnal'];
			$berkas=CUploadedFile::getInstance($model,'berkas');
			$model->berkas=CUploadedFile::getInstance($model,'berkas');
			$model->id_user=Yii::app()->user->id;
			$model->idKategori.id_kategori==Yii::app()->user->id;
			if($model->save()){		
				$berkas->saveAs(Yii::app()->basePath.'/../upload/'.$model->id_jurnal.'.pdf');
				$this->redirect(array('view2','id_jurnal'=>$model->id_jurnal));
		}
	}
		$this->render('create',array(
			'model'=>$model,
		));
	}
	
		public function actionCreateEdit()
	{
		$model=new Jurnal;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Jurnal']))
		{
			$model->attributes=$_POST['Jurnal'];
			$berkas=CUploadedFile::getInstance($model,'berkas');
			$model->berkas=CUploadedFile::getInstance($model,'berkas');
			$model->id_user=Yii::app()->user->id;
			$model->idKategori.id_kategori==Yii::app()->user->id;
			if($model->save()){		
				$berkas->saveAs(Yii::app()->basePath.'/../upload/'.$model->id_jurnal.'.pdf');
				$this->redirect(array('update3','id_jurnal'=>$model->id_jurnal));
		}
	}
		$this->render('create',array(
			'model'=>$model,
		));
	}
	
	
	public function actionCreateKeterangan($id_jurnal)
	{
		
		$model=$this->loadModel($id_jurnal);
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Jurnal']))
		{
			$model->attributes=$_POST['Jurnal'];
		}
		$this->render('createketerangan',array(
			'model'=>$model,
		));
	}
	
	
		public function actionReportMe($id_jurnal)
	{
	
		$model=$this->loadModel($id_jurnal);
		// Uncomment the following line if AJAX validation is needed
		if(isset($_POST['Jurnal']))
		{
			$model->attributes=$_POST['Jurnal'];
			if($model->save()){		
				$this->redirect(array('viewreport','id_jurnal'=>$model->id_jurnal));
		}
	}
		$this->render('reportme',array(
			'model'=>$model,
		));
	}
	
	
	public function actionCreate3($id_jurnal)
	{
			$kategori=new Kategori(); 
			$jurnal=new Jurnal();
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Kategori']))
		{
			$kategori->attributes=$_POST['Kategori'];
		}
			if($kategori->save()){		
				//$kategori->idKategori2.id_jurnal==Yii::app()->user->id;
			
				$kategori->tgl_publish=='value'.date('Y-m-d');
				//$jurnal->idKategori.id_kategori=='jurnal SET  id_kategori =$id_kategori WHERE jurnal.id_jurnal =$id_jurnal';

				$this->redirect(array('viewresult','id_kategori'=>$kategori->id_kategori));
		}
	
		
		$this->render('create3',array(
		//	'model'=>$model,
			'kategori'=>$kategori,
			'jurnal'=>$jurnal,
		));
	}
	
		public function actionAdminViewJ()
	{
		$model2=new Users('search');
		$model=new Jurnal('search');
		$model->unsetAttributes();
		$criteria = new CDbCriteria();
	 if(isset($_GET['Jurnal']))
			$model->attributes=$_GET['Jurnal'];
		$model->idUser.id_user==Yii::app()->user->id;
		$model->penulis=Yii::app()->user->name;

		//$dataProvider=new CActiveDataProvider('Jurnal',array('criteria'=>$criteria));
		//$model=Jurnal::model()->findAll();
		$this->render('adminviewj',array(
	
			'model'=>$model,
			'model2'=>$model2,
		));
	}

	public function actionApprove()
	{
		$model=new Jurnal('search');
		$model3=new Users;
	$criteria= new CDbCriteria (); // clear any default values
	$criteria->addCondition('tgl_diajukan ="'.date('Y').'"');
		if(isset($_GET['Jurnal']))
			$model->attributes=$_GET['Jurnal'];	
			$model3->id_user=Yii::app()->user->id;
		$dataProvider=new CActiveDataProvider('Jurnal',array('criteria'=>$criteria));
		$this->render('approve',array(
		    'dataProvider'=>$dataProvider,
			'model'=>$model,
			'model3'=>$model3,		     
		));
	}
			public function actionDownload()
	{
		$model=new Jurnal;
		$model2=new Publish;
		$model2->scenario='TERBIT';
		$model2->publikasi='TERBIT';
		$model2->status='APPROVED';
		
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		$criteria= new CDbCriteria ();
		$criteria->addCondition('Publikasi = "TERBIT"');
		$criteria->addCondition('status = "APPROVED"');
		
		if(isset($_POST['Jurnal']))
		{
			$model->attributes=$_POST['Jurnal'];
			if($model->save()){
				$this->redirect(array('view','id'=>$model->id));
		}
	}
		$this->render('Download',array(
			'criteria'=>$criteria,
			'model'=>$model,
		));
	}
		public function actionData()
	{
		$model=new Jurnal('search');
		$model->scenario='TERBIT';
		$model->publikasi='TERBIT';
		$model->status_admin='APPROVED';
		
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		$criteria= new CDbCriteria ();
		$criteria->addCondition('Publikasi = "TERBIT"');
		$criteria->addCondition('status_admin = "APPROVED"');
		$criteria= new CDbCriteria ();
		if(isset($_GET['Jurnal']))
			$model->attributes=$_GET['Jurnal'];
		$dataProvider=new CActiveDataProvider('Jurnal',array('criteria'=>$criteria));
		$this->render('data',array(
		'dataProvider'=>$dataProvider,
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
		if(isset($_POST['Jurnal']))
		{
			$model->attributes=$_POST['Jurnal'];
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
				$mailer->From = "E-JURNAL TIM PRODI MI LPKIA";
				$mailer->FromName = "E-JURNAL TIM PRODI MI LPKIA";
				$mailer->AddAddress($model->idUser->email="ejurnallpkia@gmail.com");
				$mailer->Subject = "Pembaruan Jurnal From id :{$model->id_jurnal}, & Nama user:{$model->idUser->nama}";
				$mailer->Body = "Anda Telah Melakukan Perubahan Pada jurnal Anda, Dengan Artikel Jurnal:{$model->artikel}, Atas Nama Penulis / Pemilik :{$model->penulis}, Kata Kunci : {$model->kata_kunci}";
				}if($mailer->Send()) 
				{
				$this->redirect(array('view','id'=>$model->id_jurnal));
				}else 
				{
					echo "Fail to send your message!";
				}
		}
		$this->render('update',array(
			'model'=>$model,
		));
	}

	public function actionUpdate2($id_jurnal)
	{
		$model=$this->loadModel($id_jurnal);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Jurnal']))
		{

			if($model->save()){		
				$this->redirect(array('update3','id_jurnal'=>$model->id_jurnal));
		}
	}
		$this->render('update2',array(
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
		$dataProvider=new CActiveDataProvider('Jurnal');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}
		

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Jurnal('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Jurnal']))
			$model->attributes=$_GET['Jurnal'];
		$this->render('admin',array(
			'model'=>$model,
		));
	}	
	
	public function actionAdminReviewer()
	{
		$model=new Jurnal('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Jurnal']))
			$model->attributes=$_GET['Jurnal'];
		$this->render('adminreviewer',array(
			'model'=>$model,
		));
	}	
	
	public function actionAdminX()
	{
		$model=new Jurnal('search');
		$modeluser=new Users('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Jurnal']))
			$model->attributes=$_GET['Jurnal'];	
		$modeluser->username=Yii::app()->user->name;
		
		$this->render('adminx',array(
			'model'=>$model,
			'model2'=>$model2,
		));
	}	
	
		public function actionAdminReport()
	{
		$model=new Jurnal('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Jurnal']))
			$model->attributes=$_GET['Jurnal'];
		$this->render('adminreport',array(
			'model'=>$model,
		));
	}	
	

	
		public function actionAdmin2()
	{
		$model=new Jurnal('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Jurnal']))
			$model->attributes=$_GET['Jurnal'];
		$this->render('admin2',array(
			'model'=>$model,
		));
	}	
	
	
	

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Jurnal the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Jurnal::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Jurnal $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='jurnal-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

}
