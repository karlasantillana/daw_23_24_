<!-- 
2. Escribe un programa PHP que permita al usuario introducir tres números
• Dos de ellos serán los límites inferior y superior de un rango, el tercero será un número
situado dentro de dicho rango
• Cuando el programa reciba los datos generará un número aleatorio entre los límites
inferior y superior y lo comparará con el tercer valor.
• Finalmente se informará al usuario si ha acertado el número aleatorio o no y cuantos
intentos lleva. En caso de fallo, la aplicación le permitirá realizar un nuevo intento con
los límites introducidos al principio (es decir podrá intentar adivinar de nuevo el número
aleatorio que se mantiene mientras no se introduzcan nuevos límites).
• Debe haber un enlace para comenzar una nueva partida. 
-->

<?php
    $inferior = $_POST["inferior"];
    $superior = $_POST["superior"];

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adivina número secreto</title>
</head>
<body>
    <h1>Adivina el número secreto</h1>
    <form action="" method="post">
        Límite inferior: <input type="number" name="inferior" REQUIRED><br><br>
        Límite superior: <input type="number" name="superior" REQUIRED><br><br>
        <input type="submit" name="btnEnviar" value="Enviar">

    </form>
    
</body>
</html>