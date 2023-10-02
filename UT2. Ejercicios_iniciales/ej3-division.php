<?php
    function division(){
        global $num1 ,$num2;
        $resultado = $num1 / $num2; 
        
        echo "$num1 / $num2 = $resultado"; 
    }

    echo division();
?>