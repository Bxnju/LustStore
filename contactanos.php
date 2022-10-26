<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="img/png" href="./imgs/icono.png">

	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="./css/contactanos.css">
	<link rel="stylesheet" type="text/css" href="./css/main.css">

	<!-- JAVASCRIPT -->
	<script defer type="text/javascript" src="js/main.js"></script>

	<!-- Font-Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

	<title>Contacto | Lust Store</title>
</head>
<body>

<?php 

include("./recursos/navbar.php");
include('./recursos/loader.php');

 ?>



<div class="form_login">
	<form class="form" action="./query/enviar_mensaje.php" method="post">
		<div class="header">
			<img class="form_png" src="./imgs/icono.png">
			<h2>Contactanos</h2>
		</div>
		<input type="text" placeholder="Nombre *" name="nombre" required>
		<input type="text" placeholder="Correo *" name="correo" required>
		<input type="text" placeholder="Celular" name="celular">
		<textarea name="mensaje" required>Escribe aquí tu mensaje</textarea>
		<input type="submit" value="Mandar mensaje" class="btn_1" name="enviar_mensaje">
	</form>
</div>




</body>

<?php 

include("./recursos/footer.php");

 ?>

</html>

