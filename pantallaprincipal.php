<?php session_start(); 
if(isset($_SESSION["conectado"]))
{ 
    header("Location: paginaparaempezarpedido.php"); 
}
?>
<html> 
<head> 
<title>BIENVENIDO</title> 
</head> 
<body> 
	<p>Ya eres usuario?</p>
	<p><a href="logeoprincipal.php">Si</a> <a href="paginanuevouser.php">No</a></p>
</body> 
</html> 