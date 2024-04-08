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

//1
echo "1. Mostrar el valor del campo 'Resultado' para Mosconia vs Cánicas.<br>";
$resultado = $b['Mosconia']['Canicas']['Resultado'];

echo "<br>Mosconia vs Cánicas: $resultado";


//2
echo "<br><br><br>2. Mostrar todos los resultados de cada equipo donde el número de amarillas > 1.<br>";

foreach($b as $equipoCasa => $partidos){
    foreach($partidos as $equipoVisitante => $partidoInfo){
        if($partidoInfo['Amarillas']>1){
            $resultado = $partidoInfo['Resultado'];
            echo "<br>$equipoCasa VS $equipoVisitante. Resultado: $resultado";
        }
    }
}


//3
echo "<br><br><br>3. Mostrar todos los resultados sumarizados por equipo donde el total de amarillas >= 3. <br><br>";

//creo un array vacio para guardar los r
$resultadosSumarizados = array();

//total de amarillas por equipo
foreach($b as $equipoCasa => $partidos){
    $totalAmarillasEquipo =0;

    //partidos del equipo casa
    foreach($partidos as $equipoVisitante => $partidoInfo){
        $totalAmarillasEquipo += intval($partidoInfo['Amarillas']);
    }

    //si total de amarillas =>3, guardar en $resultadosPorEuipo
    if($totalAmarillasEquipo >=3){
        
        $resultadosSumarizados[$equipoCasa] = array(
            //creo array asociativo para almacenar la info por equipos
            'Total Amarillas'=> $totalAmarillasEquipo,
            'Resultados' =>array()
        );

        //resultados de c/partido del equipo
        foreach($partidos as $equipoVisitante => $partidoInfo){
            $resultado = $partidoInfo['Resultado'];
            $resultadosSumarizados[$equipoCasa]['Resultados'][$equipoVisitante]=$resultado;
        }
    }
}

//Mostrar los resultados sumarizados por equipo
foreach($resultadosSumarizados as $equipo => $equipoInfo){
    echo "<b>Equipo: $equipo</b><br>";
    echo "Total tarjetas Amarillas: " . $equipoInfo['Total Amarillas'] . "<br>";
    
    echo "Resultados: <br>";
    foreach($equipoInfo['Resultados'] as $equipoVisitante=>$resultado){
        echo " VS $equipoVisitante: $resultado<br>";
    }
    echo "<br>";
}

echo "<b>El equipo Piloñesa no tuvo más de 3 tarjetas amarillas.</b><br>";


//4
