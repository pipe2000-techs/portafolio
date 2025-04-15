<?php

	include  'mvc/model/admin.php';

	$admin = new admin;

	//se inserta el nuevo registro y se guarda la imagen en su respectica carpeta
	if ($_POST['login']) {

		$validateLogin = $admin->login($_POST['user'],$_POST['password']);

		if(!$validateLogin){
			$message = '<div class="alert alert-danger alert-dismissible" role="alert">
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
								</button>
								<center>Usuario o Contraseña Incorectos</center>
							</div>';
		}else{
			$_SESSION['admin'] = $validateLogin; 
			header("Location: ?router=profile");
		}
	}

	include  'mvc/view/ViewLogin.php';

?>