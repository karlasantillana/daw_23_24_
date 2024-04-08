<?php
include "persona11.php";

class Alumno extends Persona{
    private $ies;
    private $nota;
    const CICLO ="DAW";

    function __construct($nom,$ape,$ies,$nota){
        parent::__construct($nom,$ape);
        $this->ies= $ies;
        $this->nota =$nota;
        // $this->ies= "CE";
        // $this->nota =9;
    }

    //métodos mágicos __get , __set , __toString

    // function __get($nom){
    //     return $this->$nom;
    // }

    // function __set($nom ,$val){
    //     $this->nombre=$val;
    // }



    ///

    function datosAlumno(){
        $str = "Los datos del alumno " . $this->nombre . " " . $this->apellido . " y pertenece al curso de " . self::CICLO;
        $str .= " estudia en el ies '$this->ies' y tiene una nota media de " . $this->nota;
        return $str;
    }

    function __get($propiedad){
        return $this->$propiedad;
    }

    function __set($propiedad ,$valor){
        $this->nombre=$valor;
    }
    
}
?>