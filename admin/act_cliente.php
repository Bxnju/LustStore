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
	<link rel="stylesheet" type="text/css" href="../css/act_cliente.css">
	<link rel="stylesheet" type="text/css" href="../css/main.css">

	<!-- JAVASCRIPT -->
	<script defer type="text/javascript" src="../js/main.js"></script>

	<!-- Font-Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

	<title>Actualizar Datos Cliente | Lust Store</title>
</head>

<body>

<?php 

include("./navbar_admin.php");
include('../recursos/loader.php');

	include('../query/conexion.php');
	$id = $_GET['id'];

	$sql = 'SELECT * FROM clientes WHERE id = '.$id.'';
	$result = mysqli_query($conexion,$sql);
	$mostrar=mysqli_fetch_array($result);

?>

<div class="center">
	<div class="p_div hidden">
		<img src="../imgs/camisetas_negras.png">
		<div class="p_elements">
			<div class="p_title">
				<h1>Formulario Actualizacion de Datos</h1>
			</div>
			<form action="../query/act_datos_cliente.php?id=<?php echo $mostrar['id'] ?>" method="POST" class="f_product">
					
					<div class="fila">
						<div class="columna">
							<label for="nombres">Nombres:</label>
							<input type="text" value="<?php echo $mostrar['nombres'] ?>" name="nombres" required>
						</div>
						<div class="columna">
							<label for="apellidos">Apellidos:</label>
							<input type="text" value="<?php echo $mostrar['apellidos'] ?>" name="apellidos" required>
						</div>
					</div>
					
					<div class="fila">
						<div class="columna">
							<label for="Correo">Correo:</label>
							<input type="email" value="<?php echo $mostrar['correo'] ?>" name="correo" required>
						</div>
						
						<div class="columna">
							<label for="Celular">Celular:</label>
							<input type="number" value="<?php echo $mostrar['celular'] ?>" name="celular" required>
						</div>
					</div>
					
					<div class="fila">
						<div class="columna">
							<label for="color">Tipo:</label>
							<select name="tipoTarjeta" required>
								<option selected><?php echo $mostrar['tipoTarjeta'] ?></option>
								<option>BBVA</option>
								<option>BANCOLOMBIA</option>
								<option>VISA</option>
								<option>MASTERCARD</option>
							</select>
						</div>
						
						<div class="columna">
							<label for="color">Tarjeta:</label>
							<input type="number" value="<?php echo $mostrar['numeroTarjeta'] ?>" name="nroTarjeta" required>
						</div>
					</div>
					<input type="submit" class="btn_2" value="Actualizar" name="actualizar_cliente">
				
			</form>
		</div>
	</div>
</div>










</body>

<?php 

include("footer_admin.php");

 ?>

</html>
