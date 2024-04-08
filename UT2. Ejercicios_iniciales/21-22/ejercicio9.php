<?php

	$n=intval($_GET['dia']);
	
	
	if ($n >=1) {

    /* Sólo si el día es válido,
       se ejecuta la instrucción switch */

        /* Inicio del anidamiento */
        switch ($n):
        
            case 1 : echo "   Lunes" ;
                     break;
            case 2 : echo"  Martes";
                     break;
            case 3 : echo "  Miercoles";
                     break;
            case 4 : echo"  Jueves" ;
                     break;
            case 5 : echo " Viernes" ;
                     break;
            case 6 : echo "\n   Sabado";
                     break;
            case 7 : echo "  Domingo" ;
					break;
			default;
				echo "Por favor introduzca un numero del 1 al 7";
        endswitch;

   
}

?>