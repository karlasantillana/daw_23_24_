<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla Alumno DAW</title>

    <style>
        table, td{
            border: 1px solid;
            border-collapse: collapse;
            padding: 8px;
        }

    </style>

</head>
<body>
    
</body>
</html>
<?php

class Alumno{

    public $nombre;
    public $apellido;
    const CICLO = "DAW";
    static $id = 407;

    function __construct($nom,$ape){
        $this->nombre=$nom;
        $this->apellido=$ape;
        self::$id++;
    }

    //métodos mágicos __get , __set , __toString

    function __get($nom){
        return $this->$nom;
    }

    function __set($nom ,$val){
        $this->nombre=$val;
    }

    function __toString(){
        return $this->nombre . " " . $this->apellido;
    }

    ///

    function datosAlumno(){
        return "Los datos del alumno " . $this->nombre . " " . $this->apellido . " y pertenece al curso de " . self::CICLO;
    }

    function datos_alumno_id(){
        return "<table> <tr><td>Alumno</td>" 
                    . "<td>" . $this->nombre . "</td> 
                    <td>" . $this->apellido . "</td>
                    <td>" . "ID= " . self::$id . "</td></tr></table>";
    }

    //getter y setter
    function getNombre(){
        return $this->nombre;
    }

    function setNombre($nom){
        $this->nombre=$nom;
    }
}

//OBJETOS(instancias) CREADOS EN "principal.php"


?>