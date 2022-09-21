<?php
/* @var $this JurnalController */
/* @var $model Jurnal */

$this->breadcrumbs=array(
	'Jurnal',
	$model->id_jurnal,
);
?>
<?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>'informasi release jurnal',
		));
		
?>



<?php
    foreach ($data as $model){
	
?>
<?php				      
							echo "<div align='left'><p><font size='5'><b>volume :".$model->volume.', No :'.$model->no.', Hal :'.$model->hal."</p></font></h1></b></div>";
							  echo "<div align='center'>";
							echo CHtml::image(Yii::app()->request->baseUrl.'/berita/'.$model->gambar.'','',array('width'=>"230", 'height'=>"100"));
							echo "<br>";
							echo "<div align='left'><p><font size=3>".'No:' .'&nbsp; Judul Artikel :'.$model->artikel."</p></font>";
							echo "&nbsp;";
							echo "<div align='center'>";
							echo CHtml::link('Download',Yii::app()->request->baseUrl."/upload/".$model->berkas, array('class'=>'btn btn-danger'));
							//echo "<div align='center'><h2>".$model->idKategori.judul_kategori."</h2></div>";
							
					?>
			
	
 <div style="float:right;">
        		<?php 
		$this->widget('CLinkPager', Array('pages'=>$pages));
		?>
    </div>


</div>

   
<?php
    }
?>
</div>
     
<!---->
	<?php $this->endWidget(); ?>