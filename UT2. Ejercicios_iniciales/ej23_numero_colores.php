<!-- 
Crear un array de 20 elementos que contenga números aleatorios entre 1 y 30 sin
repetir. 
*Mostrarlo en pantalla ordenado descendentemente. 
*Los números impares se mostrarán en color rojo y los pares en color verde. 
*Mostrar en pantalla cuántos números salieron repetidos al generar el array y cuáles fueron y cuántas veces se repitieron.
Utiliza funciones de usuario. 
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números Colores</title>

    <style>
        table,td{
            border: 1px black solid;
            border-collapse: collapse;
            padding: 8px;
        }
    </style>
    <?php

    ?>
</head>
<body>
    
</body>
</html>
<?php
    $lista = array();
    $lista_repetidos = array();
    $contador = 0;

    //lista de números
    while($contador<20){
        $num = rand(1,30);

        if(in_array($num, $lista)){
            array_push($lista_repetidos, $num);
        }else{
            array_push($lista,$num);
            $contador++;
        }
    }


    //*Ordenar array de forma descendente
    arsort($lista);

    echo "Han salido los siguientes números (Posición y número):<br><br>";
    
    //Clave del número en lista y tabla (1ªfila)
    echo "<table><tr>";
    foreach($lista as $clave => $valor){
        echo "<td>" .$clave ."</td>";
    }
    echo "</tr><tr>";

    //*Números en colores y tabla (2ªfila)
    foreach($lista as $valor){
        echo "<td>";
        if($valor%2 ==0){
            echo "<span style='color:green'>$valor </span>";
        }else{
            echo "<span style='color:red'>$valor </span>";
        }
        echo "</td>";
    }
    echo "</tr></table>";


    echo "<br>";
    //Contar números repetidos
    echo "Ha habido un total de "  . count($lista_repetidos) . " números repetidos. <br><br>";

    echo "Los números repetidos han sido: <br><br>";

    //Repeticiones de cada número repetido
    foreach($lista_repetidos as $key=>$value){
        if($value>1){
            echo "El número $key ha salido $value veces.<br>";
        }
    }
    
    // echo "<pre>";
    // print_r($lista);
    // echo "</pre>";
?>
