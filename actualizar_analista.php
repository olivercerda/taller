<?php

include("conexionBD.php");

if(isset($_POST["actualizar"])){

    $usuario=$_POST['usuario'];
    $perfil=$_POST['perfil'];
    
    $envio="UPDATE usuario SET usuario='$usuario',perfil=$perfil WHERE id_empleado='$id_empleado'";
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
header("Location: http://localhost/Taller/Inicio_analista.php");

?>