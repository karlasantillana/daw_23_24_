<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manejo de ficheros</title>
</head>
<body>
    <p>Operación de lectura</p>
    <?php
        /*
            1. Abrir fichero -> fopen("ruta" , "permisos modificador"); 
                modificadores -> r w a b -> Utilizar modificador b para evitar incompatibilidades de lectura. 
            2. Validar fopen q abrió el fichero correctamente.
            3. Leer fichero -> fread(variable donde guardo el fopen, cantidad de bits a leer) y
                para mostrar todo el contenido se pone filesize("fichero")
            4. Escribir fichero -> fwrite(donde voy a escribir, lo que quiero escribir)
            5. Final de fichero -> ofo
            6. Cerrar el fichero -> fclose 
        */  


        /* 1. Abrir el archivo en modo solo lectura -> manejador("nombre_fichero.txt o .csv" , "r+b") */
        $archivo = fopen("ficheroPrueba.txt" , "r+b");

        /* 2. Validar que se abrió correctamente */
        if(!$archivo){ //o if($archivo == false)
            echo "ERROR AL ABRIR EL ARCHIVO";
        }

        /* 3. Leer fichero */

        $cadena = fread($archivo, filesize("ficheroPrueba.txt"));

        /* 4. Escribir en fichero */
        fwrite($archivo, "No me estás escuchando y mira que es fácil <br>");
       
        
        echo $cadena;
        /*

        $archivo2 = fopen("ficheroPrueba.txt","r");
        
        //rewind($archivo);
        $cadena2 = fread($archivo2, filesize("ficheroPrueba.txt"));
        echo $cadena2; 
        
        */
        echo "<br>----------------------------</br>";
    ?>


    <p>Almacenamiento en array</p>
    <?php
            /* Devolver array en el que cada elemento corresponde a una línea del fichero con la función file() */
        $array = file("ficheroPrueba.txt");
        print_r($array);

        echo "<br>----------------------------</br>";
    ?>


    <p>Lectura por líneas</p>
    <?php
        /*Volvemos a situar el puntero al principio del fichero con la función rewind() */
        rewind($archivo);
        //Recorrer el archivo mostrando el contenido de cada línea.
        while(feof($archivo)==false){
                /*Devolver una cadena con el contenido de una línea del fichero con la función fgets(), 
                con la marca de fin de fichero  función feof*/
            echo fgets($archivo) . "<br />";
        }

        // /* 6. Cerrar fichero */
        fclose($archivo);
    ?>
</body>
</html>