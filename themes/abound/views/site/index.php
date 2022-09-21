<html>
<body>

<div class="flash-info round">
				Silahkan Login Dengan Username dan Password Yang Telah Di Daftarkan.  <p class="hint">
			Belum Punya Akun? <kbd><?php echo CHtml::link('Buat Akun', array('users/create'));?></kbd>.
		</p>
				</div>
				<?php
 foreach (Yii::app()->user->getFlashes() as $key=>$message){
?>
    <div class="alert alert-<?php echo $key; ?>
"><?php echo $message; ?></div>
<?php
    }

?>
<?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>'informasi release jurnal',
		));
		
?>

<center>
<h1>Info Jurnal Terbaru</h1>

<?php

    foreach ($data as $model ){
	
		
	
?>
	<div class="view2" align="center"><br>
<table border="1" width="555" height="510" >
		<tr>
			<td><p>
				<?php
							echo "<div align='center'>";
							echo CHtml::image(Yii::app()->request->baseUrl.'/berita/'.$model->gambar.'','',array('width'=>"550", 'height'=>"550"));
							echo "<div align='center'><font size=3> Jurnal Artikel: &nbsp;&nbsp;".$model->artikel."</font></div>";
							echo "</div><br><br>";
							echo "<div align='left'><span class='button btn-danger
							'>Published By</span> :".$model->nm_publisher."</div>";
							echo CHtml::link("<div align='right'><p><span class='label label-info'>Lihat Selengkapnya...</p></span></div>
							", array('jurnal/viewjurnal', 'id'=>$model->id_jurnal) );
					?>
			</td>
		</tr>
</table>

		<?php 
			//echo CHtml::link('Daftar', array('daftar', 'id'=>$model->id_beasiswa), array('class'=>'btn btn-success')); 
		?>
		 <div style="float:center;">
    </div> 	
	</p>
<hr>


<?php

 $key="";
//$key previously generated safely
$plaintext = "message to be encrypted";
$ivlen = openssl_cipher_iv_length($cipher="AES-128-CBC");
$iv = openssl_random_pseudo_bytes($ivlen);
$ciphertext_raw = openssl_encrypt($plaintext, $cipher, $key, $options=OPENSSL_RAW_DATA, $iv);
$hmac = hash_hmac('sha256', $ciphertext_raw, $key, $as_binary=true);
$ciphertext = base64_encode( $iv.$hmac.$ciphertext_raw );

//decrypt later....
$c = base64_decode($ciphertext);
$ivlen = openssl_cipher_iv_length($cipher="AES-128-CBC");
$iv = substr($c, 0, $ivlen);
$hmac = substr($c, $ivlen, $sha2len=32);
$ciphertext_raw = substr($c, $ivlen+$sha2len);
$original_plaintext = openssl_decrypt($ciphertext_raw, $cipher, $key, $options=OPENSSL_RAW_DATA, $iv);
$calcmac = hash_hmac('sha256', $ciphertext_raw, $key, $as_binary=true);
if (hash_equals($hmac, $calcmac))
	//PHP 5.6+ timing attack safe comparison
{
    echo $original_plaintext."\n";
}
?>


</div>

   
<?php
    }
?>
</div>

<?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>'welcome',
		));
		
?>

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
<br><br><br>
<center><h1>SELAMAT DATANG DI LPKIA E-JOURNAL</h1>
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
<style type="text/css">

#tooltip{
position: absolute;
left: - 250px;
width: 250px;
border: 1px solid black;
padding: 2px;
background-color: lightblue;
visibility: hidden;
z-index: 100;
/*Remove below line to remove shadow. Below line should always appear last within this CSS*/
filter: progid:DXImageTransform.Microsoft.Shadow(color=gray,direction=135);
}

#pointer{
position:absolute;
left: -300px;
z-index: 101;
visibility: hidden;
}

</style>
<script type="text/javascript">

var cursorX=12 //Customize x offset of tooltip
var cursorY=10 //Customize y offset of tooltip

var offsetdivfrompointerX=10 //Customize x offset of tooltip DIV relative to pointer image
var offsetdivfrompointerY=14 //Customize y offset of tooltip DIV relative to pointer image. Tip: Set it to (height_of_pointer_image-1).

document.write('<div id="tooltip"></div>') //write out tooltip DIV
document.write('<img id="pointer" src="icon/arrow2.gif">') //write out pointer image

var ie=document.all
var ns6=document.getElementById && !document.all
var enabletip=false
if (ie||ns6)
var tipobj=document.all? document.all["tooltip"] : document.getElementById? document.getElementById("tooltip") : ""

var pointerobj=document.all? document.all["pointer"] : document.getElementById? document.getElementById("pointer") : ""

function ietruebody(){
return (document.compatMode && document.compatMode!="BackCompat")? document.documentElement : document.body
}

function ddrivetip(thetext, thewidth, thecolor){
if (ns6||ie){
if (typeof thewidth!="undefined") tipobj.style.width=thewidth+"px"
if (typeof thecolor!="undefined" && thecolor!="") tipobj.style.backgroundColor=thecolor
tipobj.innerHTML=thetext
enabletip=true
return false
}
}

function positiontip(e){
if (enabletip){
var nondefaultpos=false
var curX=(ns6)?e.pageX : event.clientX+ietruebody().scrollLeft;
var curY=(ns6)?e.pageY : event.clientY+ietruebody().scrollTop;
//Find out how close the mouse is to the corner of the window
var winwidth=ie&&!window.opera? ietruebody().clientWidth : window.innerWidth-20
var winheight=ie&&!window.opera? ietruebody().clientHeight : window.innerHeight-20

var rightedge=ie&&!window.opera? winwidth-event.clientX-cursorX : winwidth-e.clientX-cursorX
var bottomedge=ie&&!window.opera? winheight-event.clientY-cursorY : winheight-e.clientY-cursorY

var leftedge=(cursorX<0)? cursorX*(-1) : -1000

//if the horizontal distance isn't enough to accomodate the width of the context menu
if (rightedge<tipobj.offsetWidth){
//move the horizontal position of the menu to the left by it's width
tipobj.style.left=curX-tipobj.offsetWidth+"px"
nondefaultpos=true
}
else if (curX<leftedge)
tipobj.style.left="5px"
else{
//position the horizontal position of the menu where the mouse is positioned
tipobj.style.left=curX+cursorX-offsetdivfrompointerX+"px"
pointerobj.style.left=curX+cursorX+"px"
}

//same concept with the vertical position
if (bottomedge<tipobj.offsetHeight){
tipobj.style.top=curY-tipobj.offsetHeight-cursorY+"px"
nondefaultpos=true
}
else{
tipobj.style.top=curY+cursorY+offsetdivfrompointerY+"px"
pointerobj.style.top=curY+cursorY+"px"
}
tipobj.style.visibility="visible"
if (!nondefaultpos)
pointerobj.style.visibility="visible"
else
pointerobj.style.visibility="hidden"
}
}

function hideddrivetip(){
if (ns6||ie){
enabletip=false
tipobj.style.visibility="hidden"
pointerobj.style.visibility="hidden"
tipobj.style.left="-1000px"
tipobj.style.backgroundColor=''
tipobj.style.width=''
}
}

document.onmousemove=positiontip

</script>

                    <a href="http://localhost/jurnalfix/index.php?r=jurnal/create" onMouseover="ddrivetip('Click Widget Berikut Untuk Upload & Submit For Published Data Jurnal')";
onMouseout="hideddrivetip()"/><img src="icon/cloud.png"/></a>
                  
                    <a href="http://localhost/jurnalfix/index.php?r=jurnal/data" onMouseover="ddrivetip('Click Widget Berikut Untuk Mencari Jurnal')";
onMouseout="hideddrivetip()"/><img src="images/search.png" width="90px" height="90px"/></a>
       
           </form>
		   <br><br>
		   <br><br>
<p><span class='label label-info'>Note</span> : Anda Dapat Mengakses Menu Tersebut Dengan Widget Menu Tampilan Yang Ada Diatas.
<br>		1. Anda Dapat mengupload/ Mengajukan Data Jurnal anda
<br>		2. Anda Dapat Mendownload Data jurnal yang sudah terbiat dan tersedia
<br>		3. Anda Dapat Melihat Berita Jurnal milik Siapa Sajakah & Jurnal Apakah yang sudah di Terbitkan pada List Berita Jurnal

</br>
</div>
     
<?php 
$this->endWidget();
?>
<a href="#" id="return-to-top"><i class="icon-chevron-up"></i></a>
<!--  -->
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
<!---->
<br>

<?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>'LPKIA BANDUNG',
		));
		
?>

<div class="container">
<center>
      <div class="row center">
        <div class="col-md-12">
          <h2>
            <strong>POLITEKNIK LPKIA BANDUNG</strong>
          </h2>
          <p class="lead">
            Lulusannya Mudah Bekerja, Berkualitas, Dan Biaya Terjangkau
          </p>
        </div>
      </div>

    </div>
	</center>
	<div class="row center">
	<center>
        <div class="col-md-4">
          <img src="http://mi.lpkia.ac.id/Main/img/home/home1.jpg" width="300px" height="200px" class="appear-animation fadeInUp appear-animation-visible" data-appear-animation="fadeInUp" alt="dark and light" style="margin: 45px 0px -10px;">
        </div>
        <div class="col-md-4">
          <img src="http://mi.lpkia.ac.id/Main/img/home/home2.jpg" width="300px" height="200px" class="appear-animation fadeInUp appear-animation-visible" data-appear-animation="fadeInUp" alt="dark and light" style="margin: 45px 0px -30px;">
        </div>
        <div class="col-md-4">
          <img src="http://mi.lpkia.ac.id/Main/img/home/home3.jpg" width="300px" height="200px" class="appear-animation fadeInUp appear-animation-visible" data-appear-animation="fadeInUp" alt="dark and light" style="margin: 45px 0px -30px;">
        </div>
		</center>
      </div>
	  <section class="section appear-animation bounceIn appear-animation-visible" data-appear-animation="bounceIn">
      <div class="container">
	<center>
        <div class="row">
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-12">
                <div class="row">

                  <div class="col-md-4">
                    <div class="feature-box feature-box-style-2">
                      <div class="feature-box-icon">
                      </div>
					  <br>
					  <br>
                      <div class="feature-box-info">
                        <h4 class="mb-none">
                        <img src="image/building.png" width="35" height="35" />&nbsp;Fasilitas Lengkap</h4>
                        <p class="tall">LPKIA memberikan fasilitas terlengkap untuk mendukung kegiatan belajar mengajar. terdiri dari perpustakaan, Ruang belajar,Laboratorium Komputer,</p><p>Jaringan,Free Wifi dll</p>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="feature-box feature-box-style-2">
                      <div class="feature-box-icon">
                        <i class="fa fa-location-arrow"></i>
                      </div>
                      <div class="feature-box-info">
                        <h4 class="mb-none">   <img src="image/institut.png" width="35" height="35" />&nbsp; Lokasi Strategis</h4>
                        <p class="tall">LPKIA berada di samping jalan utama (Jl. Soekarno Hatta) Sehingga sangat mudah untuk dijumpai</p>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="feature-box feature-box-style-2">
                      <div class="feature-box-icon">
                        <i class="fa fa-star"></i>
                      </div>
                      <div class="feature-box-info">
                        <h4 class="mb-none"> <img src="image/certificate.png" width="35" height="35" />&nbsp;Sertifikasi Internasional</h4>
                        <p class="tall">LPKIA setiap semester mengadakan sertifikasi Internastional dari perusahaan-perusahaan International, seperti Microsoft, Oracle, MicroTIK dan lain-lain,</p><p> dengan biaya yang lebih murah.</p>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
              <div class="col-md-12">
                <div class="row">

                  <div class="col-md-4">
                    <div class="feature-box feature-box-style-2">
                      <div class="feature-box-icon">
                        <i class="fa fa-file"></i>
                      </div>
                      <div class="feature-box-info">
                        <h4 class="mb-none"><img src="image/curriculum.png" width="35" height="35" />&nbsp;Kurikulum Terbaik</h4>
                        <p class="tall">Kurikulum yang terencana, dan terupdate yang diperuntukan sesuai kebutuhan dunia kerja dapat membantu mahasiswa/i-nya mendapatkan ilmu yang  </p><p>bermanfaat saat didunia kerja.</p>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="feature-box feature-box-style-2">
                      <div class="feature-box-icon">
                        <i class="fa fa-bus"></i>
                      </div>
                      <div class="feature-box-info">
                        <h4 class="mb-none"><img src="image/transport.png" width="35" height="35" />&nbsp;Akses Angkutan Umum Mudah</h4>
                        <p class="tall">Karena LPKIA berada di jalan utama (Jl. Soekarno Hatta) maka akan sangat banyak pilihan angkutan umum yang dapat diakses, selain itu juga di</p> <p>samping kampus LPKIA terdapat halte BUS.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>
</center>

    <?php $this->endWidget();?>
<?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>'Tentang LPKIA',
		));
		
?>
    <?php $this->endWidget();?>
    <?php $this->endWidget();?>