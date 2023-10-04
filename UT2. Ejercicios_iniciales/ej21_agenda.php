<!-- 
Crea una pequeña agenda electrónica utilizando arrays asociativos multidimensionales.
Los datos a guardar para cada contacto son: nombre, apellidos, teléfono, correo
electrónico.
Debe mostrarse en pantalla los datos guardados en la agenda 
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda</title>
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

        echo "<pre>";
        print_r ($agenda);
        echo "</pre>";

        echo "------------------------------------<br>";
        echo "<b>Lista de correos no válidos</b><br>";
        echo "------------------------------------<br>";

        //función recursiva
        foreach($agenda as $contacto=>$datos){
            if(in_array('@gmail.com'|'@educa.madrid.org'|'@yahoo.com'|'@hotmail.com', array_column($agenda, 'Correo'))){
                foreach($agenda[$contacto] as $clave=>$contenido)
                echo ""
                echo "Encontrado correo/s con ese dominio";
            }else
                echo "No encontrado correo/s con ese dominio";
        }

    ?>
</body>
</html>
