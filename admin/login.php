<?php

session_start();

if(isset($_SESSION['id_admin'])){
   header("location:./ingresado.php");
}

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="img/png" href="../imgs/icono.png">

	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="../css/login.css">
	<link rel="stylesheet" type="text/css" href="../css/main.css">

	<!-- JAVASCRIPT -->
	<script defer type="text/javascript" src="../js/main.js"></script>

	<!-- Font-Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

	<title>Login | Lust Store</title>
</head>
<body>

<?php 

	include('../recursos/loader.php');

 ?>

<header>
	<h3>Aprovecha nuestras increibles ofertas que tendremos en el proximo black-friday!</h3>
</header>

<nav>
	<div class="logo">
		<img src="../imgs/logo.png" draggable="false">
	</div>
	<div class="links">
		<a href="../index.php">Home</a>
		<a href="../catalogo.php">Catalogo</a>
		<a href="../nosotros.php">Sobre Nosotros</a>
		<a href="../contactanos.php">Contactanos</a>
		<a href="login.php">Login</a>
	</div>
</nav>


<div class="clearfix"></div>

<div class="form_login">
	<form class="form" action="../query/validar_login.php" method="post">
		<img class="form_png" src="../imgs/icono.png">
		<h2>LOGIN</h2>
		<input type="text" placeholder="Username" name="user">
		<input type="password" placeholder="Password" name="pass">
		<input type="submit" value="Ingresar" class="btn_1" name="login">
	</form>
</div>


</body>


<?php 

include("../recursos/footer.php");

 ?>

</html>