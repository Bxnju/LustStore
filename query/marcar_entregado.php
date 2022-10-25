<?php

   
  include("conexion.php");


  $id = $_GET['id'];
 
  $sql = "UPDATE `pedidos` SET `entregado` = '1' WHERE `pedidos`.`id` = $id;";
  $runSql = $conexion->query($sql);

  if ($runSql) {

    echo "<script>
    alert('El pedido ha sido marcado como entregado.');
          window.location = '../admin/pedidos.php';
    </script> ";

  }else{
        
    echo "<script>
    alert('Se presento un error al marcar el pedido como entregado.');
              history.back();
        </script> ";

  }


?>

