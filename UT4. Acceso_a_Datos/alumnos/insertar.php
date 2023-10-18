<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        form{
            width: 30%;
        }
    </style>

</head>
<body>
    <h1>Alta de alumnos</h1>
    <form action="" method="post">
        <fieldset>
            <legend>Dtos del alumno</legend>
            Nombre del alumno:
            <input type="text" name="nombre" required><br><br>
            Apellidos del alumno:
            <input type="text" name="apellidos" required><br><br>
            Teléfono:
            <input type="text" name="telefono" required><br><br>
            Mail de contacto:
            <input type="text" name="mail" requiered><br><br>
            <input type="submit" name="btnEnviar" value="Dar de alta">
        </fieldset>  
    </form>

    <?php
            //*********Conexión a bbdd on Mysql********************* */

    //almacenar los 4 datos siempre requeridos para conectar con la bbdd
    $servidor = "localhost:3307"; //como cambié el puerto a 3307, también lo cambio en el nombre
    $usuario = "root";
    $clave = "";
    $bbdd = "alumnos";

    //Corroborar que llegan los datos con isset
    if(isset($_REQUEST['btnEnviar'])){
        try{
            $conexion = new PDO("mysql:host=$servidor dbname=$bbdd", $usuario, $clave);
            //modo excepción
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Conexión OK";

            //Cnsulta
            $sql = "SELECT COUNT(*) AS 'cantidad' FROM ALUMNOS WHERE correo='".$_REQUEST['mail']."';";
            $result = $conexion->query($sql);
            $num = $result->fetch();

            if($num['cantidad']>0){
                echo "No se puede dar de alta, el alumno ya está matriculado en ese curso<br>";
            }else{
                $sql ="INSERT INTO ALUMNOS (nombre, apellidos, telefono, correo)"
                        . "VALUES(:nom, :ape, :tel, :cor)";

                //conculta preparada        
                $stmt = $conexion->prepare($sql);
                $stmt->binParam(":nom", $_REQUEST['nombre']);
                $stmt->binParam(":ape", $_REQUEST['apellidos']);
                $stmt->binParam(":tel", $_REQUEST['telefono']);
                $stmt->binParam(":cor", $_REQUEST['mail']);
                //para cada juego de variables, ejecutar la sentencia preparada
                $sql->execute();
                echo "Se ha insertado con éxito en alumnos<br/>";
            }

        }catch(PDOexception $e){
            echo "Conexión fallida: " . $e->getMessage();
        }
    }
    

    ?>
</body>
</html>