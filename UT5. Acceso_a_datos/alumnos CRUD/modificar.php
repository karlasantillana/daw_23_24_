<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar</title>

    <style>
        form{
            width: 30%;
        }
    </style>
</head>
<body>
    <h1>Modificar alumno</h1>
    <p style="color:red;"><?=$msg?></p>

    <?php
    $datosCorrectos =0;

        $html="";
        if(!$datosCorrectos){
            $html="<form action='' method='post'>";
            $html.="<fieldset><legend>Código del alumno a modificar</legend>";
            $html.="Código del alumno: <input type='text' name='codigo' REQUIRED><br><br>";
            $html.="<input type='submit' name='btnEnviar' value='Buscar'>";
            $html.="</fieldset></form>";
        }else{
            $html="<form action='update_process.php' method='post'>";
            $html.="<fieldset><legend>Datos actuales del alumno a modificar</legend>";
            $html.="Nombre: <input type='text' name='nombre' value=' ".$reg['NOMBRE']." '><br><br>";
            $html.="Apellidos: <input type='text' name='apellidos' value=' ".$reg['APELLIDOS']." '><br><br>";
            $html.="Teléfono: <input type='text' name='telefono' value=' ".$reg['TELEFONO']." '><br><br>";
            $html.="Correo electrónico: <input type='text' name='correo' value=' ".$reg['CORREO']." '><br><br>";
            $html.="<input type='hidden' name='hidenCodigo' value=' ".$reg['CODIGO']." '><br><br>";
            $html.="<input type='submit' name='btnModificar' value='Modificar'>";
            $html.="</fieldset></form>";
            $html.="";
        }   

        echo $html;
    ?>

    <?php 
    //Comprobar si se ha escrito algo en el campo del formulario de la página
        $msg="";
        $datosCorrectos=false;

        if(isset($_REQUEST['codigo'])){
            $servidor = "localhost:3306"; //como cambié el puerto a 3307, también lo cambio en el nombre servidor
            $usuario = "root";
            $clave = "";
            $bbdd = "alumnos";

            //Comprobar que existe el alumno a modificar
            try{
                //conexión con bbdd
                $conexion= new PDO("mysql:host=$servidor ; dbname=$bbdd", $usuario, $clave);
                //modo excepción
                $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo "Conexión OK<br>";

                //Consulta: buscar el alumno por código
                $sql = "SELECT * FROM ALUMNOS WHERE codigo=:cod;";
                
                //consulta preparada
                $stmt = $conexion->prepare($sql);
                $stmt->bindParam(':cod', $REQUEST['codigo']);
                //ejecutar variable
                $stmt->execute();
                $reg = $stmt->fetch(PDO::FETCH_ASSOC);

                //si encuentra el registro, pinta un form para introducir los nuevos datos
                if($reg<=0){
                    $msg="El alumn@ a modificar NO existe en la BD";
                    $datosCorrectos=false;
                }else{
                    $datosCorrectos=true;
                }
            }catch(PDOException $e){
                echo "Conexión fallida: " .$e->getMessage();
            }
            $conexion = null;

        }else{
            $msg = "Hay algún error en los dtos a modificar, vuelva a la página principal.";
        }
    ?>

    <h4><a href="principal.php">VOLVER AL MENÚ CRUD</a></h4>
</body>
</html>