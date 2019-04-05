<?php

	echo"ANÁLISIS, DISEÑO Y CODIFICACIÓN DE
			ALGORITMOS Y DIAGRAMAS DE FLUJO <br><br>
	
		1. Escriba un Script en PHP que muestre por pantalla los números del 1 al 10echo <br><br>	
		2. Escriba un Script en PHP que muestre por pantalla los números del 1 al 10<br><br>. 
		3. Escriba un Script en PHP que muestre por pantalla los primeros 100 números naturales<br><br>.		
		4. Escriba un Script en PHP que muestre por pantalla los primeros 100 números naturales de 2 en 2<br><br>. 		
		5. Escriba un Script en PHP que genere aleatoriamente 10 números enteros positivos y
		los muestre por pantalla. Use la función rand()<br><br>.
		6. Escriba un algo Script en PHP ritmo que muestre por 
		pantalla la suma de los primeros 100 números naturales<br><br>. 
		7. Escriba un Script en PHP que muestre por pantalla 
		los múltiplos de 3 comprendidos en la serie del 1 al 100<br><br>. 
		8. Escriba un Script en PHP que genere aleatoriamente 10 
		números enteros positivos y los muestre
		por pantalla, y visualice además el siguiente reporte 
		en una tabla HTML: - Total de números pares generados. 
		- Total de números impares generados<br><br>. 
		9. Escriba un Script en PHP que genere aleatoriamente
		10 números enteros positivos y negativos, y los muestre por pantalla,
		y visualice además el siguiente reporte en una tabla HTML:
		- Total de números positivos pares generados. - 
		Total de números positivos impares generados. - 
		Total de números negativos pares generados. -
		Total de números negativos impares generados. Scripts PHP 
		con Formulario HTML5<br><br>: 
		10. Escriba un Script en PHP que solicite por pantalla al
		usuario un número N, y de ese número ingresado se visualice 
		la tabla de multiplicar respectiva con una serie de 1 a 10. 
		(Haga uso de un solo archivo para crear formulario html y Script php)<br><br>.";
				
		
		

	echo "##################################################################";
	echo "<br><br>";
	echo "<b> 2).los números del 1 al 10</b><br><br>";
	for($i = 1; $i <= 10; $i++){
		  echo $i ." ";
	   }


	echo "<br><br>";
	echo "####################################################################";
	echo "<br><br>";
	echo "<b> 3).los primeros 100 números naturales.</b><br><br>";
	for($i = 1; $i <= 100; $i++){
		  echo $i ."  ";
	   }


	echo "<br><br>";
	echo "#####################################################################";
	echo "<br><br>";
	echo "<b> 4).los primeros 100 números naturales de 2 en 2.</b><br><br>";
	$n=2;
	while ($n<= 100) {
	 echo $n."  ";
	  $n=$n+2; //$i=$i+1;
	}


	echo "<br><br>";
	echo "#####################################################################";
	echo "<br><br>";
	echo "<b> 5). Escriba un Script en PHP que genere aleatoriamente 10 números enteros positivos y los muestre por pantalla. Use la función rand().</b><br><br>";
	for ($i=1;$i<=10;$i++) {
		$aleatorio = rand(1,300);
		echo $aleatorio." ";
		}

	echo "<br><br>";
	echo "#####################################################################################";
	echo "<br><br>";
	echo "<b> 6).la suma de los primeros 100 números naturales.</b><br><br>";
	$num=1;
	$suma=0;
	while ($num <=100) {
      $suma = $num +$suma;
      $num++;
      }
      echo $suma;


	echo "<br><br>";
	echo "######################################################################################";
	echo "<br><br>";
	echo "<b> 7).Múltiplos de 3 comprendidos en la serie del 1 al 100.</b><br><br>";
	$num=1;
	while ($num <=100) {
      if ($num%3==0){
        echo $num." ";
         }
      $num++;
      }


	echo "<br><br>";
	echo "##########################################################################################";
	echo "<br><br>";
	 
	echo "<b>8.genere aleatoriamente 10 
		números enteros positivos y los muestre
		por pantalla </b>";


     $t= 1;
		$acumulador1=0;
		$acumulador2=0;
		//echo "<hr>";
		echo "<br>Números: ";
		echo "<table border = '1' cellpadding='4'><br>";
		while($t<=10){
			$tt=rand(1,100);
			echo $tt."&nbsp;&nbsp;";
			if($tt%2==0){
				$acumulador1++;
				
			}else {
				$acumulador2++;
				
			}
			$t++;
		}
		echo "</table>";
		echo "<br><b>REPORTE FINAL</b>";
		echo "<table border=1>";
		echo "<tr><td>Total de pares:</td><td>". $acumulador1 ."</td></tr>";
		echo "<tr><td>Total de impares:</td><td>". $acumulador2 ."</td></tr>";
		echo "</table>";
		
		
		echo "<br><br>";
		echo "<br><br>";
		
		echo "##########################################################################################";
		echo "<br><br>";
		
		echo"<b>9. que genere aleatoriamente
		10 números enteros positivos y negativos, y los muestre por pantalla</b>";
		
		$n= 1;
		$acumulador3=0;
		$acumulador4=0;
		$acumulador5=0;
		$acumulador6=0;
		//echo "<hr>";
		echo "<br>Números: ";
		echo "<table border = '1' cellpadding='4'><br>";
		while($n<=10){
			$nn=rand(-100,100);
			echo $nn."&nbsp;&nbsp;";
			if($nn%2==0){
				if($nn>=0){
				$acumulador3++;
				}else{
					$acumulador5++;
					}				
			}else {
				if($nn>=0){
				$acumulador4++;
				}else{
					$acumulador6++;
					}	
			}
			$n++;
		}
		echo "</table>";
		echo "<br><b>REPORTE FINAL2</b>";
		echo "<table border=1>";
		echo "<tr><td>Total de pares positivos:</td><td>". $acumulador3 ."</td></tr>";
		echo "<tr><td>Total de impares positivos:</td><td>". $acumulador4 ."</td></tr>";
		echo "<tr><td>Total de pares negativos:</td><td>". $acumulador5 ."</td></tr>";
		echo "<tr><td>Total de impares negativos:</td><td>". $acumulador6 ."</td></tr>";
		echo "</table>";

		echo "<br><br>";
		echo "<br><br>";
		echo "<br><br>";
		echo "<br><br>";
		


	echo	"<b>ACTIVIDAD REALIZADA EN CLASE</b> ";




			echo "<b>Imprecion de los numeros de el 1 - 10 con for </b>";
	echo "<table border = '2'>";

	for($i=1;$i<=10;$i++)
	{

	echo " <tr><td> El numero es : ". $i. "</tr></td>";

	}
	echo "</table>";
	echo "<br><br>";
	echo "<b>Inprecion de los numeros de el 1 - 10 con while </b><br><br>";
	echo "<table border = '2'>";
	$j=1;
	while ($j <= 10) {
	echo " <tr><td> El numero es : ". $j. "</tr></td>";
	$j=$j+1;
	}
	echo "</table>";
	echo "<br><br>";
	echo "<b>Inprecion de los numeros de el 1 - 10 con do-while </b>";
	echo "<table border = '2'>";
	$l=1;
	do {

	echo " <tr><td> El numero es : ". $l. "</tr></td>";
	$l=$l+1;

	} while ($l <= 10);
	echo "</table>";

	echo "<br></br>";

	echo "<table border = '1'>";
		for($i=1;$i<=10;$i++)
		{	
			if ($i%2==0) {
				echo "<tr><td bgcolor='yellow'> ".$i. "</tr></td>";
			} else {  
				echo "<tr><td bgcolor='green'>".$i. "</tr></td>";
			}
		}
		echo "</table>";
		
		
		echo "<hr>"; 
		echo "<table border = '1'> <tr>";
		for($i=1;$i<=10;$i++)
		{	
			if ($i%2==0) {
				echo "<td bgcolor='yellow'> ".$i. "</td>";
			} else {  
				echo "<td bgcolor='green'>".$i. "</td>";
			}
		}
		echo "</table>";





 ?>

