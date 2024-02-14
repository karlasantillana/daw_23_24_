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
            <legend>Datos del alumno</legend>
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

    <h4><a href="principal.php">VOLVER AL MENÚ CRUD</a></h4>

    <?php
            //*********Conexión a bbdd on Mysql********************* */

    //almacenar los 4 datos siempre requeridos para conectar con la bbdd
    $servidor = "localhost:3306"; //como cambié el puerto a 3307, también lo cambio en el nombre
    $usuario = "root";
    $clave = "";
    $bbdd = "alumnos";

    //Corroborar que llegan los datos con isset
    if(isset($_REQUEST['btnEnviar'])){
        try{
            //conexión con bbdd
            $conexion = new PDO("mysql:host=$servidor ; dbname=$bbdd", $usuario, $clave);
            //modo excepción
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Conexión OK.<br>";

            //Consulta para que no hayan registros repetidos con ayuda del correo ya que es único
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
                $stmt->bindParam(":nom", $_REQUEST['nombre']);
                $stmt->bindParam(":ape", $_REQUEST['apellidos']);
                $stmt->bindParam(":tel", $_REQUEST['telefono']);
                $stmt->bindParam(":cor", $_REQUEST['mail']);
                //para cada juego de variables, ejecutar la sentencia preparada
                $stmt->execute();
                echo "Se ha insertado con éxito en Alumnos<br/>";
            }

        }catch(PDOException $e){
            echo "Conexión fallida: " . $e->getMessage();
        }

        $conexion = null;
    }
    

    ?>
</body>
</html>