<?php

	include  'mvc/model/briefcase.php';
	include  'mvc/model/send-email.php';

	$briefcase = new briefcase;
	$dataTechnology = $briefcase->technology();
	$dataProjects = $briefcase->projects();
	$Profile = $briefcase->profile();


?>