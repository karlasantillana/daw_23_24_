<?php
//INCLUDE_ONCE no vuelve a pegar un código que ya existe //intentar no usarlo
include_once "alumno11.php";
include_once "persona11.php";

//creo instancias
$alumno1 = new Alumno("Paco" , "Pérez");
echo $alumno1->datosAlumno();

echo "<br>---------------------------<br>";

$alumno2 = new Persona("Paco" , "Pérez");
echo $alumno2->datosAlumno();

// // echo "Soy el alumno " . $alumno->nombre;
// echo "Soy el alumno " . $alumno->apellido;
// echo " " . $alumno->getNombre();

// echo "<br>---------------------------<br>";

// echo "Soy del ciclo: " . alumno::CICLO;

// echo "<br>---------------------------<br>";

// //MÉTODO MÁGICO: nombre de la variable y el valor que quiero cambiar
// echo $alumno->__set($alumno->nombre , "Karla");
// echo $alumno;

// echo "<br>---------------------------<br>";

// //OBJETO 1
// $alumno_1 =new Alumno("Jesús" , "Garcia");
// echo $alumno_1->datos_alumno_id();

// $alumno_2 =new Alumno("Paula" , "Vazquez");
// echo $alumno_2->datos_alumno_id();

// $alumno_3 =new Alumno("Álvaro" , "Gómez");
// echo $alumno_3->datos_alumno_id();

// $alumno_4 =new Alumno("Santiago" , "Melón");
// echo $alumno_4->datos_alumno_id();

?>