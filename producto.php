<?php 

		include('query/conexion.php');
		$id = $_GET['id'];

		$sql = 'SELECT * FROM productos WHERE id = '.$id.'';
		$result = mysqli_query($conexion,$sql);
		$mostrar=mysqli_fetch_array($result);

	 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="img/png" href="./imgs/icono.png">

	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="./css/producto.css">
	<link rel="stylesheet" type="text/css" href="./css/main.css">

	<!-- JAVASCRIPT -->
	<script defer type="text/javascript" src="js/main.js"></script>

	<!-- Font-Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

	<title><?php echo $mostrar['nombre'] ?> | Lust Store</title>
</head>
<body>

<?php 

include("./recursos/navbar.php");
include('./recursos/loader.php');

 ?>


		
	




<div class="center">
	<div class="p_div hidden">
			<img class="p_img" src="<?php echo $mostrar['img'] ?>">
		<div class="p_elements">
			<div class="p_title">
				<h1><?php echo $mostrar['nombre'] ?></h1>
				<h3>Por <?php echo $mostrar['marca'] ?></h3>
			</div>
			<div class="p_info">
				<div class="p_size">Tallas: <?php echo $mostrar['tallas'] ?></div>
				<div class="p_color">Color: <?php echo $mostrar['color'] ?></div>
				<div class="p_price">Precio: $<?php echo number_format($mostrar['precio']) ?> COP</div>
			</div>
			<h2 class="f_title">Adquiere este producto:</h2>
			<form action="./query/comprar_producto.php?id=<?php echo $mostrar['id'] ?>" method="POST" class="f_product">
					<input type="text" placeholder="Nombres" name="nombresCliente" required>
					<input type="text" placeholder="Apellidos" name="apellidosCliente" required>
					<input type="email" placeholder="Correo electronico" name="correo" required>
					<input type="number" placeholder="Numero de celular" name="celular" required>
					<select name="tipoTarjeta" required>
						<option selected disabled>Por favor, seleccione el tipo de tarjeta.</option>
						<option>BBVA</option>
						<option>BANCOLOMBIA</option>
						<option>VISA</option>
						<option>MASTERCARD</option>
					</select>
					<input type="number" placeholder="Numero de Tarjeta" name="nroTarjeta" required>
					<select name="talla" required>
						<option selected disabled>Selecciona la talla.</option>
						<option>S</option>
						<option>M</option>
						<option>L</option>
						<option>XL</option>
					</select>
					<input type="number" placeholder="Cantidad de Producto. (Disponibles: <?php echo $mostrar['inventario'] ?>)" name="cantidadProducto" required>
					<input type="submit" class="btn_2" value="Comprar" name="comprarProducto">
				
			</form>
		</div>
	</div>
</div>





</body>

<?php 

include("./recursos/footer.php");

 ?>

</html>