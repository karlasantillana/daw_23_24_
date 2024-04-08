<?php
//array asociativo
    $listado2 = array("Junior" => array("Nombre"=>array("Jesus" , "Pepe"),
                                    "DNI"=>array("11111111R" , "22222222T")),
                      "Senior" => array("Nombre"=>array("Mamen" , "Pepi"),
                                    "DNI"=>array("33333333Y" , "44444444U"))              
                );
    

    foreach($listado2 as $categoria_list =>$dato){
        echo "<br>$categoria_list :<br><br>";

        foreach($dato as $claveTipo => $tipo){
            echo "$claveTipo =><br>";

            foreach($tipo as $valores => $valor){
                echo "<br>$valores=>$valor";
            }
        }

    }
    
?>