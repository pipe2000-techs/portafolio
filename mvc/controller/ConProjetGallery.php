<?php

	include  '../model/briefcase.php';

	$idProjet = $_GET['idProjet'];

	$briefcase = new briefcase;
	$proGallery = $briefcase->progetGallery($idProjet);

	echo json_encode($proGallery);

?>