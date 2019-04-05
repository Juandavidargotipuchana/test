<?php

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
	
	for($i=1;$i<=100;$i++) 
	{	
		if ($i% 2==0) {
			echo "<td bgcolor='yellow'> ".$i. "</td>";
		} else {  
			echo "<td bgcolor='green'>".$i. "</td>";
		}
	}
	echo "</table>";
?>  