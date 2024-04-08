<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>

    <?php
        function resta(){
            global $num1 , $num2;
            echo "$num1 - $num2 = " . $num1 - $num2;
        }

        function multiplicacion($num1 , $num2){
            echo "$num1 x $num2 = " . $num1 * $num2;
        }
    ?>
</head>
<body>
<!-- Realiza un programa en php que dados dos números calcule la suma, la resta, la 
multiplicación, la división y el módulo y muestre los resultados obtenidos. El programa 
debe cumplir los siguientes requisitos:
• La suma se realizará dentro del propio body
• La resta se realizará mediante una función en el head y se llamará desde el body sin 
parámetros
• La multiplicación se realizará mediante una función en el head y se llamará desde el 
body con parámetros (los valores de la multiplicación)
• La división y el módulo se realizarán en ficheros externos y se llamarán mediante 
include -->

    <?php
        //SUMA
        $num1 = 4;
        $num2 = 2;

        echo "$num1 + $num2 = " . $num1 + $num2;
        echo "<br>";

        //RESTA
        echo resta();
        echo "<br>";

       //MULTIPLICACIÓN
        echo multiplicacion(5 , 3);
        echo "<br>";

        //DIVISIÓN
        include ("ej3-division.php");
        echo "<br>";

        //MÓDULO
        include ("ej3-modulo.php");
        echo "<br>";
    ?>

</body>
</html>
