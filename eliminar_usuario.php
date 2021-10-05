<?php
include("conexionBD.php");

if(isset($_POST["eliminar"])){

    $usuario=$_POST['usuario'];
    $envio="DELETE FROM usuario WHERE usuario=$usuario";
    $resultado=mysqli_query($conexion,$envio);
    if ($envio==true) {
        ?> 
        <h2 class="OK">Se ha Eliminado el Registro</h2>
       <?php
    } else {
        ?> 
        <h2 class="No OK">Error</h2>
       <?php
    }
    header("Location: http://localhost/Taller/inicio_analista");
 }

?>