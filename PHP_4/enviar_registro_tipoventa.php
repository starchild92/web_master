<?php
session_start();
include("conex.php");
extract($_POST);

if(!isset($_GET['idtipoventa'])){
$wsql = "select * from tipo_venta where tipo = '$nombre'";
$result = mysql_query($wsql,$link);
echo mysql_error($link);

	if (!$row = mysql_fetch_array($result)){
		$wsql = "insert into tipo_venta (tipo) values ('$nombre')";
		$result = mysql_query($wsql,$link);
		echo mysql_error($link);
		
		header("location: administracion.php?pag=Inicio&op=success_tipoventa");
		exit;
	}else{
		header("location: administracion.php?pag=Inicio&op=fail_tipoventa");
		exit;
	}
}else{
	$wsql = "update tipo_venta set tipo = '$nombre' where id_venta =".$_GET['idtipoventa'];
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