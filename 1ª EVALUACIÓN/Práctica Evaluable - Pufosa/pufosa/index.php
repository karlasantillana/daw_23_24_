<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pufo SA</title>

    <link rel="stylesheet" href="/pufosaa/styles.css" type="text/css" media=screen>    
</head>

<body>
    <div class="inicio_principal">    
        <form action="" method="post" class="form">
            <img src="/pufosa/imagen/logo1-removebg.png" class="logo">

            <h1 class="title">Iniciar sesión</h1>

            <div class="inputContainer">
                <input type="text" name="empleado_ID" class="input" placeholder="a" REQUIRED>
                <label for="empleado_ID" class="label">Número de empleado</label>
            </div>

            <div class="inputContainer">
                <input type="text" name="contraseña" class="input" placeholder="a" REQUIRED>
                <label for="contraseña" class="label">Contraseña</label>            
            </div>

            <div class="botones">
                <input type="submit" class="boton" name="btnEntrar" value="Entrar">
                <input type="reset" class="boton borrar" name="btnReset" value="Borrar">
            </div>
        </form>

    </div>    
</body>
</html>

<?php
    require "conexionBBDDPufosa.php";
    
    //comprobar que se haya pulsado el botón Entrar
    if(isset($_REQUEST['btnEntrar'])){
        $user = $_POST["empleado_ID"];
        $contraseña = $_POST["contraseña"];

        try{
            //consulta
            $sql = "SELECT FROM empleados WHERE empleado_ID like $user"; //usuario
            $pass = ""; 
            $id; 

            //consulta preparada
            // $stmt = $conexion->prepare($sql); //o ->query ?? 
            $result = $conexion->query($sql);

            foreach($result as $fila){
                $fila['empleado_ID']; 
                $fila['Inicial_del_segundo_apellido']; //la pass es la inicial del 2º apellido en mayúscula y su empleado_ID
                $fila['Trabajo_ID']; //función de usuario 671: MANAGER, 672:PRESIDENT

                $usuario = $fila['empleado_ID'];
                $pass = $fila['Inicial_del_segundo_apellido']. $fila['empleado_ID'];
                $id = $fila['Trabajo_ID'];
            }

            if($pass == $contraseña){
                echo "Usuario válido";

                fopen('pufosa.txt', 'a+b');

                if($id == 671){
                    

                }else if($id ==672){

                }
            }
        }catch(PDOException $e){
            echo "Conexión fallida: " .$e->getMessage();
        }
        $conexion = null;

    }else{
        echo "Los datos no son correctos.";
    }
?>


