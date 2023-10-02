<html>
<head>
    <?php
        function calcularEdad($edad){
            return $edad + 10;
        }
    ?>
    

    
</head>
<body>
    <?php
        $nombre = "Ana";
        $apell= "Santillana";
        $edad = 20;
        //const DNI = "123456789R";
        //define ("DNI2" , "78945612T");
        echo "Hola $nombre $apell" . "tienes" . $edad . "años";
        //$edad ="veinte";
        echo "Hola $nombre $apell" . "tienes" . $edad . "años";
        //DNI = "123456789R";
        //echo DNI;
    ?>

    <p> Voy a calcular tu edad real:
        <?=  //es lo mismo que decir (casos puntuales) <?php
            calcularEdad($edad); 
        ?>
    </p>

    <!-- <p>Voy a calcular tu edad real:</p> 
    <p>Voy a calcular tu edad real:</p> <?php?> -->
</body>
</html>