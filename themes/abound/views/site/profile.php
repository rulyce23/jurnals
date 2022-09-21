<?php
$this->breadcrumbs=array(
	'Jurnal',
	'Profile',
);
?>
<center>
	<div class="itemHeader">
				<!-- Item title -->

</CENTER>
<style type="text/css">
#return-to-top {
    position: fixed;
    bottom: 100px;
    right: 10px;
    background: rgb(0, 0, 0);
    background: rgba(0, 0, 0, 0.7);
    width: 60px;
    height: 50px;
    display: block;
    text-decoration: none;
    -webkit-border-radius: 35px;
    -moz-border-radius: 35px;
    border-radius: 35px;
    display: none;
    -webkit-transition: all 0.3s linear;
    -moz-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    transition: all 0.3s ease;
}
#return-to-top i {
    color:white;
    margin: 0;
    position: relative;
    left: 16px;
    top: 13px;
    font-size: 19px;
    -webkit-transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    transition: all 0.3s ease;
}
#return-to-top:hover {
    background: rgba(0, 0, 0, 0.9);
}
#return-to-top:hover i {
    color:blue;
    top: 5px;
}


/* Extra Things */
body{font-family: 'Open Sans', sans-serif;}h3{font-size: 30px; font-weight: 400;text-align: center;margin-top: 50px;}h3 i{color: #444;}
</style>
<script type="application/javascript" src="jquery.js"></script>
<script type="text/javascript">
$(window).scroll(function() {
    if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
        $('#return-to-top').fadeIn(200);    // Fade in the arrow
    } else {
        $('#return-to-top').fadeOut(200);   // Else fade out the arrow
    }
});
$('#return-to-top').click(function() {      // When arrow is clicked
    $('body,html').animate({
        scrollTop : 0                       // Scroll to top of body
    }, 500);
});
</script>
<style type="text/css" media="print">
.small {visibility:hidden;}
.btn {visibility:hidden;}
.column2{visibility:hidden;}
.navbar {visibility:hidden;}
.printableArea{visibility:visible;} 
</style>
<script type="text/javascript">
function printDiv()
{

window.print();

}
</script>
<div class="printableArea">
<div style="float:right">
<?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>'Profile LPKIA yang terdapat pada e-jurnal',
		));
		?>

			<center>
		      <h1>Struktur Organisasi</h1>		
		
		
<p><strong>Struktur Organisasi, Tanggung Jawab, dan Wewenang </strong><br>Program studi Manajemen Informatika memiliki bagan struktur organisasi sebagai berikut.</p>
<p><img src="images/struktur.png" border="0" alt=""></p>

<div class="itemFullText">
	  	
<table class="itemblock-table">
	<tbody><tr>
		<td rowspan="2" width="55%" valign="center">
						<!-- Item Rating -->
				<div class="itemRatingBlock ">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ketua Program Studi dibantu Wakil mempunyai tugas pokok sebagai berikut :</p>
<ol>
<li>Merencanakan jumlah mahasiswa baru, mengusulkan dan melaksanakan program kerja terpadu (institusional) untuk mencapainya.</li>
<li>Merencanakan, mengelola, mengevaluasi serta mengembangkan proses belajar mengajar di program studi yang diketuainya sesuai dengan tujuan yang ditetapkan institusi, perkembangan kebutuhan masyarakat bisnis serta perkembangan teknologi.</li>
<li>Mengusahakan tercapainya target indikator operasional di program studi, meliputi jumlah mahasiswa, Drop Out, Proses Belajar Mengajar (PBM) mahasiswa (kehadiran, IP) dan dosen (kehadiran, PA, LUB, kelas bubar), kelulusan/kenaikan tingkat, lulusan bekerja, dan lulusan melanjutkan ke STMIK.</li>
<li>Merencanakan, mengelola, mengevaluasi serta mengembangkan sumber daya : seluruh staf dan dosen di program studi, sarana/ prasarana, dana, kurikulum, sistem dan prosedur secara optimal guna memelihara dan meningkatkan kualitas pelayanan pendidikan serta kualitas hasil pendidikan dalam pencapaian visi dan misi LPKIA.</li>
<br>
<p>Sekolah Tinggi Manajemen Informatika &amp; Ilmu Komputer (STMIK)  merupakan perkembangan dari Lembaga Pendidikan Komputer Indonesia Amerika Bandung yang berdiri sejak tahun 1984. Dimulai tahun 2003 diawali dengan kelas Ekstensi (Karyawan). SK Direktur Jenderal Pendidikan Tinggi No 05/D/2004. Pada Tahun 2005 menyelenggarakan kelas reguler.</p>
</ol>					   
</ol>					   
			    </div>
			    
			</div>
					</td>


	  
</tbody></table>



<a href="#" id="return-to-top"><i class="icon-chevron-up"></i></a>
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
<!---
<?php 
$this->endWidget();
?>