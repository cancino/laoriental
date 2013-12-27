<?php
include ("conexion.php");  
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$nombres = $_POST["nombres"]; 
	$correo = $_POST["correo"]; 
	$decis = $_POST["dec"];
	$contra = $_POST["pass"];
	
	if($decis=="si")
	{
		mysql_query("INSERT INTO clientes(id_cliente,nombres,correo,contraseña) VALUES ('','$nombres','$correo','$contra')");
		header( "Location: ../logeoprincipal.php");
		mysql_close();
	}
	elseif (empty($decis)) 
	{

		mysql_query("INSERT INTO clientes(id_cliente,nombres,correo,contraseña) VALUES ('','$nombres','$correo','null')");
		header( "Location: ../ordennuevouser.php");
		mysql_close();
		
	}
}
?> 
