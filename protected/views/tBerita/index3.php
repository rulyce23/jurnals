<?php
/* @var $this JurnalController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Jurnal',
	'Informasi',
);

?>

<?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>'informasi release jurnal',
		));
		
?>
<center>
<h1>Informasi Pendidikan Jurnal</h1>
</center>
<center>


<?php

    foreach ($data as $model){
	
?>
	<div class="view2" align="center"><br>
<table border="1" width="555" height="510" >
		<tr>
			<td><p>
				<?php
							echo "<div align='center'>";
							echo CHtml::image(Yii::app()->request->baseUrl.'/picture/'.$model->b_gambar.'','',array('width'=>"550px", 'height'=>"550"));
							echo "<div align='center'><font size=3> Judul Informasi: &nbsp;&nbsp;".$model->judul."</font></div>";
							echo "<div align='center'><font size=3> Tanggal: &nbsp;&nbsp;".$model->tanggal."</font></div>";
							
							echo "</div><br>";
							echo "<div align='center'><font size=3> Desckripsi Acara: &nbsp;&nbsp;".$model->deskripsi_acara."</font></div>";
							
							echo "</div><br>";
							echo "<div align='left'><font size=3>Published By: &nbsp;&nbsp;".$model->penulis."</font></div>";
							
					?>
			</td>
		</tr>
</table>

		 <div style="float:center;">
        <?php $this->widget('CLinkPager', Array('pages'=>$pages)); ?>
    </div> 	
	</p>
<hr>


</div>

   
<?php
    }
?>
</div>

    <?php $this->endWidget();?>
