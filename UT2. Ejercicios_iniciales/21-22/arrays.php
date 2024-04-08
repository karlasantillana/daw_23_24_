<!--Arrays indexados
		buscamos por posicion desde el mismo orden
		sin embargo tambien me permite poner los indices
		hay que tener cuidado porque se cambian los indices-->
		<!--Es un lenguaje muy permisivo-->
		<?php
		
			$semana[]="Lunes";	
			$semana[]="Martes";
			$semana[]="Miercoles";
			
			echo "$semana[1]";
			/*condicion para bucles con strings*/
			$i=0;
			
			while($i<count($semana))
				{
				echo "$semana[$i]</br>";
				$i++;
				}
			$semana[]="Jueves";
			/*condicion para numericos,en recorridos de array*/
			for($i=0;$i<count($semana);$i++)
				echo"$semana[$i]</br>";
			/**
			$anos =array(1988,1989,1990);
			
			$j=0;
			do{
				echo "$anos[$j]";
			}
			while ($j<3);*/
			/*array asociativos*/
						/*Indice=>dato*/
			$datos=array("Nombre"=>"Victoria","Apellidos"=>"Gonzalez","Codigo"=>"23");
			
			echo "$datos[Apellidos]";
			/*para recorrer los arrays asociativos utilizamos for each*/
			foreach($datos as $clave=>$valor)
				echo "La clave es $clave y el contenido es $valor </br>";
			foreach($datos as $clave=>$valor){
				if ($valor==23)
					echo"OK";
				else
					echo "KO";
			/*arrays bidimensionales -indexado*/
			/*1.vamos a cargar la suma de los indices*/
			
			/*creamos un array bidimensional 4x3
			el contenido que vamos a poner es la suma del indice*/
			for($i=0;$i<3;$si++)
				
				for($j=0;sj<3;$sj++)
				{
					$multi[$i][$j]=$i+$j;
				}
					
			}	
		?>