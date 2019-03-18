<?php
$num1 = $_post['n1'];
$num2 = $_post['n2'];
$oper = $_post['tipo_oper'];

echo "numero 1: ".$num1."<br>";
echo "numero 1: ".$num2."<br>";
echo "tipo operacion:".oper;
if ($oper=="1")
	$resul=num1 + num2;
if ($oper=="2")
 $resul=num1-num2;
else 
	if ($oper=="3")
		$resul=num1*num2;
	else
		$resul=num1/num2;




?>