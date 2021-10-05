<?php
include("conexionBD.php");

if(isset($_POST["insertar"])){
    if ( strlen($_POST['id_empleado']) >= 1 && strlen($_POST['nombre']) >= 1 && strlen($_POST['apellido']) >= 1 && strlen($_POST['run']) >= 1 && strlen($_POST['email']) >= 1){
        $id_empleado=$_POST['id_empleado'];
        $nombre=$_POST['nombre'];
        $apellido=$_POST['apellido'];
        $run=$_POST['run'].-$_POST['dv'];
        $email=$_POST['email'];
        $cargo=$_POST['cargo'];

$envio="INSERT INTO empleado(id_empleado,nombre,ap_pat,run,email,cargo) VALUES('$id_empleado','$nombre','$apellido','$run','$email','$cargo');";
$resultado=mysqli_query($conexion,$envio);
    }
    if ($envio==true) {
        ?> 
        <h2 class="OK">Se ha ingresado el Registro</h2>
       <?php
    } else {
        ?> 
        <h2 class="No OK">Error</h2>
       <?php
    }
}
header("Location: http://localhost/Taller/Inicio_digitador.php");
?>