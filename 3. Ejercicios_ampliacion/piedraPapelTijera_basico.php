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

<?php
    $opciones = array("piedra" , "papel" , "tijeras");

    $jugador = array("Ganadas"=>$_POST["jugadorGana"],
                    "Perdidas"=>$_POST["jugadorPierde"],
                    "Empatadas"=>$_POST["jugadorEmpata"]);

    $maquina = array("Ganadas"=>$_POST["maquinaGana"],
                    "Perdidas"=>$_POST["maquinaPierde"],
                    "Empatadas"=>$_POST["maquinaEmpata"]);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Piedra, Papel o Tijeras</title>
</head>
<body>
    <h2>Elige una opción</h2>
    <form name="juego" action="" method="post">
        <!-- el mismo name para una opción única-->
        <label><input type="radio" name="jugadaJugador" value="piedra">Piedra</label><br>
        <label><input type="radio" name="jugadaJugador" value="papel">Papel</label><br>
        <label><input type="radio" name="jugadaJugador" value="tijeras">Tijeras</label><br>

        <input type="hidden" name="jugadorGana" value= >

        <input type="submit" value="Jugar">
    </form>
</body>
</html>