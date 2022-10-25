<?php

   
  include("conexion.php");


  $id = $_GET['id'];
 
  $sql = "DELETE FROM `productos` WHERE `productos`.`id` = '$id'";
  $runSql = $conexion->query($sql);

  if ($runSql) {

    echo "<script>
    alert('La prenda ha sido eliminada del sistema.');
          window.location = '../admin/productos.php';
    </script> ";

  }else{
        
    echo "<script>
    alert('Se presento un error al intentar borrar la prenda.');
              history.back();
        </script> ";

  }


?>

