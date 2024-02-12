<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    require "conexion.php";

    $sql = "SELECT * FROM alumnos";

    $file = fopen("alumnos.csv" , "rb");
    if($file){
        echo "ERROR";
    }else{
        while(feof(!$file)){
            $linea = fgetcsv($file,15, ';');
            if($linea){
                foreach($linea as $valor){
                    echo $valor;
                }
            }
        }
        fclose($file);
    }

?>
</body>
</html>