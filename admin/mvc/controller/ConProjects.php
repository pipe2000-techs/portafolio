<?php

	include  'mvc/model/admin.php';

	$admin = new admin;
	$dataTechnology = $admin->viewProjects();

	//se inserta el nuevo registro y se guarda la imagen en su respectica carpeta
	if ($_POST['insert']) {

		$insertProject = $admin->insertProject($_POST['name'],$_POST['description'],$_POST['github'],$_POST['link'],$_FILES['image']['name'],$_FILES['image']['tmp_name'],$_FILES['imageProject']);

		if(!$insertProject){
			echo alert('<script> No Se Pudo Guardar El Registro </script>');
		}else{
			header("Location: ?router=projects");
		}

	}

	if ($_POST['edit']) {
		$updateProject = $admin->updateProject($_POST['id'],$_POST['name'],$_POST['description'],$_POST['github'],$_POST['link'],$_FILES['image']['name'],$_FILES['image']['tmp_name'],$_POST['imageold'],$_FILES['imageProject']);
		

		if(!$updateProject){
			echo"<script> alert('No se Pudo Actualizar');</script>";
		}else{
			header("Location: ?router=projects");
		}
		
	}

	if ($_POST['editt']) {

		$callGallerysPro = $admin->callGallery($_POST['id']);
		
	}

	//elimar las imagenes de la galeria
	if ($_POST['deleteImg']) {

		$deleteImgpro = $admin->deleteImg($_POST['idImg'],$_POST['img']);

		if($deleteImgpro){

			echo "<script>

			Swal.fire({
			  title: 'La imagen se elimino correctamente',
			  icon: 'success',
			})	 

			</script>";

		}else{

			echo "<script>

			Swal.fire({
			  title: 'hubo un problema',
			  icon: 'error',
			})	 

			</script>";

		}
		
	}

	if($_GET['exit']==1){
		$exit = $admin->exit();
		echo "<script> location.reload(); </script>";
	}

	include  'mvc/view/ViewProjet.php';

?>