<?php
    $servidor = "localhost:3306"; //puerto cambiado 3307
    $usuario = "root";
    $clave = "";
    $bbdd = "pufosa";

    try{
        //CONECTAR CON BBDD
        $conexion = new PDO("mysql:host=$servidor ; dbname=$bbdd", $usuario, $clave);
        //Asigar modo excepción
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "Conexión OK <br>";

    }catch(PDOException $e){
        echo "Conexión fallida: " . $e->getMessage();
    }
?>