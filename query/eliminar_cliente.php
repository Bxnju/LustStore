<?php

   
  include("conexion.php");


  $id = $_GET['id'];
 
  $sql = "DELETE FROM `clientes` WHERE `clientes`.`id` = '$id'";
  $runSql= $conexion->query($sql);

  if ($runSql) {

    echo "<script>
    alert('Usuario eliminado correctamente del sistema');
          window.location = '../admin/clientes.php';
    </script> ";

  }else{
        
    echo "<script>
    alert('Error al intentar borrar el usuario');
              history.back();
        </script> ";

  }


?>

