<?php
$b = array(
    "Juvencia" => array(
        "Juvencia" => array(
            "Resultado" => " ",
            "Amarillas" => " ",
            "Rojas" => " ",
            "Penalty" => " "
        ),
        "Mosconia" => array(
            "Resultado" => "3-2",
            "Amarillas" => "1",
            "Rojas" => "0",
            "Penalty" => "1"
        ),
        "Canicas" => array(
            "Resultado" => "5-3",
            "Amarillas" => "0",
            "Rojas" => "1",
            "Penalty" => "2"
        ),
        "Condal" => array(
            "Resultado" => "7-1",
            "Amarillas" => "5",
            "Rojas" => "2",
            "Penalty" => "1"
        ),
        "Piloñesa" => array(
            "Resultado" => "0-2",
            "Amarillas" => "1",
            "Rojas" => "0",
            "Penalty" => "0"
        ),
    ),
    "Mosconia" => array(
        "Juvencia" => array(
            "Resultado" => "0-11 ",
            "Amarillas" => "4",
            "Rojas" => "2",
            "Penalty" => "4"
        ),
        "Mosconia" => array(
            "Resultado" => " ",
            "Amarillas" => " ",
            "Rojas" => " ",
            "Penalty" => " "
        ),
        "Canicas" => array(
            "Resultado" => "2-1",
            "Amarillas" => "0",
            "Rojas" => "0",
            "Penalty" => "2"
        ),
        "Condal" => array(
            "Resultado" => "1-0",
            "Amarillas" => "1",
            "Rojas" => "0",
            "Penalty" => "0"
        ),
        "Piloñesa" => array(
            "Resultado" => "1-2",
            "Amarillas" => "1",
            "Rojas" => "0",
            "Penalty" => "0"
        ),
    ),
    "Canicas" => array(
        "Juvencia" => array(
            "Resultado" => "0-0",
            "Amarillas" => "0",
            "Rojas" => "1",
            "Penalty" => "1"
        ),
        "Mosconia" => array(
            "Resultado" => "1-3",
            "Amarillas" => "2",
            "Rojas" => "0",
            "Penalty" => "1"
        ),
        "Canicas" => array(
            "Resultado" => " ",
            "Amarillas" => " ",
            "Rojas" => " ",
            "Penalty" => " "
        ),
        "Condal" => array(
            "Resultado" => "1-4",
            "Amarillas" => "2",
            "Rojas" => "1",
            "Penalty" => "1"
        ),
        "Piloñesa" => array(
            "Resultado" => "2-0",
            "Amarillas" => "1",
            "Rojas" => "0",
            "Penalty" => "0"
        ),
    ),
    "Condal" => array(
        "Juvencia" => array(
            "Resultado" => "1-0 ",
            "Amarillas" => "4",
            "Rojas" => "1",
            "Penalty" => "2"
        ),
        "Mosconia" => array(
            "Resultado" => "6-3",
            "Amarillas" => "1",
            "Rojas" => "2",
            "Penalty" => "3"
        ),
        "Canicas" => array(
            "Resultado" => "14-3",
            "Amarillas" => "1",
            "Rojas" => "0",
            "Penalty" => "0"
        ),
        "Condal" => array(
            "Resultado" => " ",
            "Amarillas" => " ",
            "Rojas" => " ",
            "Penalty" => " "
        ),
        "Piloñesa" => array(
            "Resultado" => "1-0",
            "Amarillas" => "3",
            "Rojas" => "1",
            "Penalty" => "0"
        ),
    ),
    "Piloñesa" => array(
        "Juvencia" => array(
            "Resultado" => "1-1",
            "Amarillas" => "0",
            "Rojas" => "0",
            "Penalty" => "1"
        ),
        "Mosconia" => array(
            "Resultado" => "2-3",
            "Amarillas" => "1",
            "Rojas" => "0",
            "Penalty" => "0"
        ),
        "Canicas" => array(
            "Resultado" => "0-1",
            "Amarillas" => "0",
            "Rojas" => "0",
            "Penalty" => "0"
        ),
        "Condal" => array(
            "Resultado" => "1-1",
            "Amarillas" => "1",
            "Rojas" => "2",
            "Penalty" => "0"
        ),
        "Piloñesa" => array(
            "Resultado" => " ",
            "Amarillas" => " ",
            "Rojas" => " ",
            "Penalty" => " "
        ),
    )
);

///1
echo "1. Mostrar el valor del campo 'Resultado' para Mosconia vs Cánicas.<br>";
$resultado = $b['Mosconia']['Canicas']['Resultado'];

echo "<br>Mosconia vs Cánicas: $resultado";


///2
echo "<br><br><br>2. Mostrar todos los resultados de cada equipo donde el número de amarillas > 1.<br>";

foreach($b as $equipoCasa => $partidos){
    foreach($partidos as $equipoVisitante => $partidoInfo){
        if($partidoInfo['Amarillas']>1){
            $resultado = $partidoInfo['Resultado'];
            echo "<br>$equipoCasa VS $equipoVisitante. Resultado: $resultado";
        }
    }
}


///3
echo "<br><br><br>3. Mostrar todos los resultados sumarizados por equipo donde el total de amarillas >= 3. <br><br>";

//creo un array vacio para guardar los r
$resultadosSumarizados = array();

//total de amarillas por equipo
foreach($b as $equipoCasa => $partidos){
    $totalAmarillasEquipo =0;

    //sumar tarjetas amarillas de los partidos del equipo casa
    foreach($partidos as $equipoVisitante => $partidoInfo){
        $totalAmarillasEquipo += intval($partidoInfo['Amarillas']);
    }

//Ahora, mostrar los Resultados sumarizados de equipoCasa, si el total de tarjetas amarillas =>3, guardar en $resultadosSumarizados
    if($totalAmarillasEquipo >=3){
        
        $resultadosSumarizados[$equipoCasa] = array(
            //creo array para almacenar la info por equipo
            'Total Amarillas'=> $totalAmarillasEquipo,
        );
    }
}

//Mostrar los resultados sumarizados por equipo
foreach($resultadosSumarizados as $equipo => $equipoInfo){
    echo "<b>Equipo: $equipo</b><br>";
    echo "Total tarjetas Amarillas: " . $equipoInfo['Total Amarillas'] . "<br>";
}

echo "<b>El equipo Piloñesa no tuvo 3 o más tarjetas amarillas.</b><br>";


///4
echo "<br><br>4. Mostrar en formato tabla y ordenado por resultado. 
Se filtrará previamente por el equipo para mostrar los resultados. 
El filtro incluirá el listado de equipos incluidos dentro del array.<br><br>";

//equipo parta filtrar (si no hay form select)
$equipoFiltrar = "Juvencia";

//entro a 'Resultado' de cada partido por equipo
$equipoCasaPrimerNum = array();

foreach($b as $equipoCasa => $partidos){
    foreach($partidos as $equipoVisitante => $partidoInfo){
        strpos($partidoInfo ['Resultado']); 
        $equipoCasaPrimerNum[]= ;
    }
}




///5
echo "<br><br>5. Calcula una password basándote en los siguientes criterio para obtenerla: 
<br>-matriz 4x5
<br>-genera letras aleatorias
<br>-selecciona la posición 3 dentro del array siguiendo un orden por fila.<br><br>";

//creo función para generar una letra aleatoria
function letraAleatoria(){
    $cadena = "qwertyuiopasdfghjklñzxcvbnm" ;
    return $cadena[rand(0, strlen($cadena) -1)]; //para el MAX, -1 ya q los índices empiezan desde 0
}

//matriz 4x5 con letras aleatorias
$matriz = array();

for($i=0 ; $i<4 ; $i++){
    $fila = array();
    
    for($j=0 ; $j<5 ; $j++){
        $fila[] = letraAleatoria();
    }
    $matriz[] = $fila;
}
echo "<pre>";
print_r ($matriz);
echo "</pre>";

//letra posición 3 de c/fila
$password = "";
foreach($matriz as $fila){
    $password .= $fila[2];
}

echo "Password: $password";

?>