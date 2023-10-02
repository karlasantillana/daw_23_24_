<!-- 3. Solicitar que se introduzca por teclado el nombre de una persona y disponer tres 
controles de tipo radio que nos permitan seleccionar si la persona:
1) no tiene estudios
2) estudios primarios
3) estudios secundarios
Mostrar un mensaje con los datos introducidos -->

<?php
/*
SI EL VALUE DE CADA RADIO EN EL FORMULARIO FUESE
1) no tiene estudios
2) estudios primarios
3) estudios secundarios

solo habría que imprimirlo
///////////////////////////////////////////////////7
    if(isset($_POST["enviando"])){

    echo $_POST['nombre_usuario'] . "<br>";
    echo $_POST['estudios_usuario'];
    }
*/



/*
SI EL VALUE DE CADA RADIO ES 1, 2, 3
//////////////////////////////////////// 
*/
/*    if(isset($_POST["enviando"])){
        echo $nombre = $_POST["nombre_usuario"];
        $estudios = $_POST["estudios_usuario"];

        switch($estudios){

            case 1:
                echo "<br>no tiene estudios";
                break;

            case 2:
                echo "<br>estudios primarios";
                break;

            case 3:
                echo "<br>estudios secundarios";
                break;
        }
    }
*/


    /*SIN CREAR VARIABLE PARA CADA $_POST */

    if(isset($_POST["enviando"])){

        echo $_POST["nombre_usuario"];

        switch($_POST["estudios_usuario"]){

            case 1:
                echo $estudios = "<br>no tiene estudios";
                break;

            case 2:
                echo $estudios = "<br>estudios primarios";
                break;

            case 3:
                echo $estudios = "<br>estudios secundarios";
                break;
        }
    }
?>