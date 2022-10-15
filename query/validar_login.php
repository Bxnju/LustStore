<?php 


include("conexion.php");

//login de admin
if(isset($_POST["login"])){

    session_start();

    $user= mysqli_real_escape_string($conexion,$_POST['user']);
    $pass= mysqli_real_escape_string($conexion,$_POST['pass']);
    $hash= SHA1($pass);
    $sqlAdmin = "SELECT * FROM admin 
    WHERE user = '$user' AND pass = '$hash'";
    $resultadoAdmin = $conexion->query($sqlAdmin);
    $rowsAdmin = $resultadoAdmin->num_rows;

    if ($rowsAdmin > 0){
        $rowAdmin = $resultadoAdmin->fetch_assoc();
        $_SESSION['id_admin'] = $rowAdmin['id'];
        $_SESSION['user_admin'] = $rowAdmin['user'];
        $_SESSION['pass_admin'] = $rowAdmin['pass'];
        header("location:../admin/ingresado.php");
    }else{
        session_destroy();
        echo "<script>
        alert('Usuario o Contraseña Incorrecta');
        window.location = '../admin/login.php';
        </script>";
    }
}


 ?>