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
        //Abrir el archivo en modo solo lectura
        //manejador("nombre_fichero.txt o .csv")
        $archivo1 = fopen("fichero1.txt" , "r+b");
        if(!$archivo1){
            echo "ERROR AL ABRIR EL ARCHIVO";
        }

        //leemos un determinado número de caracteres
        $cadena1 = fread($archivo1, 4);
        echo $cadena1;
        echo "<br>----------------------------</br>";
        fwrite($archivo1, "No me estás escuchando y mira que es fácil");
        rewind($archivo1);
        $cadena2 = fread($archivo1, filesize("fichero1.txt"));
        echo $cadena2;
    ?>


    <p>Almacenamiento en array</p> <br><br>
    <?php
        $array = file("fichero1.txt");
        print_r($array);
    ?>

    <p>Lectura por líneas</p> <br><br>
    <?php
        $archivo2 = fopen("fichero1.txt" , "r+b");
        if(!$archivo2){
            echo "ERROR AL ABRIR EL ARCHIVO";
        }

        while(feof()==false){
            fgets($archivo2);
        }
        
    ?>
</body>
</html>