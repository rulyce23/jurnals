<?php
error_reporting(0);

function rand_string( $length ) {
	$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";	

	$size = strlen( $chars );
	for( $i = 0; $i < $length; $i++ ) {
		$str .= $chars[ rand( 0, $size - 1 ) ];
	}

	return $str;
}

include 'config.php';
$nama = $_POST['nama'];
$email = $_POST['email'];
$id = rand_string( 10 );
if (!isset($nama)) {
echo "Lengkap form";
}
elseif (!isset($email)) {
	echo "Lengkapi form";
} 
else {

	// cek apakah email sudah terdaftar
	$query = "SELECT email FROM User WHERE email='$email'";
	$find = mysqli_query($query);

		//$add = "insert into User set id='$id', name='$nama', email='$email', confirm='no'";
		$set = mysqli_query($add);
		if ($set) {

		} else {

		}
		require_once('protected/extensions/mailer/phpmailer/class.phpmailer.php'); //menginclude librari phpmailer

		$mail             = new PHPMailer();
		$body             = 
		"<body style='margin: 10px;'>
		<div style='width: 640px; font-family: Helvetica, sans-serif; font-size: 13px; padding:10px; line-height:150%; border:#eaeaea solid 10px;'>
		<br>
		<strong>Reset Password</strong><br>
		<b>Nama Anda : </b>".$nama."<br>
		<b>Email : </b>".$email."<br>
		<b>reset password link =http://localhost/jurnalfix/index.php?r=users/reset<br>
		<br>
		</div>
		</body>";
		$mail->IsSMTP();
	    $mail->IsHTML(true);
		$mail->SMTPAuth = true;
		$mail->SMTPSecure = "ssl";
		$mail->Host = "smtp.gmail.com";
		//$mail->Host 	= '49.xxx.xxx.xxx'; // Gunakan Ip Shared Address Hosting Anda
		$mail->Port       = 465;  // post gunakan port 25
		$mail->Username   = "ejurnallpkia@gmail.com"; // username email akun
		$mail->Password   = "13222316ejul";        // password akun
		$mail->SetFrom('ejurnallpkia@gmail.com', 'E-Jurnal Team Prodi MI LPKIA');

		$mail->Subject    = "Reset Password";
		$mail->MsgHTML($body);

		$address = $email; //email tujuan
		$mail->AddAddress($address, "Hello (Receiver name)");

		if(!$mail->Send()) {
			echo "Oops, Mailer Error: " . $mail->ErrorInfo;
		} else {
			echo "Mail Sukses";
         
		}
	}

print $message->sid;

?>
