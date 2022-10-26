<?php
   
   include("conexion.php");

   if(isset($_POST["actualizar_cliente"])){

    $id = $_GET['id'];
    $nombres= mysqli_real_escape_string($conexion,$_POST['nombres']);
    $apellidos= mysqli_real_escape_string($conexion,$_POST['apellidos']);
    $correo= mysqli_real_escape_string($conexion,$_POST['correo']);
    $celular= mysqli_real_escape_string($conexion,$_POST['celular']);
    $tipoTarjeta= mysqli_real_escape_string($conexion,$_POST['tipoTarjeta']);
    $nroTarjeta= mysqli_real_escape_string($conexion,$_POST['nroTarjeta']);

   $actDatos = "UPDATE `clientes` SET  nombres = '$nombres', apellidos = '$apellidos', correo = '$correo', celular = $celular, tipoTarjeta = '$tipoTarjeta', numeroTarjeta = $nroTarjeta WHERE `clientes`.`id` = $id";
   $resultadoAct= mysqli_query($conexion, $actDatos);

   if ($resultadoAct) {


    echo "<script>
    alert('Los datos del cliente se han actualizado en el sistema.');
    window.location = '../admin/clientes.php';
    </script>";


        }else{
        
    echo "<script>
    alert('Ha ocurrido un error actualizando los datos.');
              history.back();
        </script> ";


        }

   }

   ?>

   