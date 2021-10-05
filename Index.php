<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Bienvenido</h1>
    <h4>Ingreso automatizado a su perfil, solo ingrese su Usuario y Contrase&ntilde;a</h4>
    <form action=logon.php method="POST" >
    Usuario:<br>
    <input type="text" id="usuario" name="usuario"/>
    <br>
    <label for="pass">Contrase&ntilde;a</label><br><input type="password" id ="pass" name="pass" />
    <br>

    <br>
    
    <input type="submit" name="Ingresar" value="Ingresar"/>
    </form>
    <br>
    <form action=ayuda.php>
    <input type="submit" name="ayuda" value="Ayuda"/>
    </form>
<?php
    if(isset($_GET["msg"])){
        echo("<p><strong><span style='color:rgba(220, 20, 20, 1);'>" . $_GET["msg"] . "</span></strong></p>");
    }
?>
</body>