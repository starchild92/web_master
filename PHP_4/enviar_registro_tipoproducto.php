<?php
session_start();
include("conex.php");
extract($_POST);

if(!isset($_GET['idtipoprod'])){
$wsql = "select * from tipo_producto where nombre = '$nombre'";
$result = mysql_query($wsql,$link);
echo mysql_error($link);

	if (!$row = mysql_fetch_array($result)){
		$wsql = "insert into tipo_producto (nombre) values ('$nombre')";
		$result = mysql_query($wsql,$link);
		echo mysql_error($link);
		
		header("location: administracion.php?pag=Inicio&op=success_tipoprod");
		exit;
	}else{
		header("location: administracion.php?pag=Inicio&op=fail_tipoprod");
		exit;
	}
}else{
$wsql = "update tipo_producto set nombre = '$nombre' where id_tipo = ".$_GET['idtipoprod'];
	mysql_query($wsql,$link);
	echo mysql_error($link);
?>
<body style="height:200px; width:800px; font-family: 'Roboto', sans-serif; text-align:center; vertical-align:middle;">
<h3><br>
	<br>
	Se ha midificado el elemento con exito.<br />
	<em>Haga clic en cerrar y refresque para ver los cambios.</em></h3>
</body>
<?php
}
?>