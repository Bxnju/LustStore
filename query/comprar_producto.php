<?php 

include('conexion.php');

if(isset($_POST['comprarProducto'])){

	$id = $_GET['id'];

	$sql = "SELECT * FROM `productos` WHERE `id` = $id;";
	$runSql = mysqli_query($conexion, $sql);
	
	$mostrar = mysqli_fetch_array($runSql);

	$textoPredTarjeta = "Por favor, seleccione el tipo de tarjeta.";
	$colorProducto = $mostrar['color'];
	$nombreProducto = $mostrar['nombre'];
	$precioUnitario = $mostrar['precio'];
	$inventarioProducto = $mostrar['inventario'];

	$nombresCliente = mysqli_real_escape_string($conexion,$_POST['nombresCliente']);
	$apellidosCliente = mysqli_real_escape_string($conexion,$_POST['apellidosCliente']);
	$correo = mysqli_real_escape_string($conexion,$_POST['correo']);
	$celular = mysqli_real_escape_string($conexion,$_POST['celular']);
	$tipoTarjeta = mysqli_real_escape_string($conexion,$_POST['tipoTarjeta']);
	$nroTarjeta = mysqli_real_escape_string($conexion,$_POST['nroTarjeta']);
	$talla = mysqli_real_escape_string($conexion,$_POST['talla']);
	$cantidadProducto = mysqli_real_escape_string($conexion,$_POST['cantidadProducto']);

	$precioTotal = (int)$precioUnitario * (int)$cantidadProducto;
	$nuevoInventario = $inventarioProducto - $cantidadProducto;

	if($tipoTarjeta != $textoPredTarjeta && $tipoTarjeta != null){

		if($nuevoInventario < 0){
			echo "

			<script>
				window.alert('Lo sentimos. En el momento solo tenemos ".$inventarioProducto." unidades disponibles de este producto.');
				 history.back();
			</script>

			";

		}else{

			echo "

			<script>
				alert('Muchas gracias por confiar en nosotros. La compra ha sido realizada con exito y agregada al sistema.');
				 window.location = '../catalogo.php';
			</script>

			";

			$sqlPedido = "INSERT INTO `pedidos` (`nombresCliente`, `apellidosCliente`, `correo`, `celular`, `tipoTarjeta`, `numeroTarjeta`, `idProducto`, `nombreProducto`, `talla`, `color`, `cantidad`, `precioUnitario`, `precioTotal`) VALUES ('$nombresCliente', '$apellidosCliente', '$correo', '$celular', '$tipoTarjeta', '$nroTarjeta', '$id', '$nombreProducto', '$talla', '$colorProducto', '$cantidadProducto', $precioUnitario, $precioTotal);";
			$sqlCliente = "INSERT INTO `clientes` (`nombres`, `apellidos`, `celular`, `correo`, `tipoTarjeta`, `numeroTarjeta`) VALUES ('$nombresCliente', '$apellidosCliente', '$celular', '$correo', '$tipoTarjeta', '$nroTarjeta');";
			$sqlInventario = "UPDATE `productos` SET `inventario` = '$nuevoInventario' WHERE `productos`.`id` = $id;";

			$runSqlCliente = mysqli_query($conexion, $sqlCliente);
			$runSqlPedido = mysqli_query($conexion, $sqlPedido);
			$runSqlInventario = mysqli_query($conexion, $sqlInventario);



		}


	}else{

		echo "

			<script>
				window.alert('Al parecer no ha seleccionado el tipo de tarjeta.');
				 history.back();
			</script>

			";

	}

}

 ?>