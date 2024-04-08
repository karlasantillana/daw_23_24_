<?php

if(isset($_POST['btnEnviar'])){

    $empleado=array(
        "CE"+$codigo->array(
            "nombre"->$_POST['nombre'],
            "edad"->intval($_POST['edad'],
            "salario"->intval($_POST['salario']));

$salarioActual=0;
$salariocalculo=0;   
function nuevoSalario($nom,$ed,$sal){
    $salarioActual=0;
    if ($salario>2000){
        $salarioActual=$salario;
    }

    if ($salario>1000 && $salario<2000){
        if ($edad>=45){
            $salariocalculo=$salario*0.04;
            $salarioActual=$salario+$salariocalculo;    
        }

        ifelse ($edad<=45){
            $salariocalculo=$salario*0.1
            $salarioActual=$salario+$salariocalculo;  
        }

    }
    ifelse ($salario<1000){
        if($edad>30 && $edad<45){
            $salariocalculo=$salario*0.03;
            $salarioActual=$salario+$salariocalculo;  
        }
        if else($edad>45){
            $salariocalculo=$salario*0.15;
            $salarioActual=$salario+$salariocalculo;  
        }
        if else($edad<30){
            $salarioActual=1500;
        }
    foreach $empleado as $key->$array{
        foreach $array as $indice->$salario{
            $salario=$salarioActual;
    
        }
    }
    return $empleado;
    }

}

print_r($empleado);

}

//-----------------------------------------------------//

foreach $empleado as $indice->$valor{
        $indice="CE"+$contador;
        $contador++;
    foreach ($valor as $subindice->$subvalor){
        $subindice["nombre"]=$_POST["nombre"];
        $subindice["edad"]=intval($_POST["edad"]);
        $subindice["salario"]=intval($_POST["salario"]);
    }

}

print_r($empleado);
?>