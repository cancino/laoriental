<?php
include ("conexion.php");
$user = $_POST["user"]; 
$pass = $_POST["pass"];
$query = mysql_query ("SELECT * FROM usuarios WHERE usuario='$user' and password='$pass'");
if (mysql_num_rows($query)>0)
{ 
    session_start(); 
    $_SESSION["conectado"] = true;
	$_SESSION["usuario"] = $user;
    header("Location: ../indx.php");
}
else
{ 
	header("Location: ../log.php");
}
?>