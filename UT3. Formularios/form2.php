<!-- Crear un formulario que solicite el nombre de persona y su edad, luego mostrar en otra 
página si es mayor de edad (si la edad es mayor o igual a 18). 
Utiliza el método GET. -->

<?php
    if(isset($_GET["enviando"])){

        $nombre = $_GET["nombre_usuario"];
        $edad = $_GET["edad_usuario"];

        if($edad>=18){
            echo "$nombre eres MAYOR de edad.";

        }
        else{
            echo "$nombre eres MENOR de edad. ¡Vuelve cuando cumplas 18!";
        }
    }

?>