<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="img/png" href="../imgs/icono.png">

	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="../css/productos.css">
	<link rel="stylesheet" type="text/css" href="../css/tablas.css">
	<link rel="stylesheet" type="text/css" href="../css/main.css">

	<!-- JAVASCRIPT -->
	<script defer type="text/javascript" src="../js/main.js"></script>

	<!-- Font-Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

	<title>Productos | Lust Store</title>
</head>

<body>

<?php 

include("./navbar_admin.php");
include('../recursos/loader.php');

 ?>


<div class="contenedor_tabla">
		
		<table class="styled-table hidden">
	 	<thead>
            <tr>
                <th>Id Producto</th>
            	<th>Categoria</th>
            	<th>Nombre</th>
            	<th>Marca</th>
            	<th>Precio</th>
            	<th>Inventario</th>
            	<th>Acciones</th>
            </tr>
        </thead>
       	<tbody>

        <?php 

        	include("../query/conexion.php");

			$sql="SELECT * from productos ORDER BY id ASC";
			$result=mysqli_query($conexion,$sql);

			while($mostrar=mysqli_fetch_array($result)){

		 ?>
                
                    <tr>
                    	<td><?php echo $mostrar['id'] ?></td>
                        <td><?php echo $mostrar['categoria'] ?></td>
                        <td><?php echo $mostrar['nombre'] ?></td>
                        <td><?php echo $mostrar['marca'] ?></td>
                        <td><?php echo number_format($mostrar['precio']) ?></td>
                        <td><?php echo $mostrar['inventario'] ?></td>
                        <td> <a href="actualizar_datos_prenda.php?id=<?php echo $mostrar['id']; ?>" title="Editar"><i class="fa-solid fa-pen-to-square"></i></a>
                            <a title="Eliminar" onClick="eliminarProducto(<?php echo $mostrar['id'] ?>)"><i class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
                
        <?php 
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
