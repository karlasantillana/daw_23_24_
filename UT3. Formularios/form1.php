<!-- El número de veces indicado en el cuadro de texto tendrá que imprimirse la frase “Los bucles 
son fáciles”. Para finalizar se escribirá por pantalla la frase “Se acabó”. 
• El código php y el código html deberán de estar en dos ficheros distintos. 
• Utilizar la sentencia WHILE
• Para recoger el dato metido en el cuadro de texto se utiliza la instrucción $_POST. 
Ejemplo: $number = $_POST['number']; siendo number el name puesto al cuadro 
de texto.
Ampliación: Repite el programa anterior pero en este caso la sentencia a utilizar debe de ser 
FOR y además el código html y php se deberán de encontrar en el mismo fichero. -->

<?php
    if(isset($_POST["enviando"])){

        $number = $_POST["veces"];

        while($number>0){

            echo "Los bucles son fáciles <br>";

            $number--;
        }

        echo "Se acabó";

    }

    /*
    $i=0;
    if(isset($_POST["enviando"])){

        while($_POST["veces"]>$i){

            echo "Los bucles son fáciles <br>";

            $i++;
        }
        echo "Se acabó";

    }
    */

?>