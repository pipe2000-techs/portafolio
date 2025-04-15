<?php

	include  'mvc/model/admin.php';

	$admin = new admin;

	//se actualiza el perfil
	if ($_POST['edit']) {

		$insertProject = $admin->UpdateProfile($_POST['DesProfile']);

		if(!$insertProject){
			echo "<script>

			Swal.fire({
			  title: 'No se pudo actuilizar',
			  icon: 'error',
			})	 

			</script>";
		}else{
			echo "<script>

			Swal.fire({
			  title: 'Se actualizo correctamente',
			  icon: 'success',
			})	 

			</script>";
			header("Location: ?router=profile");
		}
	}

	//se llama la descripcion del perfil
	$CalProfile = $admin->CallProfile();

	//seelimina la hoja de vida anterior y se guarga la nueva
	if ($_POST['newCurriculum']) {

		$url_temp = $_FILES["curriculum"]["tmp_name"];

		$Curriculum = $admin->newCurriculum($url_temp);

		if(!$Curriculum ){
			echo "<script>

			Swal.fire({
			  title: 'Algo Salio Mal',
			  icon: 'error',
			})	 

			</script>";
		}else{
			echo "<script>

			Swal.fire({
			  title: 'Se actualizo correctamente la hoja de vida',
			  icon: 'success',
			})	 

			</script>";
		}

	}

	include  'mvc/view/ViewProfile.php';

	if($_GET['exit']){
		$exit = $admin->exit();
		echo "<script> location.reload(); </script>";
	}



?>