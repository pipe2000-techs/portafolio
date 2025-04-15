<?php
	$servidor="mysql:dbname=".bd.";host=".servidor;
	
	try{
		
		$pdo= new PDO($servidor,usuario,contraseña, array(PDO::MYSQL_ATTR_INIT_COMMAND=>"set names utf8"));
		
		//echo "<script>alert('CONECTADO....')</script>";
	}catch(PDOException $e){
		
		echo "<script>alert('Could not connect to the database')</script>";
	}
	
?>