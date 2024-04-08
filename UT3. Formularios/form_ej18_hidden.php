<!-- 
Realizar un script en PHP se obtenga un número aleatorio entre 1 y 100.
Deberá mostrarse en pantalla el número generado y la suma de todos los números
pares anteriores a él. 
-->

<?php
//Recordar el último número escrito en la caja de texto sumando los números anteriores acumulados metidos x teclado :
    //Opción b)
    if (isset($_POST["num"])){
        $acumulado = $_POST["num"] + $_POST["oculto"];
        $number = $_POST["num"];

    }else{
        $number = "";

        $acumulado = 0;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="form_ej18.php" method="post" name="datos" id="datos">

        <label for="num">Indica número</label>
        <!-- <input type="number" name="num" id="num" value="<?php //echo isset($_POST['num']) ? $_POST['num'] : ''; ?>"> -->
        
        <!-- Opción b) -->
        <input type="number" name="num" id="num" value="<?= $number ?>">

        <input type="hidden" name="oculto" value="<?= $acumulado ?>">

        <input type="submit" name="enviando" id="enviando" value="Enviar">
    </form>

    <?php
        if(isset($_POST["enviando"])){

        $number = $_POST["num"];


        $pares= array();
        $suma=0;

        for ($i=0 ; $i<$number ; $i+=2){
        // if($i%2==0){
        $suma=$suma+$i;
        array_push($pares , $i);
        //}
        }

        //mostrar array
        echo "<pre>";
        print_r($pares); //lo imprimo para poder ver el array
        echo "</pre>";

        echo "Total suma: $suma";
    }
?>
</body>
</html>