<!-- 
Realizar un script en PHP se obtenga un número aleatorio entre 1 y 100.
Deberá mostrarse en pantalla el número generado y la suma de todos los números
pares anteriores a él. 
-->
<?php
$pares= array();
$suma=0;

echo $aleatorio=rand(1,100);

for ($i=0 ; $i<$aleatorio ; $i+=2){
    // if($i%2==0){
        $suma=$suma+$i;
        array_push($pares , $i);
    //}
}

//mostrar array
echo "<pre>";
print_r($pares);
echo "</pre>";

echo "Total suma: $suma";

?>