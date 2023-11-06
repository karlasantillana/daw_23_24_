<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pufo SA</title>
    <link rel="stylesheet" href="styles.css">
    <!-- <style>
        @import url('https://fonts.googleapis.com/css2?family=Lato&display=swap');
    </style> -->
    
</head>

<body>
<div class="singinForm">    
    <form action="" method="post" class="form">
        <h1 class="title">Iniciar sesión</h1>

        <div class="inputContainer">
            <input type="text" name="empleado_ID" class="input" placeholder="a" REQUIRED>
            <label for="empleado_ID" class="label"></label>Número de empleado</label>
            
        <div class="inputContainer">
            <input type="text" name="contraseña" class="input" placeholder="a" REQUIRED>
            <label for="contraseña" class="label"></label>Contraseña</label>            
        </div>

        <input type="submit" name="btnEntrar" value="Entrar">
        <input type="reset" name="btnReset" value="Borrar">
    </form>

</div>    
<?php
    require "conexionBBDDPufosa.php";
    
    //comprobar que se haya pulsado el botón Entrar
    if(isset($_REQUEST['btnEntrar'])){
        $user = $_POST["empleado_ID"];
        $pass = $_POST["contraseña"];

        //consulta
        $sql = "SELECT FROM empleados WHERE empleado_ID like $user";

        //consulta preparada
        $stmt = $conexion->prepare($sql);
        
        // foreach($)
    }
?>
</body>
</html>

