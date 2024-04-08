<!-- 
Crear un array asociativo de dos dimensiones. La clave de la primera dimensión será el
código de empleado que tendrá el formato “CExxxx” donde xxxx es un número de 4 
cifras.
La segunda dimensión contiene un array asociativo con claves “nombre”, “edad” y 
“salario” cuyo contenido será el nombre, la edad y el salario del empleado.
Hacer una función en PHP que reciba como parámetros el nombre, la edad y el salario 
de un empleado, y calcula un nuevo salario para esa persona en base a su situación:
o Si el salario es mayor de 2.000€, no cambiará.
o Si el salario está entre 1.000 y 2.000€:
    ▪ Si además la edad es mayor de 45 años se sube un 4%.
    ▪ Si la edad es menor o igual que 45 años se sube un 10%
o Si el salario es menor de 1.000€:
    ▪ Los menores de 30 años cobrarán a partir de entonces exactamente 1.500€.
    ▪ De 30 a 45 años sube un 3%.
    ▪ A los mayores de 45 años sube un 15%.
La función debe actualizar en el array los valores en caso de cambio y mostrar en 
pantalla los nombres y el nuevo salario de los que han sufrido modificaciones. 
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<?php
    // foreach($empleado as $cod_empleado => $datos){
    //     nuevo_salario($datos["nombre"] , $datos["edad"] , $datos["salario"]);
    //         function nuevo_salario($nombre, $edad, $salario){

    //         }
    
    // }



?>

</head>
<body>
    
</body>
</html>
<?php
$empleado = array("CE0001" => array("nombre"=>"Juan", 
                                    "edad"=>50, 
                                    "salario"=>2100) , 

                    "CE002" => array("nombre"=>"Ana",
                                    "edad"=>44,
                                    "salario"=>1500) ,

                    "CE003" => array("nombre"=>"Pedro",
                                    "edad"=>22,
                                    "salario"=>950)
                );

    function salarioNuevo($nombre, $edad, $salario){
        
    }

foreach($empleado as $cod_empleado => $datos){
    echo "<br>$cod_empleado:";

    foreach($datos as $clave => $valor){
        echo "<br>$clave=>$valor <br>";
    }
}

echo "<pre>";
print_r ($empleado);
echo "</pre>";

?>