<?php 
/* function is_integer no resuelto */
$n1=intval($_GET['numero1']);

if($n1>0){
	if ($n1 %2 ==0){
		echo "El numero ".$n1." es par";
	}
	else{
		echo "El  número ".$n1." es impar";
	}
}
else{
	echo "ERROR.Por favor introduce un numero positivo";
}


 ?>