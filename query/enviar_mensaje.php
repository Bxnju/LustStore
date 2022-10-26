<?php 

include('conexion.php');


if (isset($_POST['enviar_mensaje'])) {


	$nombre = mysqli_real_escape_string($conexion, $_POST['nombre']);
	$correo = mysqli_real_escape_string($conexion, $_POST['correo']);
	$celular = mysqli_real_escape_string($conexion, $_POST['celular']);
	$mensaje = mysqli_real_escape_string($conexion, $_POST['mensaje']);

	if (!($mensaje == "Escribe aquí tu mensaje")) {
		
		
		$sqlMensaje = "INSERT INTO `contactanos` (`identidad`, `celular`, `correo`, `mensaje`) VALUES ('$nombre', $celular, '$correo', '$mensaje');";
		$runSqlMensaje = mysqli_query($conexion, $sqlMensaje);

		if ($runSqlMensaje) {
			echo "

				<script>
					window.alert('El mensaje se ha enviado a la plataforma. Pronto estaremos en contacto.');
					 window.location = '../contactanos.php';
				</script>

			";
		}

	}else{
		echo "

		<script>
			window.alert('Al parecer no ha editado aun el mensaje.');
			 history.back();
		</script>

		";
	}

}


 ?>