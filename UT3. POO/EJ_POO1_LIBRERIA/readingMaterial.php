<!-- 
1. Realizar un programa para un Centro Educativo en el que acaban de abrir una tienda de libros y 
revistas para comprar y vender de segunda mano. Las clases necesarias serán:
● Clase abstracta ReadingMaterial 
    ○ variables privadas: id, title, pages, price
    ○ objeto private editor de la clase Publisher (ver descripción de la clase más abajo)
    ○ debe incluir:
        ▪ constructor
    ▪ métodos getter y setter
● Clase pública Book (hija de ReadingMaterial)
    ○ variables privadas: chapters, authors
    ○ debe incluir:
        ▪ constructor
        ▪ métodos getter y setter
● Clase pública Magazine (hija de ReadingMaterial)
    ○ variable privada: additionalResources
    ○ debe incluir:
        ▪ constructor
        ▪ métodos getter y setter
● Clase pública Publisher
    ○ variable privadas: id, name, address, telephone, website
    ○ debe incluir:
        ▪ constructor
        ▪ métodos getter y setter

Crea un objeto un objeto Publisher con el valor de las variables que desees.
Crea un objeto Book y un objeto Magazine con el valor de las variables que desees, muéstralas en una 
web php, actualízalas y vuelve a mostrarlas por pantalla.

Añade las siguientes funcionalidades y prueba los métodos con alguna instancia:
a) Incluye una función de ordenación utilizando el algoritmo BubbleSort (ordenación de libros 
por precio ascendente o descendente)
b) Realiza un método de ordenación por orden alfabético del título.
c) Ordena por orden alfabético al menos 5 referencias (a introducir en el array de libros o 
magazines).
d) Método de búsqueda en el array de libros o magazines por autor.
e) Método de búsqueda en el array de libros o magazines por título. 
-->

<?php
    abstract class ReadingMaterial{
        private $id;
        private $title;
        private $pages;
        private $price;

        function __construct($id , $title , $pages , $price){
            $this-> id=$id;
            $this-> $title=$title;
            $this-> $pages=$pages;
            $this-> $price=$price;
        }
    }
?>