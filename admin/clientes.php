<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="img/png" href="../imgs/icono.png">

	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="../css/clientes.css">
	<link rel="stylesheet" type="text/css" href="../css/tablas.css">
	<link rel="stylesheet" type="text/css" href="../css/main.css">

	<!-- JAVASCRIPT -->
	<script defer type="text/javascript" src="../js/main.js"></script>

	<!-- Font-Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

	<title>Clientes | Lust Store</title>
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
                <th>Id Cliente</th>
            	<th>Nombres</th>
            	<th>Apellidos</th>
            	<th>Celular</th>
            	<th>Correo</th>
            	<th>Tipo de Tarjeta</th>
            	<th>Acciones</th>
            </tr>
        </thead>
       	<tbody>

        <?php 

        	include("../query/conexion.php");

			$sql="SELECT * from clientes ORDER BY id ASC";
			$result=mysqli_query($conexion,$sql);
	    
			while($mostrar=mysqli_fetch_array($result)){

		 ?>
                
                    <tr>
                    	<td><?php echo $mostrar['id'] ?></td>
                        <td><?php echo $mostrar['nombres'] ?></td>
                        <td><?php echo $mostrar['apellidos'] ?></td>
                        <td><?php echo $mostrar['celular'] ?></td>
                        <td><?php echo $mostrar['correo'] ?></td>
                        <td><?php echo $mostrar['tipoTarjeta'] ?></td>
                        <td> <a href="actualizar_datos_cliente.php?id=<?php echo $mostrar['id']; ?>" title="Editar"><i class="fas fa-user-edit"></i></a>
                            <a title="Eliminar" onclick="eliminarCliente(<?php echo $mostrar['id'] ?>)">
                            	<i class="fas fa-trash-alt"></i></a>
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
