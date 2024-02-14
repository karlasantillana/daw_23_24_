<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar</title>

    <style>
        form{
            width: 30%;
        }
    </style>
</head>
<body>
    <h1>Buscar alumnos</h1>
    <p style="color:red;"><?=$msg?></p> <!--mirar xq? no funciona $msg si ya lo he inicializado en php-->
    <form action="" method="post">
        <fieldset>
            <legend>Datos del alumno a buscar</legend>
            Nombre del alumno:
            <input type="text" name="nombre" REQUIRED><br><br>
            <input type="submit" name="btnEnviar" value="Buscar">
        </fieldset>
    </form>

    <h4><a href="principal.php">VOLVER AL MENÚ CRUD</a></h4>

    <?php
    echo $msg="";
        if(isset($_REQUEST['btnEnviar'])){
            $servidor = "localhost:3306";
            $usuario = "root";
            $clave = "";
            $bbdd = "alumnos";

            try{
                //conexión con bbdd
                $conexion= new PDO("mysql:host=$servidor ; dbname=$bbdd", $usuario, $clave);
                //asinar el modo excepción
                $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo "Conexión OK<br />";

                //consulta para que se encuentre el nombre en cualuqier parte del nombre del servidor
                $sql = "SELECT * FROM ALUMNOS WHERE NOMBRE LIKE :nom;";

                //consulta preparada
                $stmt = $conexion->prepare($sql);
                $nombre = "%" . $_REQUEST['nombre'] . "%";
                $stmt->bindParam(':nom' , $nombre);
                //ejecutar variable
                $stmt->execute();
                //mostrar con fetch
                $registros = $stmt->fetchAll(PDO::FETCH_ASSOC);

                //Comprobar si se han encontrado registros
                if(count($registros)>0){
                    echo "<h2>Alumn@s encontrados que contienen el nombre " .$_REQUEST['nombre']. "</h2>";
                    echo "<ul>";
                    //recorro la lista de registros
                    foreach($registros as $fila){
                        echo "<li>código: " . $fila['CODIGO']. ", Nombre: " . $fila['NOMBRE'].
                        " " .$fila['APELLIDOS']. ", Teléfono: " .$fila['TELEFONO'].
                        ", correo electrónico: " .$fila['CORREO'].  "</li>";
                    }
                    echo "</ul>";
                }else{
                    $msg="No se ha encontrado ningún alumn@ que contenga " .$_REQUEST['nombre']. "en su nombre";
                }
            }catch(PDOException $e){
                echo "Conexión fallida: " .$e->getMessage();
            }
            
            $conexion = null;
        }
    ?>
</body>
</html>