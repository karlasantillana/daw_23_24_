<?php
class Persona{

    public $nombre;
    public $apellido;

    function __construct($nom,$ape){
        $this->nombre=$nom;
        $this->apellido=$ape;
    }

    ///
    // final function datosAlumno(){
    function datosAlumno(){
        return "Los datos del alumno " . $this->nombre . " " . $this->apellido . " y pertenece al curso de " . self::CICLO;
    }

    //getter y setter
    function getNombre(){
        return $this->nombre;
    }

    function setNombre($nom){
        $this->nombre=$nom;
    }

    function __toString(){
        return "Los datos del alumno ". $this->nombre . " " . $this->apellido;
    }   //"y pertenece al curso de " . .self::CICLO;
}
?>