<?php
    //*********Conexión a bbdd on Mysql********************* */

//almacenar los 4 datos siempre requeridos para conectar con la bbdd
function conectar(){
    $servidor = "localhost:3306"; 
    $bbdd = "alumnos";
    $usuario = "root";
    $clave = "";

    try{
        $conexion =  new PDO("mysql:host=$servidor ; dbname=$bbdd" , $usuario , $clave);

        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Conexión OK";

        return $conexion;

    }catch(PDOException $e){
        echo "Error de conexión a la base de datos: " . $e->getMessage();
    }
}

conectar();

?>