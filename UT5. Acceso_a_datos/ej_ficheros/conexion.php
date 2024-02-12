<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    //*********Conexión a bbdd on Mysql********************* */

    //almacenar los 4 datos siempre requeridos para conectar con la bbdd
    $servidor = "localhost:3307"; 
    $usuario = "root";
    $clave = "";
    $bbdd = "alumnos";

    try{
        //CONECTAR CON BBDD
        $conexion = new PDO("mysql:host=$servidor ; dbname=$bbdd", $usuario, $clave);
        //Asigar modo excepción
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Conexión OK <br>";

    }catch(PDOException $e){
        echo "Conexión fallida: " . $e->getMessage();
    }

?>
</body>
</html>