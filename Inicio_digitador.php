<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú Digitador</title>
</head>
<body>
<h1>Bienvenido al menú de digitador</h1>
<script language=Javascript>
function validaNumeros() {
 if ((event.keyCode < 48) || (event.keyCode > 57)) 
  event.returnValue = false;
}
function validaLetras() {
 if ((event.keyCode != 32) && (event.keyCode < 65) || (event.keyCode > 90) && (event.keyCode < 97) || (event.keyCode > 122))
  event.returnValue = false;
}
</script>



<form action="insertar.php" method="post">

    ID Empleado:<br>
    <input type="text" id="id_empleado" autocomplete="off" name="id_empleado"  maxlength="3"required onkeypress="validaNumeros()" />
    <br>
    Nombre:<br><input type="text" id ="nombre" name="nombre" required onkeypress="validaLetras()"/>
    <br>
    Apellido:<br><input type="text" name="apellido" required onkeypress="validaLetras()"/>
    <br>
    RUN:<br><input type="text" id="run" name="run" required minlength="7" maxlength="8" onkeypress="validaNumeros()" /> -
    <input type="text" name="dv" size=1  required maxlength="1" />
    <br>
    Email:<br><input type="email" id="email" name="email"/>
    <br>
    Cargo:<br>
    <input type="text" id="cargo" name="cargo"/>
    <br>
    <br>
     <input type="submit" name="insertar" value="Insertar"/>
</form>
<br>
<form action=Index.php>
    <input type="submit" name="inicio" value="Inicio"/>
    </form>
    <br>
    <form action=ayuda_digitador.php>
    <input type="submit" name="ayuda" value="Ayuda"/>
    </form>
<?php
include("conexionBD.php");
?>
<br>

<table border="1" >
    <tr>
        <td>ID Empleado</td>
        <td>Nombre</td>
        <td>Apellido</td>
        <td>Rut</td>
        <td>E-mail</td>
        <td>Cargo</td>
        <td colspan=2>Accion</td>
    </tr>

    <?php 
    $envio="SELECT * from empleado";
    $resultado=mysqli_query($conexion,$envio);
  

    while($mostrar=mysqli_fetch_array($resultado)){
     ?>

    <tr>
        <form action="Actualizar.php" method="POST">
            <td><input type="text"  name="id_empleado" value="<?=$mostrar['id_empleado']?>"></td>
            <td><input type="text"  name="nombre" value="<?=$mostrar['nombre']?>"></td>
            <td><input type="text"  name="apellido" value="<?=$mostrar['ap_pat']?>"></td>
            <td><input type="text"  name="run" value="<?=$mostrar['run']?>"></td>
            <td><input type="text"  name="email" value="<?=$mostrar['email']?>"></td>
            <td><input type="text"  name="cargo" value="<?=$mostrar['cargo']?>"></td>
            <td><form action="Actualizar.php" method="POST"><input type="hidden" name="id_empleado" value="<?=$mostrar['id_empleado']?>"><input type="submit" name="actualizar" value="Actualizar"></form></td>
        </form>
        <td><form action="Eliminar.php" method="POST"><input type="hidden" name="id_empleado" value="<?=$mostrar['id_empleado']?>"><input type="submit" name="eliminar" value="Eliminar"></form></td>
    </tr>
<?php 

    }

 ?>
</table>

</body>
</html>