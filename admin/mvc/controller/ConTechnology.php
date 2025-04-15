<?php

	include  'mvc/model/admin.php';

	$admin = new admin;
	$dataTechnology = $admin->technology();

	//se inserta el nuevo registro y se guarda la imagen en su respectica carpeta
	if ($_POST['insert']) {

		$insertTechnology = $admin->insertTechnology($_POST['name'],$_POST['percent'],$_FILES['icon']['name'],$_FILES['icon']['tmp_name']);

		if(!$insertTechnology){
			echo alert('<script> No Se Pudo Guardar El Registro </script>');
		}else{
			header("Location: ?router=technology");
		}
	}

	if ($_POST['edit']) {
		$updateTechnology = $admin->updateTechnology($_POST['id'],$_POST['name'],$_POST['percent'],$_FILES['icon']['name'],$_FILES['icon']['tmp_name'],$_POST['iconold']);

		if(!$updateTechnology){
			echo"<script> alert('No se Pudo Actualizar');</script>";
		}else{
			header("Location: ?router=technology");
		}
		
	}

	if($_GET['exit']==1){
		$exit = $admin->exit();
		echo "<script> location.reload(); </script>";
	}

	include  'mvc/view/ViewTechnology.php';

?>