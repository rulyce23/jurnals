
<br>
<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>

  <div class="row-fluid">
	<div class="span3">
		<div class="sidebar-nav">
		  <?php $this->widget('zii.widgets.CMenu', array(
			/*'type'=>'list',*/
			'encodeLabel'=>false,
			'items'=>array(
				//array('label'=>'<i class="icon icon-home"></i><p>HOME</p>', 'url'=>array('/site/index'),'itemOptions'=>array('class'=>'')),
				array('label'=>'<i class="icon icon-envelope"></i><p>Perpesanan</p> ', 'url'=>array('chat/create'),'visible'=>Yii::app()->user->isGuest),
				
				array('label'=>'<i class="icon icon-envelope"></i><p>Perpesanan</p> ', 'url'=>array('chat/create'),'visible'=>Yii::app()->user->isAuthor()),
				array('label'=>'<i class="icon icon-envelope"></i><p>Perpesanan</p> ', 'url'=>array('chat/create'),'visible'=>Yii::app()->user->isAdmin()),
				// Include the operations menu
				array('label'=>'OPERATIONS','items'=>$this->menu),
			),
			));?>
		</div>
		
        <br>
        <table class="table table-striped table-bordered">
	<h2>
	
		<?php 
		if(Yii::app()->user==Yii::app()->user->isAuthor()){
			echo "<h3>Selamat Datang "; 
			echo Yii::app()->user->name;
			echo " !!!";
			echo "</h3>";
		} else{
			echo "";
		}?></h2>
		<p align="justify"><?php 
		if(Yii::app()->user==Yii::app()->user->isAuthor()){
			echo "<b>Catatan :</b><br>"; 
			echo "untuk melakukan pendaftaran pengajuan jurnal dalam atau luar silahkan pilih menu Data Jurnal & pilih sub menu Buat Data Publikasi Jurnal";
			echo "&nbsp;";
			echo "&nbsp;";
			echo "&nbsp;";
			echo "Terima Kasih";
		} else if(Yii::app()->user==Yii::app()->user->isAuthor()){
			echo "<h3>Selamat Datang "; 
			echo Yii::app()->user->name;
			echo " !!!";
			echo "</h3>";
			
		}
	else if(Yii::app()->user==Yii::app()->user->isEditor()){
			echo "<b>Catatan :</b><br>"; 
			echo "untuk mengedit Jurnal yang telah Diajukan Dari User yang bersangkutan silahkan pilih menu Kelola & silahkan untuk pilih sub menu Edit Jurnal";
			echo "untuk memberi laporan & menambahkan keterangan pada Jurnal yang telah Diajukan Dari User yang bersangkutan silahkan pilih menu Kelola & silahkan untuk pilih sub menu Report Jurnal";
			echo "&nbsp;";
			echo "&nbsp;";
			echo "Terima Kasih";
		} else if(Yii::app()->user==Yii::app()->user->isEditor()){
			echo "<h3>Selamat Datang "; 
			echo Yii::app()->user->name;
			echo " !!!";
			echo "</h3>";		
		}
	else if(Yii::app()->user==Yii::app()->user->isReviewer()){
			echo "<b>Catatan :</b><br>"; 
			echo "untuk mereview Jurnal yang telah Diajukan Dari User yang bersangkutan silahkan pilih menu Kelola & silahkan untuk pilih sub menu Lihat Jurnal";
			echo "&nbsp;";
			echo "&nbsp;";
			echo "Terima Kasih";
		} else if(Yii::app()->user==Yii::app()->user->isEditor()){
			echo "<h3>Selamat Datang "; 
			echo Yii::app()->user->name;
			echo " !!!";
			echo "</h3>";		
		}
	else if(Yii::app()->user==Yii::app()->user->isAdmin()){
			echo "<b>Catatan :</b><br>"; 
			echo "untuk mengapprove / mendecline berdasarkan pesan yang telah dikirim oleh reviewer untuk Jurnal yang telah Diajukan Dari User yang bersangkutan silahkan pilih menu Kelola & silahkan untuk pilih sub menu Kelola Jurnal";
			echo "&nbsp;";
			echo "&nbsp;";
			echo "<br>";
			echo "<br>";
			echo "untuk memanage user akun tim silahkan pilih menu Kelola & silahkan untuk pilih sub menu Kelola Akun Tim Jurnal";
			
			echo "&nbsp;";
			echo "&nbsp;";
			echo "<br>";
			echo "<br>";
			echo "untuk memanage user akun author silahkan pilih menu Kelola & silahkan untuk pilih sub menu Kelola Author";
			
			echo "&nbsp;";
			echo "&nbsp;";
			echo "<br>";
			echo "<br>";
			echo "untuk memanage informasi berita mengenai event yang diselenggarakan oleh tim peneliti atau lainnya pada institusi lpkia, silahkan untuk pilih menu Kelola & silahkan untuk pilih sub menu Kelola Berita Informasi ";
			
			echo "&nbsp;";
			echo "&nbsp;";
			echo "<br>";
			echo "<br>";
			echo "untuk membackup semua data silahkan pilih menu Kelola & silahkan untuk pilih sub menu Backup Database";
			echo "&nbsp;";
			echo "Terima Kasih";
		} else if(Yii::app()->user==Yii::app()->user->isAdmin()){
			echo "<h3>Selamat Datang "; 
			echo Yii::app()->user->name;
			echo " !!!";
			echo "</h3>";		
		}
		else{
			echo "";
		}
		
		
		
		?>
		
		
		</h2>
          <tbody>
            <tr>
              <td>
            <div class="popular_post">
        <p><iframe src="https://www.google.com/calendar/embed?showTitle=0&amp;showNav=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;mode=AGENDA&amp;height=600&amp;wkst=2&amp;hl=in&amp;bgcolor=%23999999&amp;src=katana%40lpkia.ac.id&amp;color=%2323164E&amp;ctz=Asia%2FJakarta" style=" border-width:0 " width="207" height="295" frameborder="0" scrolling="no"></iframe>
		</div>
              </td>
            </tr>
          </tbody>
		 
          </tbody>
        </table>
		<div class="well">
		
           <dl class="dl-horizontal">
	
		<?php
		$month= date ("m"); 
		$year=date("Y"); 
		$day=date("d"); 
		$timezone=date("H:i:s");
		//
	
		// t digunakan untuk menghitung jumlah seluruh hari pada bulan ini 
		//ini digunakan untuk menampilkan semua tanggal pada bulan ini 
		$endDate=date(mktime($month ,$day,$year));  
		echo "<b>Hari ini tanggal : </b>"; 
		echo"<br>";
		echo '<B>',$day,'-',$month,'-',$year,'||',$timezone,'||','</b>'; 
		echo"<br>";
		echo Yii::app()->localtime->getTimezone();
		
		?>        
            </dl>
      </div>
		
    </div><!--/span-->
	
    <div class="span9">
    
    <?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
            'links'=>$this->breadcrumbs,
			'homeLink'=>CHtml::link('Dashboard'),
			'htmlOptions'=>array('class'=>'breadcrumb')
        )); ?><!-- breadcrumbs -->
    <?php endif?>
    
    <!-- Include content pages -->
    <?php echo $content; ?>

	</div><!--/span-->
  </div><!--/row-->


<?php $this->endContent(); ?>