<!-- 
Crear un array de 20 elementos que contenga números aleatorios entre 1 y 30 sin
repetir. 
*Mostrarlo en pantalla ordenado descendentemente. 
*Los números impares se mostrarán en color rojo y los pares en color verde. 
*Mostrar en pantalla cuántos números salieron repetidos al generar el array y cuáles fueron.
Utiliza funciones de usuario. 
-->

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

    //ordenar array de forma descendente
    arsort($lista);

    foreach($lista as $valor){
        if($valor%2 ==0){
            echo "$valor <br>";
        }else{
            echo "$valor <br>";
        }
    }

    echo "<br>";


    echo "<pre>";
    print_r($lista);
    echo "</pre>";
?>