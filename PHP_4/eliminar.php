<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Eliminar</title>
<link rel="stylesheet" type="text/css" href="css/boton.css"/>
</head>

<?php
include("conex.php");
if(isset($_GET['id'])){
	if(isset($_GET['tipo'])){
		/* Para verificar que quiero eliminar */
		if($_GET['tipo']=="producto"){
			$wsql = "select nombre from producto where id_producto =".$_GET['id'];
			$result = mysql_query($wsql,$link);
			$row = mysql_fetch_array($result);
			$cadena = "El producto '<strong>".$row['nombre']."</strong>'";
		}
		if($_GET['tipo']=="artista"){
			$wsql = "select nombre from artista where id_artista =".$_GET['id'];
			$result = mysql_query($wsql,$link);
			$row = mysql_fetch_array($result);
			$cadena = "El artista '<strong>".$row['nombre']."</strong>'";
		}
		if($_GET['tipo']=="genero"){
			$wsql = "select nombre from genero where id_genero =".$_GET['id'];
			$result = mysql_query($wsql,$link);
			$row = mysql_fetch_array($result);
			$cadena = "El genero '<strong>".$row['nombre']."</strong>'";
		}
		if($_GET['tipo']=="tipoproducto"){
			$wsql = "select nombre from tipo_producto where id_tipo =".$_GET['id'];
			$result = mysql_query($wsql,$link);
			$row = mysql_fetch_array($result);
			$cadena = "El tipo de producto '<strong>".$row['nombre']."</strong>'";
		}
		if($_GET['tipo']=="tipoventa"){
			$wsql = "select tipo from tipo_venta where id_venta =".$_GET['id'];
			$result = mysql_query($wsql,$link);
			$row = mysql_fetch_array($result);
			$cadena = "El tipo de venta '<strong>".$row['tipo']."</strong>'";
		}
	}
}
?>

<body>
<div style="background:#0FF; text-align:center; font-family: 'Roboto', sans-serif; border-radius: 5px">
	Está seguro que desea eliminar<br />
	 <?php echo $cadena; ?><br /><br />
	<a href="enviar_eliminar.php?id=<?php echo $_GET['id']; ?>&tipo=<?php echo $_GET['tipo']; ?>"><input class="boton-style3" name="Eliminar" type="button" id="Eliminar" value="Eliminar" /></a><br />
&nbsp;
	</div>
</body>
</html>