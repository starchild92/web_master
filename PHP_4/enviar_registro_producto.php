<?php
/* El registro de producto solo esta disponible para usuarios Administradores,
quienes tienen acceso completo a la base de datos. */

session_start();
include("conex.php");
extract($_POST);
$fecha = date('y/m/d');

$no = array("'");
$nombre = str_replace($no,"",$nombre);
$descripcion = str_replace($no,"",$descripcion);
$precio = str_replace($no,"",$precio);
$cantidad = str_replace($no,"",$cantidad);

/* Voy a usar el nombre para verficiar que no se vendan dos productos iguales
Es decir, productos con nombre distintos son distintos. */

if(!isset($_GET['idprod'])){
$wsql = "select * from producto where nombre = '$nombre'";
$result = mysql_query($wsql,$link);
echo mysql_error($link);
	if (!$row = mysql_fetch_array($result) && $row['id_artista']=!$artista){
			$wsql = "insert into producto (id_artista, id_genero, id_tipoproducto, id_tipoventa, id_estatus, nombre, descripcion, fecha_registro, precio, cantidad) values ('$artista','$genero','$tipoproducto', '$tipoventa', '$estatus', '$nombre', '$descripcion', '$fecha', '$precio', '$cantidad')";
		
		mysql_query($wsql,$link);
		echo mysql_error($link);
		
		header("location: administracion.php?pag=Inicio&op=success");
		exit;
	}else{
		header("location: administracion.php?pag=Inicio&op=equal_name");
		exit;
	}
}else{
	$wsql = "update producto set id_artista = '$artista', id_genero = '$genero', id_tipoproducto = '$tipoproducto', id_tipoventa = '$tipoventa', id_estatus = '$estatus', nombre = '$nombre', descripcion = '$descripcion', precio = '$precio', cantidad = '$cantidad' where id_producto = ".$_GET['idprod'];
	mysql_query($wsql,$link);
	echo mysql_error($link);
?>
<body style="height:200px; width:800px; font-family: 'Roboto', sans-serif; text-align:center; vertical-align:middle;"><br>
<br>
<h3>Se ha modificado el elemento con exito</h3>.<br />
<strong><em>Haga clic en cerrar y refresque para ver los cambios.</em></strong></body>
<?php
}
?>