<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Ejercicio 20</title>
        <meta name="description" content="Una guía interactiva de primeros pasos para Brackets.">
        <style>
        
            div{
                width:50px;
                height: 50px;
                position: fixed;
              
                
            }
        </style>
        
        
    </head>
    <body>
        <?php
            for($i=0;$i<=2000;$i++){
               $r=rand(0,255);
               $g=rand(0,255);
               $b=rand(0,255);
               $top=rand(0,100);
               $left=rand(0,100);
               echo "<div style='background-color:rgb($r,$g,$b);top:$top%;left:$left%'></div>";
                
            }
        
        ?>
    </body>
</html>