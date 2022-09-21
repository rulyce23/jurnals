	 
<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="navbar-inner">
    <div class="container">
		<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>

          <!-- Be sure to leave the brand out there if you want it shown -->
          <a align ="right" class="brand">&nbsp;&nbsp;&nbsp;<b>LPKIA Prodi <span class='button btn-danger'><b>MI</b></span><span class='button btn-primary'> E-JURNAL</a></span></b>


			<?php $this->widget('zii.widgets.CMenu',array(
                    'htmlOptions'=>array('class'=>'pull-right nav'),
                    'submenuHtmlOptions'=>array('class'=>'dropdown-menu'),
					'itemCssClass'=>'item-test',
                    'encodeLabel'=>false,
				
                    'items'=>array(
                        array('label'=>'<img src="icon/home.png"/ height="30" width="30">&nbsp;Beranda', 'url'=>array('/site/index')),
                        array('label'=>'<img src="icon/info.png"/ height="30" width="30">&nbsp;Profile', 'url'=>array('/site/profile')),
                        array('label'=>'<img src="icon/news.png"/ height="30" width="30">&nbsp;Informasi', 'url'=>array('/tBerita/index'),'visible'=>Yii::app()->user->isGuest),
						  array('label'=>'<img src="icon/news.png"/ height="30" width="30">&nbsp;Informasi <span class="caret"></span>', 'url'=>'#','itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'visible'=>Yii::app()->user->isAdmin(),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown"), 
                        'items'=>array(
                            array('label'=>'<img src="icon/add.png"/ height="15" width="15">Tambah Berita Informasi', 'url'=>array('tBerita/create'),'visible'=>Yii::app()->user->isAdmin()),
						)),
                        array('label'=>'<img src="icon/help.png"/ height="30" width="30">&nbsp;Bantuan', 'url'=>array('/site/panduan')),
						array('label'=>'<img src="icon/search.png"/ height="30" width="30">&nbsp;Search Jurnal Publikasi', 'url'=>array('/jurnal/data'),'visible'=>Yii::app()->user->isGuest),
						  array('label'=>'<img src="icon/data.png"/ height="30" width="30">Data Jurnal <span class="caret"></span>', 'url'=>'#','itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'visible'=>Yii::app()->user->isAuthor(),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown"), 
                        'items'=>array(
                            array('label'=>'<img src="icon/add.png"/ height="15" width="15">Buat Data Publikasi Jurnal', 'url'=>array('jurnal/create'),'visible'=>Yii::app()->user->isAuthor()),
						)),
                        array('label'=>'<img src="icon/manage.png"/ height="30" width="30">&nbsp;Kelola <span class="caret"></span>', 'url'=>'#','visible'=>Yii::app()->user->isAdmin(),'itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown"), 
                        'items'=>array(
				array('label'=>'Buat Jurnal ', 'url'=>array('jurnal/create'),'visible'=>Yii::app()->user->isAdmin()),
				array('label'=>'Kelola Jurnal ', 'url'=>array('jurnal/approve'),'visible'=>Yii::app()->user->isAdmin()),
				array('label'=>'Kelola Akun Tim Jurnal ', 'url'=>array('users/admin'),'visible'=>Yii::app()->user->isAdmin()),
				array('label'=>'Kelola Author ', 'url'=>array('users/adminauth'),'visible'=>Yii::app()->user->isAdmin()),
				array('label'=>'Kelola Berita Informasi', 'url'=>array('tberita/admin'),'visible'=>Yii::app()->user->isAdmin()),
				array('label'=>'Backup Database ', 'url'=>array('link/proses'),'visible'=>Yii::app()->user->isAdmin()),
				//array('label'=>'Restore Database ', 'url'=>array('jurnal/restore'),'visible'=>Yii::app()->user->isSuperAdmin()),
				)),
						 array('label'=>'<img src="icon/manage.png"/ height="30" width="30">&nbsp;Kelola <span class="caret"></span>', 'url'=>'#','visible'=>Yii::app()->user->isEditor(),'itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown"), 
                        'items'=>array(
			    array('label'=>'Edit Jurnal ', 'url'=>array('jurnal/admin'),'visible'=>Yii::app()->user->isEditor()),
			    array('label'=>'Report Jurnal ', 'url'=>array('jurnal/adminreport'),'visible'=>Yii::app()->user->isEditor()),
			            )), 
						 array('label'=>'<img src="icon/manage.png"/ height="30" width="30">&nbsp;Kelola <span class="caret"></span>', 'url'=>'#','visible'=>Yii::app()->user->isReviewer(),'itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown"), 
                        'items'=>array(
			    array('label'=>'Lihat Jurnal ', 'url'=>array('jurnal/adminreviewer'),'visible'=>Yii::app()->user->isReviewer()),
			            )), 
						array('label'=>'<img src="icon/account.png"/ height="30" width="30">My Account <span class="caret"></span>', 'url'=>'#','visible'=>Yii::app()->user->isAuthor(),'itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown"), 
                        'items'=>array(
			    array('label'=>'Jurnal Saya ', 'url'=>array('jurnal/adminviewj'),'visible'=>Yii::app()->user->isAuthor()),
			  	array('label'=>'Pengaturan Profile   ', 'url'=>array('users/admin2'),'visible'=>Yii::app()->user->isAuthor()),
                        )),
                        array('label'=>'<img src="icon/login.png"/ height="30" width="30">&nbsp;Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                        array('label'=>'<img src="icon/logout.png"/ height="30" width="30">&nbsp;Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
                    ),
                )); ?>
    	</div>
    </div>
	</div>
	</div>
		 
<div class="subnav navbar navbar-fixed-top">
    <div class="navbar-inner">
    	<div class="container">
       <p>
		
            <div align="right">
                    &nbsp;
					<a href="https://www.facebook.com/LPKIA/"/><p><img src="icon/fb.png" width="23" height="23"/></a>
                    &nbsp;
					<a href="https://twitter.com/jy_lpkia?lang=en"/><img src="icon/twit.png" width="23" height="23" /></a>
                    &nbsp;
					<a href="https://www.youtube.com/user/PKNSTMIKLPKIA/"/><img src="icon/yotube.png" width="23" height="23" /></a>
					&nbsp;
                    <a href="https://www.instagram.com/explore/locations/832694012/"/><img src="icon/is.png" width="23" height="23" /></a>
       
           </form>
    	</div><!-- container -->
    </div><!-- navbar-inner -->
</div><!-- subnav -->
</div>