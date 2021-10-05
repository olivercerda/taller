<?php

include("conexionBD.php");

if(isset($_POST["actualizar"])){

    $id_empleado=$_POST['id_empleado'];
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $run=$_POST['run'];
    $email=$_POST['email'];
    $cargo=$_POST['cargo'];
    $envio="UPDATE empleado SET nombre='$nombre',ap_pat='$apellido',run='$run',email='$email',cargo='$cargo' WHERE id_empleado='$id_empleado'";
    $resultado=mysqli_query($conexion,$envio);
    
    if ($envio==true) {
        ?> 
        <h2 class="OK">Se ha Actualizado el Registro</h2>
       <?php
    } else {
        ?> 
        <h2 class="No OK">Error</h2>
       <?php
    }
}
header("Location: http://localhost/Taller/Inicio_digitador.php");

?>