<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Iniciar sesión</h1>
    <form action="" method="post">
        <label for="empleado_ID"></label>Número de empleado:</label>
        <input type="text" name="empleado_ID" REQUIRED> <br><br>
        
        <label for="contraseña"></label>Contraseña:</label>
        <input type="text" name="contraseña" REQUIRED><br><br>
        
        <input type="submit" name="btnEntrar" value="Entrar">
        <input type="reset" name="btnReset" value="Borrar">
    </form>
<?php
    require "conexionBBDDPufosa.php";
    
    //comprobar que se haya pulsado el botón Entrar
    if(isset($_REQUEST['btnEntrar'])){
        $user = $_POST["empleado_ID"];
        $pass = $_POST["contraseña"];

        //consulta
        $sql = "SELECT FROM empleados WHERE empleado_ID like $user";

        // $resultado = $

        // foreach()
    }
?>
</body>
</html>

