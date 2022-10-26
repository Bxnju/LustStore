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
	<link rel="stylesheet" type="text/css" href="../css/act_prenda.css">
	<link rel="stylesheet" type="text/css" href="../css/main.css">

	<!-- JAVASCRIPT -->
	<script defer type="text/javascript" src="../js/main.js"></script>

	<!-- Font-Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

	<title>Actualizar Datos Prenda | Lust Store</title>
</head>

<body>

<?php 

include("./navbar_admin.php");
include('../recursos/loader.php');

 ?>


		
	<?php 

		include('../query/conexion.php');
		$id = $_GET['id'];

		$sql = 'SELECT * FROM productos WHERE id = '.$id.'';
		$result = mysqli_query($conexion,$sql);
		$mostrar=mysqli_fetch_array($result);

	 ?>




<div class="center">
	<div class="p_div hidden">
			<img class="p_img" src="../<?php echo $mostrar['img'] ?>">
		<div class="p_elements">
			<div class="p_title">
				<h1><?php echo $mostrar['nombre'] ?></h1>
				<h3>Por <?php echo $mostrar['marca'] ?></h3>
			</div>
			<h2 class="f_title">Actualiza los datos:</h2>
			<form action="../query/act_datos_producto.php?id=<?php echo $mostrar['id'] ?>" method="POST" class="f_product">

					<div class="checkbox">
						<label for="TallaS">Talla S:</label><input checked type="checkbox" name="TallaS">
						<label for="TallaM">Talla M:</label><input checked type="checkbox" name="TallaM">
						<label for="TallaL">Talla L:</label><input checked type="checkbox" name="TallaL">
						<label for="TallaXL">Talla XL:</label><input checked type="checkbox" name="TallaXL">
					</div>
					<label for="color">Color:</label><input type="text" value="<?php echo $mostrar['color'] ?>" name="color" required>
					<label for="precio">Precio:</label><input type="number" value="<?php echo $mostrar['precio'] ?>"name="precio" required>
					<label for="inventario">Inventario:</label><input type="number" value="<?php echo $mostrar['inventario'] ?>" name="inventario" required>
					<input type="number" style="display: none;" value="<?php echo $mostrar['id'] ?>"name="id" required>
					<input type="submit" class="btn_2" value="Actualizar" name="actualizar_prenda">
				
			</form>
		</div>
	</div>
</div>






</body>

<?php 

include("footer_admin.php");

 ?>

</html>
