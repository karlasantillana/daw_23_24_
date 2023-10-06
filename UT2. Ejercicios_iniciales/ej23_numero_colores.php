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
            echo "<span style='color:green'>$valor </span><br>";
        }else{
            echo "<span style='color:red'>$valor <br>";
        }
    }

    echo "<br>";
    echo "Los números repetidos son: <br>";
    echo imprimir($lista_repetidos). "<br>";
    
    //1ºforma/
    // function imprimir($lista){
    //     foreach($lista as $listita){
    //         echo "$listita ";
    //     }
    // }


    //2ºforma/
        function imprimir($lista_repetidos){
            foreach($lista_repetidos as $valor_rep){
                echo "$valor_rep ";
            }
        }

    //3ºforma
    //echo implode(" " , array_count_values($lista_repetidos));

    //4ºforma
    function veces($lista_repetidos , $valor_rep){
        $contadores = array_count_values($lista_repetidos);
        return $contadores =[$valor_rep];
    }

    echo "<pre>";
    print_r($lista);
    echo "</pre>";
?>

<!-- https://es.stackoverflow.com/questions/31480/contar-veces-que-se-repite-un-elemento-en-una-arreglo-con-php -->