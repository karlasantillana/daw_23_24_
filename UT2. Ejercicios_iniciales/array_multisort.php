<?php
    //ORDENACIÓN GENERAL 0,1,2,3,4,5,6,7,8,9,a,b,c,d,e,f,g,h,i.....
    //función array_multisort
    //Si quiero cambiar el criterio de orden 
    $miArray= array(array("10",11,100,100,100,100,"a"),
            array(1,2,"2",3,4,8,1));
    
    array_multisort($miArray[0], SORT_ASC, SORT_STRING,
                    $miArray[1], SORT_NUMERIC, SORT_DESC);

    echo "<pre>";
    print_r($miArray);
    echo "</pre>";
    // var_dump($miArray);

    //*Es decir, 

?>