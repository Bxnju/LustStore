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


<section id="catalogo">
	<div class="catalogo_title">
		Catalogo
	</div>
	<div class="div_catalogo">
		
<?php 

	include('query/conexion.php');

	$sql = 'SELECT * FROM productos';
	$result = mysqli_query($conexion,$sql);


	while ($mostrar=mysqli_fetch_array($result)) {

		if ($mostrar['inventario'] == 0) {
			
			echo '


			<div class="card hidden">
				<div class="card_main">
					<img style="color: black;" alt="Imagen '.$mostrar['nombre'].'. Producto numero '.$mostrar['id'].'" class="card_image" src="'.$mostrar['img'].'">
				</div>
				<div class="card_info">
					<h5 class="card_category">'.$mostrar['categoria'].'</h5>
					<h4 class="card_title">'.$mostrar['nombre'].'</h4>
					<h5 class="card_autor">Por '.$mostrar['marca'].'</h5>
					<h4 class="card_price" style="color: red; border-radius: 0.5em; padding: 0.2em; margin: .2em auto; background: #D5FDE5; padding: 0.2em; display: inline-flex;">Producto Agotado</h4>
				</div>
			</div>


		';

		}else{

		echo '


		<a href="producto.php?id='.$mostrar['id'].'">
			<div class="card hidden">
				<div class="card_main">
					<img style="color: black;" alt="Imagen '.$mostrar['nombre'].'. Producto numero '.$mostrar['id'].'" class="card_image" src="'.$mostrar['img'].'">
					<div class="card_pop_up">
						<h3>Compra rapida</h3>
					</div>
				</div>
				<div class="card_info">
					<h5 class="card_category">'.$mostrar['categoria'].'</h5>
					<h4 class="card_title">'.$mostrar['nombre'].'</h4>
					<h5 class="card_autor">Por '.$mostrar['marca'].'</h5>
					<h4 class="card_price">$'.$mostrar['precioPantalla'].' COP</h4>
				</div>
			</div>
		</a>


		';

		}



	}
	 ?>

	</div>
</section>




</body>

<?php 

include("./recursos/footer.php");

 ?>

</html>