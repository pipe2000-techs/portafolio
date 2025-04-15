<?php session_start(); error_reporting(0); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Andres Gonzalez</title>
    <link rel="stylesheet" type="text/css" href="dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="dist/css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="dist/css/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="dist/css/iofrm-theme6.css">
    <link rel="shortcut icon" href="../images/icon/andres.png">
</head>
<body>
    
<?php 

    if(!$_SESSION['admin']){

        require('mvc/controller/ConLogin.php');

    }else{

        header("Location: ./");

    }
        
?>

<script src="dist/js/jquery.min.js"></script>
<script src="dist/js/popper.min.js"></script>
<script src="dist/js/bootstrap.min.js"></script>
<script src="dist/js/main.js"></script>
</body>
</html>