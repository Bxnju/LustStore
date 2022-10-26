<?php
   
   include("conexion.php");

   if(isset($_POST["actualizar_prenda"])){

    $id = mysqli_real_escape_string($conexion,$_POST['id']);

    $TallaS = "";
    $TallaM = "";
    $TallaL = "";
    $TallaXL = "";

    if ($_POST['TallaS'] == "on") {
        $TallaS = "S";
    }
    if ($_POST['TallaM'] == "on") {
        $TallaM = "M";
    }
    if ($_POST['TallaL'] == "on") {
        $TallaL = "L";
    }
    if ($_POST['TallaXL'] == "on") {
        $TallaXL = "XL";
    }


    $tallas = $TallaS." ".$TallaM." ".$TallaL." ".$TallaXL;
    $color= mysqli_real_escape_string($conexion,$_POST['color']);
    $precio= mysqli_real_escape_string($conexion,$_POST['precio']);
    $inventario= mysqli_real_escape_string($conexion,$_POST['inventario']);

   $actDatos = "UPDATE `productos` SET  tallas = '$tallas', color = '$color', precio = $precio, inventario = $inventario WHERE `productos`.`id` = $id";
   $resultadoAct= $conexion->query($actDatos);

   if ($resultadoAct) {


    echo "<script>
    alert('Los datos de la prenda se han actualizado en el sistema.');
    window.location = '../admin/productos.php';
    </script>";


        }else{
        
    echo "<script>
    alert('Ha ocurrido un error actualizando los datos.');
              history.back();
        </script> ";


        }

   }

   ?>

   