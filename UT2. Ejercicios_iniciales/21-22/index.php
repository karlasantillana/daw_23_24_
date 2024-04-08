<!DOCTYPE html>
<html>

	<head>
	</head>
	
	<body>

		<?php

		//************** FUNCIONES *******************



			//SUMA SIN PASAR PEDIR PARÁMETROS
			
				function suma(){
					$a=4;
					$b=6;
					$suma= $a+$b;
					echo "La suma es $suma"."<br>";
					
				}
				
			// RESTA PIDIENDO LOS PARÁMETROS 	
			
				function resta($a, $b){
					$a--;
					return($a-$b);
					
							
				}
				
			
			/* OTRA FUNCIÓN (LA CREO EN OTRO FICHERO POR SEPARADO)
			
				function ambito(){
					global $x; //Primero tengo que declarar si es global, y luegio en la siguiente le asigno el valor
					$x=100; 	// Aquí asigno el valor
					$y=200;
					echo "$x, $y"."<br>";
					
					

				}*/



			//VARIABLES (se utiliza el $, luego el nombre de la variable, luego un = y luego el valor entre comillas DOBLES

				$nombre="Gerardo";
				$edad="18";
				$num1= 10;
				$num2= 3;
			
			
			// LLAMO A LAS VARIABLES con el ECHO
			
				echo "Hola $nombre". "<br>";
				echo "Tienes $edad años"."<br>";
				echo "Hola $nombre Bienvenido". "<br>";
				
				suma ();
				echo "El valor de la resta es ". resta($num1, $num2)."<br>";
				
				$x=10;
				$y=20;
				
				echo "$x, $y"."<br>";
			//ambito();
				
			//AQUÍ LLAMO LA FUNCIÓN QUE ESTÁ EN OTRO ARCHIVO CON INCLUDE
				include 'ambito.php';
				
			//VUELVO A COMPROBAR VALORES
				echo "$x, $y"."<br>";
				
				// VARIABLES FIJAS STATIC
				
				function contador () {
					
					static $contador = 0;
					$contador++;
					echo $contador;
				}
				
				for ($i=1;$i<10;$i++)
					contador();
				
				
			// CONSTANTES (LAS CONSTANTES DEBEN IR EN MAYÚSCULAS) 
			// NUNCA PUEDO CAMBIAR SU VALOR, NO ES COMO LAS VARIABLES
			// CTE es el nombre que le pongo a la constante y Pedro es el valor
			// Estos van entre comillas porque es un string
				
				
				define ("CTE","Pedro");
				
				echo "</br> Constante 1: ". CTE; // ASÍ LA LLAMO
				
				// define ("CTE","Peter"); (NO se puede cambiar, da error)
				
			// FOR WHILE DOWHILE
				
				
				/* 
					FOR
					
						for ($i=0;$i<count($fibonacci);$i++){
							echo "$fibonacci[$i] </br>";
				
						}
				
				
					
					WHILE
				
						$i=0;
						
						while($i<count($miLista)){
							echo "$miLista[$i];
							$i++;
					}
						
						
						
					DO WHILE
					
						do {
							
							
							
						} while()
				
				
				
				
				*/
				
				
			// ARRAY ASOCIATIVO
			
			$datos = array ("Nombre" => "Gerardo", "Apellido" => "Pimentel", "Código" => "123"); // "Indice" => "Objeto"
			
			// PARA ACCEDER AL ARRAY ASOCIATIVO. EN LUGAR DE PONER [1 O 2] SIMPLEMENTE PONGO EL NOMBRE QUE LE HE DADO
			
			echo "<br>"."$datos[Apellido]";
			
			// PARA RECORRERLO TENGO QUE HACERLO CON EL BUCLE FOR EACH, YA QUE NO TIENE INDICES NUMÉRICOS
			// LE DIGO QUE LLAME ASI A LAS VARIABLESN (CLAVE => VALOR)
							
			foreach ($datos as $clave => $valor)
				echo "<br>"."La clave es $clave y el contenido es $valor";
						
						
			// AHORA CON UNA CONDICIÓN (BUSCANDO UNO ESPECÍFICO)
			
			foreach ($datos as $clave => $valor){
				
				if ($valor==123)
					echo "<br>"."Encontrado";
				else
					echo "<br>"."No encontrado";
			}
						
			// CREO EL ARRAY CON FOR ANIDADO ARRAY MULTIDIMENSIONALESSSSSSSSSSSSSS
			
			for ($i=0;$i<4;$i++) {
				
				for ($j=0;$j<3; $j++){
					
				$arrayMulti[$i][$j] = $i + $j;
				
				}
			}
			
			// PINTO EL ARRAY MUY MONO
			echo "<br>"."ARRAY NORMAL BIDIMENSIONAL: "."<br>";

			for ($col = 0; $col < 3; $col++) {
				
			  echo "<p><b>Columna número $col</b></p>";
			  echo "<ul >";
			  for ($fila = 0; $fila < 4; $fila++) {
				echo "<li >".$arrayMulti[$fila][$col]."</li>";
			  }
			  echo "</ul>";
			}


			/*17. Crea un array asociativo que contenga la siguiente información:
			Array supermercado:
			Fruta (Pera, Manzana, Plátano)
			Verdura (Berenjena, Calabacín)
			Lácteos (leche, yogur, queso, kéfir) */

			// ARRAY ASOCIATIVO
			
			$supermercado = array ("Fruta" => array ( "Temporada" => array("Pera"," Manzana"), "No temporada"=> array("Plátano")), "Verdura" => 
				array( "Temporada" => array("Berenjena"), "No Temporada" => array ("Calabacín")), "Lácteos" => array("Veganos" => array ("Tofu"),
				  "Animal" => array("Leche", "Yogurt", "Queso"))); // "Indice" => "Objeto"
			
			// PARA ACCEDER AL ARRAY ASOCIATIVO. EN LUGAR DE PONER [1 O 2] SIMPLEMENTE PONGO EL NOMBRE QUE LE HE DADO
			
			echo "ARRAY SUPERMERCADO: "."<br>"."<br>";

			
			

			foreach ($supermercado as $categoria => $clasificacion)
			 { 
				 echo "<p style='color:red; font-size:30px;'>".$categoria."</p>"; // Pinto el nombre de la cateogría (como Fruta, Verdura o Lacteo)

				

						foreach($clasificacion as $i=>$o){ 
				
							echo "<li>". $i. "</li>";  // Pinto la clasificacion (Temporada, No temporada, Vegano)

							echo "<ul>";

							foreach($o as $j=>$comida){ 
			
								echo "<li style='color:blue'>". $comida. "</li>"; //Pinto la comida como tal

						}
						echo "</ul>";
				}
			}

			 



			

			// BIDIMENSIONAL ALEATORIO

			// CREO EL ARRAY CON FOR ANIDADO ARRAY MULTIDIMENSIONALES ALEATORIO
			
			for ($i=0;$i<4;$i++) {
				
				for ($j=0;$j<3; $j++){
					
				$arrayMulti[$i][$j] = rand(0,100);
				
				}
			}
			
			
			// PINTO EL ARRAY MUY MONO ALEATORIO
			echo "<br>"."ARRAY ALEATORIO BIDIMENSIONAL: "."<br>";

			for ($col = 0; $col < 3; $col++) {
				
			  echo "<p><b>Columna número $col</b></p>";
			  echo "<ul >";
			  for ($fila = 0; $fila < 4; $fila++) {
				echo "<li >".$arrayMulti[$fila][$col]."</li>";
			  }
			  echo "</ul>";
			}
			
						
		?>

	</body>
	
</html>