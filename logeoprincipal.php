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
<p><a href="pantallaprincipal.php">inicio</a></p> 
<form name="login-form" action="validarlogeo.php" method="post"> 
    <label for="campousuario">Correo: </label><input id="campousuario" type="text" name="campousuario" size="30" /> 
    <br /> 
    <label for="campopass">Password: </label><input id="campopass" type="password" name="campopass" size="30" /> 
    <br /><br /> 
    <input type="submit" value="Entrar" /><input type="reset" value="Resetear" />
</form>
<?php
 if (!empty($_GET['registroi']) )
{  
	switch ($_GET['registroi'])
	{
		case "falsel":
		 echo'Debe hacer login!!!';
		 break;
		default;
		 echo'Error';
		}
}
?>
</body> 
</html> 