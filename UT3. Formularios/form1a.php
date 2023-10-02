<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" name="datos" id="datos">

        <label for="veces">¿Cuántas veces?</label>
        <input type="text" name="veces" id="veces">

        <input type="submit" name="enviando" id="enviando" value="Enviar">
    </form>

    <?php
        /*
        if(isset($_POST["enviando"])){

            for($i=0 ; $_POST["veces"]>$i ; $i++){

                echo "<br>Los bucles son fáciles";
            }
            echo "<br>Se acabó";
        }
        */

        if(isset($_POST["enviando"])){
            
            $number = $_POST["veces"];

            for($i=0 ; $number>0 ; $i++){

                echo "<br>Los bucles son fáciles";
            }
            echo "<br>Se acabó";
        }

    ?>
</body>
</html>