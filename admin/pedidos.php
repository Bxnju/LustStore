<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="img/png" href="../imgs/icono.png">

	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="../css/pedidos.css">
	<link rel="stylesheet" type="text/css" href="../css/tablas.css">
	<link rel="stylesheet" type="text/css" href="../css/main.css">

	<!-- JAVASCRIPT -->
	<script defer type="text/javascript" src="../js/main.js"></script>

	<!-- Font-Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

	<title>Pedidos | Lust Store</title>
</head>

<body>

<?php 

include("./navbar_admin.php");
include('../recursos/loader.php');

 ?>



<h2 class="titulo_pedidos">Sin entregar:</h2>

<div class="contenedor_tabla">
		<table class="styled-table">
	 	<thead>
            <tr>
                <th>Id Pedido</th>
            	<th>Nombres</th>
            	<th>Apellidos</th>
            	<th>Tarjeta</th>
            	<th>Producto</th>
            	<th>Talla</th>
            	<th>Cantidad</th>
            	<th>Total</th>
            	<th>Acciones</th>
            </tr>
        </thead>
       	<tbody>

        <?php 

        	include("../query/conexion.php");

			$sql="SELECT * from pedidos WHERE entregado = 0 ORDER BY id ASC";
			$result=mysqli_query($conexion,$sql);

			while($mostrar=mysqli_fetch_array($result)){

		 ?>
                
                    <tr>
                    	<td><?php echo $mostrar['id'] ?></td>
                        <td><?php echo $mostrar['nombresCliente'] ?></td>
                        <td><?php echo $mostrar['apellidosCliente'] ?></td>
                        <td><?php echo $mostrar['tipoTarjeta'] ?></td>
                        <td><?php echo $mostrar['nombreProducto'] ?></td>
                        <td><?php echo $mostrar['talla'] ?></td>
                        <td><?php echo $mostrar['cantidad'] ?></td>
                        <td><?php echo number_format($mostrar['precioTotal']) ?></td>
                        <td><a title="Marcar como Entregado" onClick="marcarEntregado(<?php echo $mostrar['id'] ?>)"><i class="fas fa-check"></i></a>
                        </td>
                    </tr>
                
        <?php 
			}
	 	?>
	 	</tbody>
    </table>

	</div>

<h2 class="titulo_pedidos">Entregados:</h2>

<div class="contenedor_tabla">
		<table class="styled-table">
	 	<thead>
            <tr>
                <th>Id Pedido</th>
            	<th>Nombres</th>
            	<th>Apellidos</th>
            	<th>Tarjeta</th>
            	<th>Producto</th>
            	<th>Talla</th>
            	<th>Cantidad</th>
            	<th>Total</th>
            	<th>Estado</th>
            </tr>
        </thead>
       	<tbody>

        <?php 

        	include("../query/conexion.php");

			$sql="SELECT * from pedidos WHERE entregado = 1 ORDER BY id ASC";
			$result=mysqli_query($conexion,$sql);

			

			while($mostrar=mysqli_fetch_array($result)){

				if (is_null($mostrar['id'])) {
					echo "<h1>perra</h1>";
				}else{
		 ?>
                
                    <tr>
                    	<td style="padding: 1.4em 1em;"><?php echo $mostrar['id'] ?></td>
                        <td style="padding: 1.4em 1em;"><?php echo $mostrar['nombresCliente'] ?></td>
                        <td style="padding: 1.4em 1em;"><?php echo $mostrar['apellidosCliente'] ?></td>
                        <td style="padding: 1.4em 1em;"><?php echo $mostrar['tipoTarjeta'] ?></td>
                        <td style="padding: 1.4em 1em;"><?php echo $mostrar['nombreProducto'] ?></td>
                        <td style="padding: 1.4em 1em;"><?php echo $mostrar['talla'] ?></td>
                        <td style="padding: 1.4em 1em;"><?php echo $mostrar['cantidad'] ?></td>
                        <td style="padding: 1.4em 1em;"><?php echo number_format($mostrar['precioTotal']) ?></td>
                        <td style="padding: 1.4em 1em; color: #486F57;">Entregado.
                        </td>
                    </tr>
                
        <?php 
			}

			}
	 	?>
	 	</tbody>
    </table>

	</div>

</body>

<?php 

include("../recursos/footer.php");

 ?>

</html>
