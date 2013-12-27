<html> 
<head> 
<title>Mensages Recibidos</title> 
</script> 
</head> 
<body> 
<p><a href="pantallaprincipal.php">inicio</a></p> 
<form name="registrar_orden" action="admin/realizaordennuevouser.php" method="post"> 
<?php  
include ("admin/conexion.php");

  $query = ("SELECT * FROM menu");
  $result = mysql_query($query);
  $numero = 0;
  $numero2=0;
  while($row = mysql_fetch_array($result))
  {
	
    echo "".$row["nombre_producto"]." ".$row["descripcion"]." ".$row["precio"]."<input type=\"text\" id=\"cantidad\" name=\"".$numero2."\" size=\"1\" maxlength=\"10\"/><br />";
    $numero++;
    $numero2++;
  }
  echo "<b>Productos: ".$numero ."<br />";
  echo"<input type=\"hidden\" value=\"".$numero2."\" name=\"nforms\">";
  mysql_free_result($result);
  mysql_close();
?>
<input name="submit" type="submit" value="Siguiente" />
</form>
</body> 
</html>
