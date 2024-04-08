<!DOCTYPE html>
<html>
	<head>
		<title>Ejercicios Inciales PHP</title>
		<?php
			function multiplicacion($num1,$num2){
				return $num1*$num2;
			}
		?>
		<style>
			#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;}
  
#ej21   {
		border-collapse: collapse;
		font-family:arial;
		
		}

#ej21 th,td{
		border: 1px solid black;
		padding:5px;
}

#ej21 td:nth-child(1){
	background-color:salmon;
}

#ej21 td:nth-child(2){
	background-color:lightblue;
}



		</style>
	</head>
	<body>
		<h3><b>Ejercicio 1</b></h3>
		<?php
			echo "Hola Mundo";
		?>
		<h3><b>Ejercicio 2</b></h3>
		<?php
			$nombre="Karla";
			$apellidos="Santillana Ayulo";
			echo "Hola " .$nombre." ".$apellidos;
		?>
		<h3><b>Ejercicio 3</b></h3>
		<?php
			$num1=6;
			$num2=3;
			
			$suma=$num1 + $num2;
			
			echo "La suma de 6 y 3 es " .$suma;
			echo "<br>";
			$multiplicacion=multiplicacion(6,3);
			echo "La multiplicacion es " .$multiplicacion;
			include 'division.php';
			echo "<br>";
			echo "La división es ";
			echo division();
			echo "<br>";
			include 'modulo.php';
			echo "El módulo es ";
			echo modulo();
			
		?>
		<h3><b>Ejercicio 4</b></h3>
		<?php
			$sueldo_bruto=2750;
			$retencion=0.22;
			$impuesto_aplicado=$sueldo_bruto*$retencion;
			$sueldo_neto=$sueldo_bruto -$impuesto_aplicado;
			echo "El sueldo inicial es" .$sueldo_bruto;
			echo "<br>";
			echo "El impuesto aplicado es " .$impuesto_aplicado;
			echo "<br>";
			echo "El sueldo neto es ".$sueldo_neto;
		?>	
		<h3><b>Ejercicio 5</b></h3>
		<FORM ACTION="ejercicio5.php" METHOD="GET"> 
		 Introduzca el primer número:
		<INPUT TYPE="text" NAME="numero1"><BR> 
		Introduzca el segundo número:
		<INPUT TYPE="text" NAME="numero2"><BR> 
		<INPUT TYPE="submit" VALUE="Compara"> 
		<INPUT TYPE="reset" VALUE="Limpia">		
		</FORM>
		<h3><b>Ejercicio 6</b></h3>
		<FORM ACTION="ejercicio6.php" METHOD="GET"> 
		 Introduzca el  número:
		<INPUT TYPE="text" NAME="numero1"><BR> 
		<INPUT TYPE="submit" VALUE="Resuelve"> 
		<INPUT TYPE="reset" VALUE="Limpia">	
		</FORM>
		<h3><b>Ejercicio 7</b></h3>
		<?php
			
			$aleatorio=rand(1,100);
			
			if($aleatorio<=50)
			{
				echo "El numero " .$aleatorio." es igual o menor que 50";
			} 
			
			else{
				echo "El numero" .$aleatorio. "es mayor que 50";}
			
			
		?>
		<h3><b>Ejercicio 8</b></h3>
		
		<?php
			$posicion=['Arriba','Abajo'];
		?>
		
		<h3><b>Ejercicio 9</b></h3>
		
		
		<FORM ACTION="ejercicio9.php" METHOD="GET"> 
		 Introduzca un  número:
		<INPUT TYPE="text" NAME="dia"><BR> 
		<INPUT TYPE="submit" VALUE="Resuelve"> 
		<INPUT TYPE="reset" VALUE="Limpia">	
        >
		</FORM>
		
		<h3><b>Ejercicio 10</b></h3>
		

		<?php 
		/*
		Realizar un programa en php que escriba por pantalla la sucesión de Fibonacci. 
		Cada número de la serie de Fibonacci se forma sumando los dos números anteriores
		*/
		
		$serieFibonacci =[]; //lista vacía
		
		$serieFibonacci[0] =0; //posición 1
		$serieFibonacci[1] =1; //posición 2
		
		for($i=2 ; $i<30 ; $i++){
			
			$serieFibonacci[$i] = ($serieFibonacci[$i-1]) + ($serieFibonacci[$i-2]);
		}
		
		echo "<pre>"; //para q se vea en orden hacia abajo y no lineal
		print_r($serieFibonacci);
		echo "</pre>";


		

		?>
        <h3><b>Ejercicio 11</b></h3>
		  
		<?php 
		/*
		Realiza un programa en php donde dada la cadena: “Estamos dando nuestros primeros
		pasos en programación utilizando el lenguaje php” imprima por pantalla:
			• La longitud de la cadena.
			• La primera ocurrencia de “os”.
			• La búsqueda de la palabra “nuestros”.
			• La subcadena “lenguaje php”.
			• La subcadena “nuestros primeros pasos”.
			• El reemplazo de las palabras estamos por estoy y nuestros por mis.
			• Todas las letras de la cadena en minúsculas.
			• Todas las letras de la cadena en mayúsculas
			• La frase con todas las letras iniciales de cada palabra en mayúscula.
		*/
		
		$string = "Estamos dando nuestros primeros pasos en programación utilizando el lenguaje php";
		echo mb_strlen ($string) ."<br>"; //mb_  Longitud de la cadena, cuenta la cantidad de los caracteres de la oración
		echo mb_strpos ($string, "os") . "<br>"; // mb_strpos Posición de la ocurrencia. Entre paréntesis el string donde lo voy a buscar, coma, "lo que quiero buscar"
		echo stristr($string, "nuestros") . "<br>"; //lo que  me aparece en el resto de la frase desde la palabra "nuestro"
		echo stristr ($string, "lenguaje php"). "<br>";
		echo stristr ($string, "nuestros primeros pasos"). "<br>";
		
		$string = str_ireplace("Estamos", "Estoy", $string); //** str_ireplace Para modificar una palabra sin importar mayus o minusc
		$string = str_ireplace("nuestros", "mis",$string);
		echo $string . "<br>";
		
		echo strtoupper ($string) . "<br>"; //**MAYÚSCULAS
		echo strtolower ($string) . "<br>"; //**minúsculas
		
		
		$string = ucwords ($string); //ucwords solo la inicial de cada palabra en MAYUS
		echo $string;
		
		
		?>587
        <h3><b>Ejercicio 12</b></h3>
		
        		<?php 
		/*
		Realiza un programa en php en el que se declare un vector donde en cada posición se almacene
		un día de la semana. 
		A continuación imprima la posición que corresponda para que en pantalla se muestre: miércoles.
		*/
		
		$semana = array("Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábados", "Domingo");
			echo $semana[2];  //para indicar la posición 2
			


		?>
         <h3><b>Ejercicio 13</b></h3>
		   
        <?php     
        /*
		Realiza un programa en php en el que se declare un vector de 5 posiciones. 
		Cada posición tomará como valor un color distinto (azul, rojo, verde, rosa, naranja). 
		A continuación, deberá de comprobar si el valor rosa se encuentra almacenado en el array.
		Si es así, deberá de borrar el elemento del array.
		*/
		
		$color = array("azul","rojo","verde","rosa","naranja");
		//echo stristr ($color, "rosa"). "<br>";
		foreach($color as $valor){ //recorre un array
			switch ($valor){

			case "rosa":
				echo "Existe el color rosa" . "</br>";
				unset($color[3]);	// elimina un valor de un array	
				break;

			default:
			break;
			}
		}
		//var_dump($color); //muestra las posiciones de un array
		foreach($color as $valor){
			echo "</br>". $valor; 
		}
			
		?>
         <h3><b>Ejercicio 14</b></h3>
		   
		<?php 
		/*
		Almacene en un vector los 10 primeros número pares. 
		Imprímalos cada uno en una línea.
		*/
		
		$vector = array("0","2","4","6","8","10","12","14","16","18");
		foreach ($vector as $valor){
			echo "</br>" . $valor ; //así se imprime un valor en cada línea
		}
                echo "</br>";

		?>		
        <h3><b>Ejercicio 15</b></h3>

        <?php
          $vector=array(1=>90,30=>7,'e'=>99,'hola'=>43);
              foreach ($vector as $indice=>$valor)
                  echo"El indice $indice vale  $valor</br>";
        ?>
        <h3><b>Ejercicio 16</b></h3>
            
        <?php
             for($f=0;$f<3;$f++){
                    for($c=0;$c<4;$c++){
                    echo $array[$c][$f]=rand(1,9)." ";
                    }
            echo "</br>";

             }

        ?>

		<h3><b>Ejercicio 16 copia</b></h3>
		
		<?php
		echo "<table id='customers'>";
		for($f=0;$f<3;$f++){
			echo "<tr>";
                    for($c=0;$c<4;$c++){
                    echo "<td>".$array[$c][$f]=rand(1,9)."</td>";
                    }

             }
			 echo "</tr>";

		echo "</table>";

		?>
            
        <h3><b>Ejercicio 17</b></h3>
            
        <?php
             $supermercado=array("Fruta"=>array("Pera","Manzana","Platano"),
                        "Verdura"=>array("Berenjena","Calabacin"),
                        "Lacteos"=>array("leche","yogur","queso","kefir"));
            
            foreach($supermercado as $indice=>$valor){
				echo "<ul>" .$indice ;
				foreach ($valor as $subvalor){
					echo "<li>".$subvalor. "</li>";}
				echo "</ul>";


			}

			
                
            
                         
        ?>
        
        <h3><b>Ejercicio 18</b></h3>
            
       <?php
            //1.incializamos la variable suma a 0 IMPORTANTE fuera del bucle
            //2.realizamos el bucle for inicializamos la variable a 0 para ir recorriendo todos los numeros hasta el numero aleatorio
            //3.utilizamos un condicional para filtrar solo los numeros pares
            //4.sumamos el primer numero con el anterior
            //5.Imprimimos por pantalla el resultado siempre fuera del bucle
          $numeroaleatorio=rand(1,100);
            echo "El numero aleatorio es ".$numeroaleatorio."</br>";
            $suma=0; 
            for ($i=0; $i<=$numeroaleatorio;$i++){
                if ($i%2==0){
                    echo " ".$i." ";
                    $suma=$suma+$i;
                    }
            }
            
            echo $suma;
             
            
        ?>
        
        <h3><b>Ejercicio 19</b></h3>
        <a href="ejercicio19.php">Click aqui</a>
        
        <h3><b>Ejercicio 20</b></h3>
            
        <a href="ejercicio20.php">Click aqui</a>

        <h3><b>Ejercicio 21</b></h3>
            
		<?php
			$agenda=array(
				"0"=>array(
				"Nombre"=>"Jorge",
				"Direccion"=>"Madrid",
				"Telefono"=>"9999999",
				"Correo"=>"jorge@correo.com"),
				"1"=>array(
				"Nombre"=>"Julia",
				"Direccion"=>"Valencia",
				"Telefono"=>"235456987",
				"Correo"=>"julia@correo.com"),
				"2"=>array(
					"Nombre"=>"Lucas",
					"Direccion"=>"Orense",
					"Telefono"=>"22222",
					"Correo"=>"lucas@correo.com"),
				"3"=>array(
					"Nombre"=>"Susana",
					"Direccion"=>"Avila",
					"Telefono"=>"98754632",
					"Correo"=>"susana@gmail.com"));

			
			echo"<table id='ej21'>";
			echo"<tr>
					<th colspan='3'>Agenda</th>
				</tr>";
			echo "<tr>
					<th>Clave</th>
					<th>Clave</th>
					<th>Contenido</th>
				</tr>";
			foreach ($agenda as $key=>$array){
			echo"<tr><td rowspan='5'>".$key."</td>";
				
				foreach($array as $indice=>$valor){

					echo "<tr><td>".$indice."</td><td>".$valor."<td></tr>";

				}
			echo "</tr>";
			}
			echo"</table>";
			function comprueboCorreo($correo){
				$validos=array("@gmail.com","@educa.madrid.org","@hotmail.com","@yahoo.com");
				//obtenemos la posicion del @
				$posicionArriba=strpos($correo,"@")	;
				//extraemos la cadena desde la posicion hasta el final
				$finCorreo=substr($correo,$posicionArriba);
				//si esta en array validos es una direccion de correos correcta
				return in_array($finCorreo,$validos);
			}
			
			foreach ($agenda as $key=>$array){
					echo "<ul>";
					if (!comprueboCorreo($array['Correo'])){
						
						echo "<li> Nombre:{$array['Nombre']} email no valido </li>";
					}
					echo "</ul>";

				
			}		
		
		?>
        
		<h3><b>Ejercicio 22</b></h3>

		<?php
			$empleados=array(
				"CE001"=>array(
				"nombre"=>"Eva",
				"edad"=>25,
				"salario"=>1200
				),
				"CE002"=>array(
					"nombre"=>"Natalia",
					"edad"=>35,
					"salario"=>1700
				),
				"CE003"=>array(
					"nombre"=>"Eduardo",
					"edad"=>50,
					"salario"=>950
				),
				"CE004"=>array(
					"nombre"=>"Antonio",
					"edad"=>45,
					"salario"=>1800
				));

			function salarioActual($nom,$edad,$salario){
				
				
		
				if($salario>1000 && $salario<2000){
					
					if ($edad>45) {
						$cantidad=$salario*0.04;
						$salarioActual=$salario + $cantidad;

					}
					else{
						$cantidad=$salario*0.1;
						$salarioActual=$salario+$cantidad;


					}
				}
				else if($salario<1000){
					if ($edad<30){
						$salarioActual=1500;

					}
					else if($edad>30 && $edad<45){
						$cantidad=$salario*0.03;
						$salarioActual=$salario+$cantidad;

					}
					else{
						$cantidad=$salario*0.15;
						$salarioActual=$salario+$cantidad;
					}
				}
				else if ($salario>2000){
					$salarioActual=$salario;

				}
				return $salarioActual;
				}
			

			foreach ($empleados as $clave=>$array){

				foreach($array as $indice=>$datos){

				}

				echo "<ul>";
				echo "Empleado " .$clave;
				echo "<li>Nombre:{$array['nombre']}</li>";
				echo "<li> Salario actual:" .salarioActual($array['nombre'],$array['edad'],$array['salario'])."</li>";
				echo "</ul>";
	
			}
		?>
		<h3><b>Ejercicio 24</b></h3>

		<?php

		$equipos=array("RealMadrid"=>array(
			"puntos"=>100,
			"posicion"=>1
		),
		"Atleti"=>array(
			"puntos"=>200,
			"posicion"=>3,
		),
		"Barca"=>array(
			"puntos"=>300,
			"posicion"=>4
		));

		foreach ($equipos as $equipo=>$datosEquipo){
			echo $equipo;
			foreach ($datosEquipo as $clave=>$dato){
					if($clave=='posicion'){
						if(($dato)==1 or ($dato==2) or ($dato==3)){
						foreach($datosEquipo as $clave=>$dato){
							echo "<ul>";
							echo"<li>$clave:$dato</li>";
							echo "</ul>";}
						}
					}	
			}
		}

		
		?>


	</body>
</html>
