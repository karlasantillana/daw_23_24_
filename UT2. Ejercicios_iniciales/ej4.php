<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- Realiza un programa en php que calcule el sueldo neto de un trabajador al cual se le 
aplica una retención del 22%. Supón que el sueldo bruto son 2750€. Mostrar por 
pantalla el sueldo inicial, el impuesto aplicado y el sueldo neto. Dar formato html a los 
resultados obtenidos. -->

    <?php
    
        $bruto = 2750;

        $retencion = ($bruto*22)/100;

        $neto = $bruto - $retencion;

        echo "<b>sueldo inicial:</b> $bruto";
        echo "<br>";
        echo "<b>impuesto aplicado:</b> $retencion";
        echo "<br>";
        echo "<b>sueldo neto:</b> $neto";

    ?>
</body>
</html>