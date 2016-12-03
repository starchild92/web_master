<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
<title>tabla</title>
</head>

<style type="text/css">
<!--
table {
	font-size: 16px; 
	font-family: 'Roboto', sans-serif;
	color: #333;
	padding:7px;
}
-->
</style>
<?php
		include("conex.php");
		$wsql = "select count(*) from usuario where id_tipousuario = 5";
		$result = mysql_query($wsql,$link);
		$row = mysql_fetch_array($result);
		
		$wsql = "select count(*) from artista";
		$result = mysql_query($wsql,$link);
		$row2 = mysql_fetch_array($result);
		
		$wsql = "select count(*) from producto";
		$result = mysql_query($wsql,$link);
		$row3 = mysql_fetch_array($result);
		
		$wsql = "select count(*) from genero";
		$result = mysql_query($wsql,$link);
		$row4 = mysql_fetch_array($result);
		
$datosTabla = array(
		array( "Usuarios", $row[0], "#BDDA4C"),
		array( "Artistas", $row2[0], "#FF9A68"),
		array( "Productos", $row3['0'], "#69ABBF"),
		array( "Generos", $row4['0'], "#FFDE68")
);
$maximo = 0;
foreach ( $datosTabla as $ElemArray ) { $maximo += $ElemArray[1]; }
?>

<body>

<table width="400" cellspacing="0" cellpadding="2">
<?php foreach( $datosTabla as $ElemArray ) {
$porcentaje = round((( $ElemArray[1] / $maximo ) * 100),2);
?>
<tr>
	<td width="30%"><strong><?php echo( $ElemArray[0] ) ?></strong></td>
	<td width="10%"><?php echo( $porcentaje ) ?>%</td>
	<td>
		<table width="<?php echo($porcentaje) ?>%" bgcolor="<?php echo($ElemArray[2]) ?>">
		<tr><td></td></tr>
	</table>
	</td>
	</tr>
	<?php } ?>
</table>

</body>
</html>