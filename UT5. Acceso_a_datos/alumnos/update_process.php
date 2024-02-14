<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p style="color:red;"><?php echo $msg?></p>
    <a href="modificar.php"> Volver para modificar otro alumno</a>
</body>
</html>

<?php
    $msg = "";

    if(isset($_REQUEST['btnModificar'])){
        $servidor = "localhost";
        $usuario = "root";
        $clave = "";
        $bbdd = "alumnos";

        try{
            //conexión con bbdd
            $conexion= new PDO("mysql:host=$servidor ; dbname=$bbdd", $usuario, $clave);
            //modo excepción
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Conexión OK<br>";

            //Consulta: Actualizar datos modificados del alumno
            $sql = "UPDATE ALUMNOS SET NOMBRE=:nom, APELLIDO=:ape, TELEFONO=:tel, CORREO=:correo WHERE CODIGO=:cod;";

            $stmt = $conexion->prepare($sql);
            //paso valor a los parámetros
            $stmt->bindParam(':nom', $REQUEST['nombre']);
            $stmt->bindParam(':ape', $REQUEST['apellido']);
            $stmt->bindParam(':tel', $REQUEST['telefono']);
            $stmt->bindParam(':correo', $REQUEST['correo']);
            $stmt->bindParam(':cod', $REQUEST['codigo']);
            
            if($stmt->execute())
                $msg= "El alumno se ha actualizado correctamente.";
        
        }catch(PDOException $e){
            echo "Conexión fallida: " .$e->getMessage();
        }
        $conexion = null;

    }else{
        $msg = "Hay algún error en los datos a modificar, vuelva a la página principal.";
    }
?>