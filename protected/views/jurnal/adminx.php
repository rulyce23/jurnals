<?php
/* @var $this PenerimaController */
/* @var $model Penerima */

$this->breadcrumbs=array(
	'Jurnal',
	'Jurnal Saya',
);

?>
<center><h1>Lihat Hasil Review Jurnal Saya</h1></center>
<?php 
$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>'',
		));
	?>

   <div class="widget" id='lol'>                       
<center>
<?php
$server = "localhost" ;
$username = "root" ;
$password = "" ;
$database = "db_jurnal";
 
//Koneksi dan memilih database di server
mysql_connect($server,$username,$password) or die ("Koneksi database gagal");
mysql_select_db($database) or die ("Database tidak tersedia");
 
echo '
<table class="table table-striped table-hover table-bordered">
<tr>
<th><center>Artikel</center></th>
<th><center>Volume</center></th>
<th><center>No</center></th>
<th><center>Halaman</center></th>
<th><center>Keterangan By Reviewer</center></th>
<th><center>Keterangan By Admin</center></th>
<th><center>Status Review</center></th>
</tr>
<tr>';
 
$i=0;
$d=date('Y');
$p = Yii::app()->user->id; //inisialisasi untuk penomoran data
//perintah untuk menampilkan data, id_brg terbesar ke kecil
$tampil = "select * from jurnal where id_user=$p";
//perintah menampilkan data dikerjakan
$sql = mysql_query($tampil);
//tampilkan seluruh data yang ada pada tabel user
while($data = mysql_fetch_array($sql))
 {
 $i++;
 
echo "

 <td>".$data['artikel']."</td>
 <td>".$data['volume']."</td>
 <td>".$data['no']."</td>
 <td>".$data['hal']."</td>
 <td>".$data['ket_reviewer']."</td>
 <td>".$data['ket_admin']."</td>
 <td>".$data['status_reviewer']."</td>
 
 </tr>";
 }
echo '</table>';
 
?>
<a href="#" title="" onclick="printDiv('lol')" class="smallButton" style="margin: 5px;"><img src="HTML/images/icons/dark/inbox2.png" alt=""></a>
  <script>
            function printDiv(divName) {
                       var printContents = document.getElementById(divName).innerHTML;
                       var originalContents = document.body.innerHTML;

                       document.body.innerHTML = printContents;

                       window.print();

                       document.body.innerHTML = originalContents;
                  }
      </script>
<?php $this->endWidget(); ?>
