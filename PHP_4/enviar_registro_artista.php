<?php
session_start();
include("conex.php");
extract($_POST);

if(!isset($_GET['idartista'])){

$wsql = "select * from artista where nombre = '$nombre'";
$result = mysql_query($wsql,$link);
echo mysql_error($link);

	if (!$row = mysql_fetch_array($result)){
		$wsql = "insert into artista (id_genero, nombre, biografia) values ('$genero','$nombre','$biografia')";
		$result = mysql_query($wsql,$link);
		echo mysql_error($link);
		
		header("location: administracion.php?pag=Inicio&op=success_artista");
		exit;
	}else{
		header("location: administracion.php?pag=Inicio&op=fail_artista");
		exit;
	}
}else{
	$wsql = "update artista set nombre = '$nombre', id_genero = '$genero', biografia = '$biografia' where id_artista = ".$_GET['idartista'];
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