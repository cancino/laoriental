<html> 
<head> 
<title>Realiza tu pedido</title> 
</script> 
</head> 
<body> 
<h1>PASO 1</h1>
<p><a href="pantallaprincipal.php">inicio</a></p>
<form name="registrar_pedido" action="admin/realizapedidonuevouser.php" method="post"> 
    <label for="aombres">Nombres:</label><input type="text" id="nombres" name="nombres" size="30" maxlength="20"/><br />
	<label for="apellidos">Apellidos:</label><input type="text" id="apellidos" name="apellidos" size="30" maxlength="30" /><br />
	<label for="calle">Calle:</label><input type="text" id="calle" name="calle" size="30" maxlength="30" /><br />
	<label for="colonia">Colonia:</label><input type="text" id="colonia" name="colonia" size="30" maxlength="30" /><br />
	<label for="numero">Numero:</label><input type="text" id="numeroc" name="numeroc" size="30" maxlength="30" /><br />
	<label for="telefono">Telefono:</label><input type="text" id="telefono" name="telefono" size="30" maxlength="30" /><br />
	<label>Sucursal:
	<select name="sucursal" id="sucursal">
	</select>
	</label><br />
	<label for="movil">Movil:</label><input type="text" id="movil" name="movil" size="30" maxlength="30" /><br />
	<label for="correo">Correo:</label><input type="text" id="correo" name="correo" size="30" maxlength="30" /><br />
	<label for="us">Quieres registrarte?:</label><br /><input type="checkbox" id="correo" name="si"
												   value="si">si!<br />
	<label for="pass">Password:</label><input type="text" id="pass" name="pass" size="30" maxlength="30" /><br />
    <input name="submit" type="submit" value="Siguiente" />
	<input type="reset" value="Resetear" /> 
</form>
</body> 

</html> 