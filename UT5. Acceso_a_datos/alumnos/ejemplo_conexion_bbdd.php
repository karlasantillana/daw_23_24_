<?php
    //*********Conexión a bbdd on Mysql********************* */

    //almacenar los 4 datos siempre requeridos para conectar con la bbdd
    $servidor = "localhost:3306"; //como cambié el puerto a 3307, también lo cambio en el nombre
    $bbdd = "alumnos";
    $usuario = "root";
    $clave = "";

    try{
        //CONECTAR CON BBDD
        $conexion = new PDO("mysql:host=$servidor ; dbname=$bbdd", $usuario, $clave);
        //Asignar modo excepción
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Conexión OK";

        /////////CONSULTA PREPARADA////////////
        // //consulta preparada con método prepare() de la clase PDO
        // $sql = $conexion->prepare("INSERT INTO alumnos(nombre) VALUES(:nombre)");
        
        // //Asignar valores a los parámetros con el método bindParam()
        // $sql->bindParam(":nombre" , $nombre);
        // //valores a las variables
        // $nombre = "Zzzzzz";
        // //para cada juego de variables, ejecutar la sentencia preparada
        // $sql->execute();
        //echo "<p>Se ha agregado el registro</p>"

        //CONSULTA NO preparada //no hace falta preparar la consulta como con prepare
        $sql = $conexion->exec("DELETE FROM alumnos WHERE nombre='Zzzzzz'");
        echo "<p>Se ha borrado el registro</p>";


    }catch(PDOException $e){
        echo "Conexión fallida: " . $e->getMessage();
    }

?>