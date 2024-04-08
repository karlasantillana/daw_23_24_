<!-- 
Realiza un programa en php en el que se declare un vector de 5 posiciones. Cada
posición tomará como valor un color distinto (azul, rojo, verde, rosa, naranja). 
A continuación, deberá de comprobar si el valor rosa se encuentra almacenado en el array.
Si es así, deberá de borrar el elemento del array.
-->

<?php

$colores = array("azul" , "rojo" , "verde" , "rosa" , "naranja");
echo "<pre>";
print_r ($colores);
echo "</pre>";

$posicionEncontrada= 0; //contador

for($i=0 ; $i<count($colores) ; $i++){

    if($colores[$i]=="rosa"){
        $posicionEncontrada = $i;
        echo 'El valor rosa se encuentra almacenado en el array $colores<br>' ; //comilla simple:  ignora que $colores es una variable y lo muestra literalmente
    }
}
//función array_splice insertar o borrar($array,posicióninsertar, 0(insertar)1(borrar),valor en dicha posicion)
array_splice($colores , $posicionEncontrada , 1); 
//unset($colores[3]); //elimina todo el valor incluido su índice

echo "<pre>";
print_r ($colores);
echo "</pre>";

?>