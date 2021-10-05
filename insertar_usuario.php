<?php
include("conexionBD.php");

if(isset($_POST["insertar"])){
    if ( strlen($_POST['usuario']) >= 1 && strlen($_POST['pass']) >= 1 && strlen($_POST['perfil'])){
        $usuario=$_POST['usuario'];
        $pass=$_POST['pass'];
        $perfil=$_POST['perfil'];
        $envio="INSERT INTO logon(usuario,pass,perfil) VALUES('$usuario','".md5($pass)."','$perfil');";
        $resultado=mysqli_query($conexion,$envio);
    }
}
header("Location: http://localhost/Taller/Inicio_analista.php");
?>