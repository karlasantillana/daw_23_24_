<?php

include "alumno.php";


//creo objeto
$alumno = new Alumno("Paco" , "Pérez");
echo $alumno->datosAlumno();

echo "<br>---------------------------<br>";

// echo "Soy el alumno " . $alumno->nombre;
echo "Soy el alumno " . $alumno->apellido;
echo " " . $alumno->getNombre();

echo "<br>---------------------------<br>";

echo "Soy del ciclo: " . alumno::CICLO;

echo "<br>---------------------------<br>";

//MÉTODO MÁGICO: nombre de la variable y el valor que quiero cambiar
echo $alumno->__set($alumno->nombre , "Karla");
echo $alumno;

echo "<br>---------------------------<br>";

//OBJETO 1
$alumno_1 =new Alumno("Jesús" , "Garcia");
echo $alumno_1->datos_alumno_id();

$alumno_2 =new Alumno("Paula" , "Vazquez");
echo $alumno_2->datos_alumno_id();

$alumno_3 =new Alumno("Álvaro" , "Gómez");
echo $alumno_3->datos_alumno_id();

$alumno_4 =new Alumno("Santiago" , "Melón");
echo $alumno_4->datos_alumno_id();

?>