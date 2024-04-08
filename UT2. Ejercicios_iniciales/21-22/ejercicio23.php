<?php

    $elementos[20];
    $temporal;
    $elementos_repetidos[];
    $num_elementos_repetidos=0;
    function existe_elemento(array,elemento){
        resultado=in_array(elemento,array);
        if resultado==true{
            $elementos_repetidos[$num_elementos_repetidos]=elemento
            
            $num_elementos_repetidos++
                
            
        }
       return resultado;                    
    }
                            
    for ($i=0;$i<=20;$i++){
        
        $temporal=rand(1,30);
        if existe_elemento(elementos,temporal){
            $i=$i-1;
        }
        else{
            $elementos[$i]=$temporal;
                
        }
        
    }
    
    rsort($elementos);

    for ($i=0;$i<=20;$i++){
        if elementos[i] %2 ==0{
            echo "<verde=>" $elementos[$i].
        }
        
        else{
            echo "rojo"
        }
    }

?>