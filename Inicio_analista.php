<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú Analista</title>
</head>
<body>
<h1>Menú Analista</h1>


<form action="insertar_usuario.php" method="post">
Usuario:<br>
<input type="text" id ="usuario" name="usuario" />
<br>
Pass:<br>
<input type="text" name="pass" />
<br>
Perfil:<br>
<input type="text" name="perfil" />
<p>1.- Analista </p>
<p>2.- Digitador </p>
<br>
 <input type="submit" name="insertar" value="Insertar"/>
</form>
<br>
<form action=mantenimiento.php>
    <input type="submit" name="Mantenimiento" value="Mantenimiento"/>
    </form>
<br>
<form action=Index.php>
<input type="submit" name="inicio" value="Inicio"/>
</form>
<br>
<table border="1" >
    <tr>
        <td>Usuario</td>
        <td>Perfil</td>
        <td colspan=2>Accion</td>
    </tr>
    <?php 
        include("conexionBD.php");
        $envio="SELECT * from logon";
        $resultado=mysqli_query($conexion,$envio);
        while($mostrar=mysqli_fetch_array($resultado)){
     ?>
    <tr>
        <form action="actualizar_analista.php" method="POST">
            <td><input type="text"  name="usuario" value="<?=$mostrar['usuario']?>"></td>
            <td><input type="text"  name="perfil" value="<?=$mostrar['perfil']?>"></td>
            
            <td><form action="actualizar_analista.php" method="POST"><input type="hidden" name="usuario" value="<?=$mostrar['usuario']?>"><input type="submit" name="actualizar" value="Actualizar"></form></td>
        </form>
        <td><form action="eliminar_usaurio.php" method="POST"><input type="hidden" name="usuario" value="<?=$mostrar['usuario']?>"><input type="submit" name="eliminar" value="Eliminar"></form></td>
    </tr>
    <?php 
    }
    ?>
</table>
</body>