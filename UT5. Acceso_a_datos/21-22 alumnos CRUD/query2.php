<?php
//query para insertar lo que envia el formulario
        //OPERACIONES CON LA BD

//PRIMERO: Corroborar si hay alum repetidos
//para evitar introducidos duplicados,
//compuebo con una SELECT si el alum que quiero insertar ya existe en la tabla
$sql = "SELECT COUNT(*) AS  'cantidad' FROM ALUMNOS WHERE correo ='" . $REQUEST['mail'] . "';";
$result = $conn->query($sql); //ejecuta lo anterior
$num = $result -> fetch(); //me da el dato con la cantidad de veces //fetch-> hace un recorrido de toda la bbd

//creo un condicional
//para q si la cantidad de correos es mayor a 0, es porque el alumno ya está matriculado
if ($num["cantidad" >0]){
    echo "No se puede dar de alta a este alumno porque ya se ha matriculado en ese curso </br>";
}else{ //en caso contrario, es decir, cantidad=0, el alumno sí se podrá matricular ya que no se ha registrado anteriormente
    $sql = "INSERT INTO ALUMNOS (nombre, apellidos, telefono, correo)" . "VALUE (:nom, :ape, :tel,:cor)";

    $stmt = $conn->prepare($sql);
    $stmt ->bindParam(':nom', $_REQUEST['nombre']);
    $stmt ->bindParam(':ape', $_REQUEST['apellidos']);
    $stmt ->bindParam(':tel', $_REQUEST['telefono']);
    $stmt ->bindParam(':cor', $_REQUEST['correo']);
    echo "se ha insertado con éxito en myDBPO </br>";
}
   




///////////////
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