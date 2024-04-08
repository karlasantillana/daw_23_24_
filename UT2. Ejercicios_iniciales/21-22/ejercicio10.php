<?php
			$n=intval($_GET['numero']);
			//Creamos una funcion que nos vaya sumnando y guarde en una array los numeros//
			function fibonacci($n)
			{
			//Iniciamos el array con 0,1 los dos primeros numeros de fibonacci//
			$fibonacci  = [0,1];
			//tenemos que sumar el numero anterior + 1//
			//hacemos un for desde la posicion 2
			for($i=2;$i<=$n;$i++)
			{
				$fibonacci[] = $fibonacci[$i-1]+$fibonacci[$i-2];
			}
			echo $fibonacci[$n];
		}
		return $fibonacci[$n];
 
?>