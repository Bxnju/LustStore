<?php
    session_start();

    if(!isset($_SESSION['id_admin'])){
	    echo "<script>
	    alert('No ha iniciado sesion como administrador del sistema.');
	    window.location = './login.php';
	    </script>";
    }

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="img/png" href="../imgs/icono.png">

	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="../css/ingresado.css">
	<link rel="stylesheet" type="text/css" href="../css/main.css">

	<!-- JAVASCRIPT -->
	<script defer type="text/javascript" src="js/main.js"></script>

	<!-- Font-Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

	<title>Home Admin | Lust Store</title>
</head>
<body>

<?php 

include("./navbar_admin.php");
include('../recursos/loader.php');

 ?>

<div class="clearfix"></div>



<div class="imagen"></div>

</body>

<?php 

include("footer_admin.php");

 ?>

</html>