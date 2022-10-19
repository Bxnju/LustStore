<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="img/png" href="./imgs/icono.png">

	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="./css/catalogo.css">
	<link rel="stylesheet" type="text/css" href="./css/main.css">

	<!-- JAVASCRIPT -->
	<script defer type="text/javascript" src="js/main.js"></script>

	<!-- Font-Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

	<title>Catalogo | Lust Store</title>
</head>
<body>

<?php 

include("./recursos/navbar.php");
include('./recursos/loader.php');

 ?>


		
<?php 

	include('query/conexion.php');
	$id = $_GET['id'];

	$sql = 'SELECT * FROM productos WHERE id = '.$id.'';
	$result = mysqli_query($conexion,$sql);
	$mostrar=mysqli_fetch_array($result);

	echo $mostrar['nombre'];

	 ?>





</body>

<?php 

include("./recursos/footer.php");

 ?>

</html>