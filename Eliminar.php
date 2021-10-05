<?php
include("conexionBD.php");

if(isset($_POST["eliminar"])){

    $id_empleado=$_POST['id_empleado'];
    $envio="DELETE FROM empleado WHERE id_empleado=$id_empleado";
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
    header("Location: http://localhost/Taller/Inicio_digitador.php");
 }

?>