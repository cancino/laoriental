<?php
include ("conexion.php");  
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$cantidad = $_POST["nforms"];
	$n=0;
	$num=(int)$cantidad;
	while($num>$n)
	{
		echo"es";
		$n++; 
	}
}
?> 
