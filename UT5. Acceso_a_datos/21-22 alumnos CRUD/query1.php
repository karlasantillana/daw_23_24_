<?php

//query para mostrar el contenido de una tabla

        //OPERACIONES CON LA BD
include "conexion.php";

$sql= "SELECT * FROM alumnos "; //si modifico esta consulta, tengo que cambiar también los campos de abajo
echo "<h2> Listado de la tabla de alumnos</h2>";
        
        echo "<table border='1' style='width:1000px; height:50px; table-layout:fixed; text-align:center; border-collapse:collapse; border-color:black'>";
        echo "<tr><th>Código</th><th>Nombre</th><th>Apellidos</th><th>Teléfonos</th><th>Correo</th></tr>";

        foreach ($conexion->query($sql) as $fila){

            echo "<tr>".
                    "<td>".$fila["CODIGO"]."</td>".
                    "<td>".$fila["NOMBRE"]."</td>".
                    "<td>".$fila["APELLIDOS"]."</td>".
                    "<td>".$fila["TELEFONO"]."</td>".
                    "<td>".$fila["CORREO"]."</td>".
                    "</tr>";             
        }
        echo "</table>";

?>