<?php
$SERVIDOR = 'localhost';
$NOMBRE_US = 'root';
$PASSWORD = '';
$DB = 'oriental';

$conectar = mysql_connect ($SERVIDOR,$NOMBRE_US,$PASSWORD);
	if (!$conectar)
	{	
		die('error'.mysql_error());
	}
	$dbseleccion = mysql_select_db($DB,$conectar);
	if (!$dbseleccion)
	{
		die ('error al abrir bd'.mysql_error());
	}
	else
	{
		echo '';
	} 
?>