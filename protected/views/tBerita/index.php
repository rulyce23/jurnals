<?php
/* @var $this TBeritaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'informasi berita',
);

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
<?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>'Pilih Informasi',
		));
		
?>

<center>
<h1>Informasi Berita Jurnal </h1>
</center>
<center><img src="image/Global.Png" width="350" height="600" /></center>
<br> <center>berikut ini adalah berupa berbagai pilihan dari informasi jurnal,& anda dapat memilih sesuai kebutuhan informasi yang anda inginkan</br>
<p>pada menu pilihan ini anda dapat melihat event ataupun seputar berita informasi mengenai: </p>
<p>1. info penelitian jurnal</p>
<p>2. info pengabdian jurnal</p>
<p>3. info pendidikan jurnal</p>

<center>
<?php echo CHtml::link('Informasi Penelitian Jurnal', array('tBerita/indexes'), array('class'=>'btn btn-primary')); ?>&nbsp;
<?php echo CHtml::link('Informasi Pengabdian Jurnal', array('tBerita/index2'),  array('class'=>'btn btn-danger')); ?>&nbsp;
<?php echo CHtml::link('Informasi Pendidikan Jurnal', array('tBerita/index3'),  array('class'=>'btn btn-success')); ?>
</center>
<?php 
$this->endWidget();
?>

<a href="#" id="return-to-top"><i class="icon-chevron-up"></i></a>
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
