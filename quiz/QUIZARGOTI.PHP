 <table border="5" align="center">
            <?php
			
            echo "<tr>";
            for ($cabecera="0";$cabecera<=10;$cabecera++){
			echo "<th>";
			echo $cabecera;
			echo "</th>";
            }
            echo "</tr>";
            for ($x = 1; $x <=10; $x++){
		   echo "<tr>";
		   echo "<th>";
		   echo $x;
		   echo "</th>";
				for ($y=1;$y<=10;$y++){									
						$mult=$x*$y;
						
					if ($mult%3==0){
				   echo "<td><center>";
				   echo "<font color='#080101'>".$mult."</font>";
				   echo "</center></td>";
				 } else {
				   if ($mult%2==0){
								   if($mult==100){
							echo"<td><img src='https://img.icons8.com/COLOR//material-two-tone/F70804/50//100.png'></td>";
						}else{ 
					 echo "<td bgcolor='#F70804'><center>";
					 echo $mult;
						echo "</center></td>";
						}
				   } else {   
				 echo "<td bgcolor='BLUE'><center>";
				 echo $mult;
				 echo "</center></td>";
			   }
			 }
								
			}              
	echo "</tr>";          
	}      
?>      
</table>