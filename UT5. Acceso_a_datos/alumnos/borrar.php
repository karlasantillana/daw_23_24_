<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dar de baja</title>

    <style>
        form{
            width: 30%;
        }
    </style>

</head>
<body>
    <h1>Borrar alumno</h1>
    <form action="" method="post">
        <fieldset>
            <legend>Datos del alumno a borrar</legend>
            Código del alumno:
            <input type="text" name="codigo" REQUIRED><br><br>
            <input type="submit" name="btnEnviar" value="Borrar">
        </fieldset>
    </form>

    <h4><a href="principal.php">VOLVER AL MENÚ CRUD</a></h4>

    <?php
        if(isset($_REQUEST['btnEnviar'])){
            $servidor = "localhost:3306"; //como cambié el puerto a 3307, también lo cambio en el nombre
            $usuario = "root";
            $clave = "";
            $bbdd = "alumnos";

            try{
                //conexión con bbdd
                $conexion= new PDO("mysql:host=$servidor ; dbname=$bbdd", $usuario, $clave);
                //modo excepción
                $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo "Conexión OK.<br>";

                //comprobar q el registro q se va a borrar, existe en la bbdd
                $sql = "SELECT CODIGO FROM ALUMNOS WHERE codigo=:cod;";

                //consulta preparada//preparo la consulta
                $stmt = $conexion->prepare($sql);
                //utilizo la función intval() para asegurar q se guarda con el tipo de dato definido en el esquema
                $stmt->bindParam(':cod', $_REQUEST['codigo']);
                //ejecutar variable
                $stmt->execute();
                
                $registros = $stmt->fetch(PDO::FETCH_ASSOC);

                //Comprobar si se han encontrado registros
                if($registros>0){
                    $sql = "DELETE FROM ALUMNOS WHERE codigo=:cod;";
                    $stmt = $conexion->prepare($sql);
                    $stmt->bindParam(':cod', $_REQUEST['codigo']);
                    $stmt->execute();

                    echo "El alumn@ se ha eliminado correctamente.";

                }else{
                    echo "El alumn@ a borrar NO existe en la BD.";
                }
            }catch(PDOException $e){
                echo "Conexión fallida: " .$e->getMessage();
            }
            $conexion = null;

        }else{
            echo "Hay que introducir un código a borrar";
        }
        
    ?>
</body>
</html>