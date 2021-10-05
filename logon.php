<?php
include("conexionBD.php");
$usuario=$_POST['usuario'];
$pass=$_POST['pass'];
$query = "SELECT pass, perfil FROM logon WHERE usuario = '$usuario';";
$resultado = mysqli_query($conexion, $query);
while($fila = mysqli_fetch_array($resultado)){
    $user_pass = $fila["pass"];
    $user_id_perfil = $fila["perfil"];
}
$query_p = "SELECT perfil FROM perfil WHERE id_perfil = $user_id_perfil;";
$resultado = mysqli_query($conexion, $query_p);
while($fila = mysqli_fetch_array($resultado)){
    //echo(var_dump($fila));
    //echo("WHILE!!");
    $user_perfil = $fila["perfil"];
}
if(isset($user_pass)){
    if($user_pass == md5($pass)){
        header("Location: http://localhost/Taller/Inicio_" . $user_perfil . ".php");
    }else{
        header("Location: http://localhost/Taller/Index.php?msg=Contraseña%20incorrecta");
    }
}else{
    header("Location: http://localhost/Taller/Index.php?msg=Usuario%20no%20encontrado");
}
?>
