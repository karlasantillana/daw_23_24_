<!-- Realizar un programa en php donde dado un número del 1 al 7 indique a que día de la 
semana corresponde. Si el número no está entre 1 y 7 el programa lo deberá de indicar.
 -->
    <?php
        $num = 6;

        switch($num){
            case 1:
                echo"Lunes";
            break;

            case 2:
                echo"Martes";
            break;

            case 3:
                echo"Miércoles";
            break;

            case 4:
                echo"Jueves";
            break;

            case 5:
                echo"Viernes";
            break;

            case 6:
                echo"Sábado";
            break;

            case 7:
                echo"Domingo";
            break;

            default:
                echo "El número indicado NO está entre 1 y 7";
            
        }

    ?>
