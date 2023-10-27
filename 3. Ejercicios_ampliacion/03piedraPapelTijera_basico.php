<!-- 
Realizar un script que simule el tradicional juego de piedra papel o tijeras.
• Habrá un único jugador que jugará contra la máquina y podrán jugar todas las veces que
se desee. Al jugador se le mostrarán las tres opciones posibles entre las que deberá
seleccionar una, y un botón “Jugar” para enviar al servidor la jugada realizada. Una vez
terminada la partida, se volverán a mostrar las opciones y el botón para volver a jugar.
• En el servidor se generará una jugada aleatoria de las tres posibles y se comparará con
la introducida por el usuario.
• La página que se devuelve al usuario mostrará, el texto “Has elegido XXX y la máquina
ha elegido YYY” y a continuación, si el resultado ha sido que ha habido empate, ha
ganado el jugador o ha ganado la máquina.

Se dará la posibilidad de realizar una partida larga (al mejor de 5 por ejemplo), para ello el
sistema debe ser capaz de mostrar el número de partidas ganadas, empatadas y perdidas que
lleva el usuario y la máquina en cada una de las rondas.  
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Piedra, Papel o Tijeras</title>
</head>
<body>
    <h2>Selecciona una opción</h2>
    <form name="juego" action="" method="post">
        <!-- el mismo name para una opción única-->
        <label><input type="radio" name="jugadaJugador" value="piedra">Piedra</label><br>
        <label><input type="radio" name="jugadaJugador" value="papel">Papel</label><br>
        <label><input type="radio" name="jugadaJugador" value="tijeras">Tijeras</label><br>

        <!-- necesitan información para cuando se actualice -->
        <input type="hidden" name="jugadorGana" value="<?= $jugador["Ganadas"]??0 ?>" >
        <input type="hidden" name="jugadorPierde" value="<?= $jugador["Perdidas"]??0 ?>" >
        <input type="hidden" name="jugadorEmpata" value="<?= $jugador["Empatadas"]??0 ?>" >

        <input type="hidden" name="jugadorGana" value="<?= $jugador["Ganadas"]??0 ?>" >
        <input type="hidden" name="jugadorPierde" value="<?= $jugador["Perdidas"]??0 ?>" >
        <input type="hidden" name="jugadorEmpata" value="<?= $jugador["Empatadas"]??0 ?>" >

        <input type="submit" name="btnEnviar" value="Jugar">
    </form>




<?php
    $opciones = array("piedra" , "papel" , "tijeras");

    //la primera vez se inicializa en 0
    $jugador = array("Ganadas"=>$_POST["jugadorGana"]??0,
                    "Perdidas"=>$_POST["jugadorPierde"]??0,
                    "Empatadas"=>$_POST["jugadorEmpata"]??0);

    $maquina = array("Ganadas"=>$_POST["maquinaGana"]??0,
                    "Perdidas"=>$_POST["maquinaPierde"]??0,
                    "Empatadas"=>$_POST["maquinaEmpata"]??0);

    if(isset($_POST["btnEnviar"])){
        $jugad
    }

    
?>

<br><br>
<h3>Resultados jugador:</h3>

</body>
</html>