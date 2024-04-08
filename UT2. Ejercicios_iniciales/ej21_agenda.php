<!-- 
Crea una pequeña agenda electrónica utilizando arrays asociativos multidimensionales.
Los datos a guardar para cada contacto son: nombre, apellidos, teléfono, correo
electrónico.
Debe mostrarse en pantalla los datos guardados en la agenda.

*Crea una función de usuario que reciba el correo electrónico de cada contacto de la
agenda que devuelva true si el correo termina en “@gmail.com”, “@educa.madrid.org”,
“@yahoo.com” o “@hotmail.com” y false en caso contrario.
*Mostrar en pantalla una lista con los nombres y correo electrónico de los correos no
válidos.
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda</title>

    <style>
        table,td{
            border: 1px solid;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <?php
    echo "<h1>AGENDA</h1>";
        $agenda = array(array('Nombre'=>'Jorge',
                                'Dirección'=>'Madrid',
                                'Telófono'=>'999999999',
                                'Correo'=>'jorge@correo.com'),
                        array('Nombre'=>'Julia',
                                'Dirección'=>'Valencia',
                                'Telófono'=>'235456987',
                                'Correo'=>'julia@hotmail.com'),
                        array('Nombre'=>'Lucas',
                                'Dirección'=>'Orense',
                                'Telófono'=>'222222222',
                                'Correo'=>'lucas@correo.com'),
                        array('Nombre'=>'Susana',
                                'Dirección'=>'Ávila',
                                'Telófono'=>'987546321',
                                'Correo'=>'susana@correo.com')
        );

        // echo "<pre>";
        // print_r ($agenda);
        // echo "</pre>";

        echo "<table>
                    <tr>
                        <th colspan='3'>agenda</th>
                    </tr>

                    <tr>
                        <td>clave</td>
                        <td>clave</td>
                        <td>contenido</td>
                    </tr>";
            foreach($agenda as $contacto => $datos){
                echo "<tr>
                        <td rowspan='4'>$contacto</td>";
                foreach($agenda[$contacto] as $clave=> $contenido){
                    echo "<td>$clave</td>
                        <td>$contenido</td>
                    </tr>";
                }
            }
            "</table>";


        echo "------------------------------------<br>";
        echo "<b>Lista de correos no válidos</b><br>";
        echo "------------------------------------<br>";

        function comprobarEmail($correo){
            $encontrado=false;

            if(str_ends_with($correo, '@gmail.com')||str_ends_with($correo, '@educa.madrid.org')||str_ends_with($correo, '@yahoo.com')||str_ends_with($correo, '@hotmail.com')){
                $encontrado=true;
            }
            return $encontrado;
        }
       
        foreach($agenda as $contacto=>$datos){
            if(comprobarEmail($datos['Correo'])==false){
                echo $datos['Nombre'] . ": " . $datos["Correo"] . "<br>";
            }
        }

    ?>
</body>
</html>