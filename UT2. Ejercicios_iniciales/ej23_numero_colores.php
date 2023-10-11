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
            border: 1px solid;
            border-collapse: collapse;
        }
    </style>
    <?php
        //1ºforma/
        function contar_valores_rep($lista_repetidos , $lista){
            $i=0;
            foreach($lista_repetidos as $valor_rep){
                if($lista==$valor_rep)
                $i++;
                echo "El número $valor_rep ha salido $i veces.<br>";
            }
        }
    
        //2ºforma
        // echo implode(" " , array_count_values($lista_repetidos));
    
    
        //3ºforma
        // function veces($lista_repetidos , $valor_rep){
        //     $contadores = array_count_values($lista_repetidos);
        //     return $contadores =[$valor_rep];
        // }
    ?>
</head>
<body>
    
</body>
</html>
<?php
    $lista = array();
    $lista_repetidos = array();
    $contador = 0;

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

    echo "Han salido los siguientes números:<br><br>";
    echo "<table><tr>";
    //*Los números impares se mostrarán en color rojo y los pares en color verde
    foreach($lista as $clave => $valor){
        echo "<td>$clave</td></tr>";
        echo "<tr>";
        if($valor%2 ==0){
            echo "<td><span style='color:green'>$valor </span></td>";
        }else{
            echo "<td><span style='color:red'>$valor </span></td>";
        }

    }
    echo "</tr></table>";


    echo "<br>";
    echo "Ha habido un total de "  . count($lista_repetidos) . " números repetidos. <br><br>";

    echo "Los números repetidos han sido: <br><br>";
    echo contar_valores_rep($lista_repetidos, $lista). "<br>";


    // echo "<pre>";
    // print_r($lista);
    // echo "</pre>";
?>
