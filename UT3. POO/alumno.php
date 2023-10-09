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
        return "Alumno. " . $this->nombre . " " . $this->apellido . " ID= " . self::$id . "<br>";
    }

    //getter y setter
    function getNombre(){
        return $this->nombre;
    }

    function setNombre($nom){
        $this->nombre=$nom;
    }
}

//OBJETOS CREADOS EN "principal.php"


?>