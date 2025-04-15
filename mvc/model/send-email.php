<?php
	require 'bookstores/phpmailer/PHPMailer.php';
	require 'bookstores/phpmailer/SMTP.php';
	require 'bookstores/phpmailer/Exception.php';
	require 'bookstores/phpmailer/OAuth.php';

	$mail = new PHPMailer\PHPMailer\PHPMailer();

	if($_POST){

		$mail->isSMTP();
		/*
		Enable SMTP debugging
		0 = off (for production use)
		1 = client messages
		2 = client and server messages
		*/
		$mail->SMTPDebug = 0;//0
		$mail->Host = 'smtp.gmail.com';//
		$mail->Port = 587;//
		$mail->SMTPSecure = 'tls'; //tls
		$mail->SMTPAuth = true;//
		$mail->Username = "andresgonzalezinge@gmail.com";//pipegrow.store@gmail.com
		$mail->Password = "ghlwclkafabxsjbx";//Anapino123
		$mail->setFrom('andresgonzalezinge@gmail.com', 'Te Quieren Contactar Por Tu Portafolio');//andrespino2000@gmail.com
		$mail->addAddress('andrespino2000@gmail.com', 'Portafolio');//
		$mail->Subject = 'Portafolio: '.$nombres;//
		$mail->Body = "Hola como estas mi nombre es ".$_POST['name'].".<br><br>".$_POST['message']."<br><br> Me puedes contactar a este correo: ".$_POST['email'] ;//
		//$mail->AddAttachment($archivo,'Factura'.$idventa.'.pdf');
		$mail->CharSet = 'UTF-8'; // Con esto ya funcionan los acentos
		$mail->IsHTML(true);//

		echo $mail->ErrorInfo;
		
		if ($mail->send()){
			echo"<script>alert('El coreo fue enviado correctamente');</script>";
		}
		else{
			echo"<script>alert('El coreo no pudo ser enviado intente de nuevo');</script>";
		}
	}
	
?>