<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="css/boton.css"/>

<script type="text/javascript" src="nivo-slider/demo/scripts/jquery-1.9.0.min.js"></script>

<script type="text/javascript">
$(document).ready(function(){
		$("#detalles").click(function(){
			$("#verDetalles").toggle("slow");
		});
	});
$(document).ready(function(){
		$("#msj").click(function(){
			$("#verMensajes").toggle("slow");
		});
	});
</script>


<?php 
	include("conex.php");
	if(isset($_GET['idProd'])){
		$wsql = "select * from producto where id_producto=".$_GET['idProd'];
		$result = mysql_query($wsql,$link);
		$row = mysql_fetch_array($result);
	}
?>

<title>Detalles de <?php echo $row['nombre']; ?></title>
</head>

<body style="font-family: 'Roboto', sans-serif; margin: 10px 10px 10px 10px;">

<div style="width:450px; height:656px; padding: 5px 5px 5px 5px; margin: 10px 10px 10px 10px; border-radius: 5px; background: -moz-linear-gradient(top, rgba(151,229,208,1) 18%, rgba(255,255,255,1) 100%);
background: -webkit-gradient(linear, left top, left bottom, color-stop(18%,rgba(151,229,208,1)), color-stop(100%,rgba(255,255,255,1)));">
	<div style="color:#FFF; height:25px; text-align:center; text-shadow: 2px 2px 2px #333; font-size:20px;"><?php echo $row['nombre']; ?>
	</div>
	<div style="background: rgba(225, 225, 225, 0.6); margin: 10px 31% 10px 25%;">
		<img src="img/covers/fp<?php echo $_GET['idProd'] ?>1.jpg" width="200" height="200" />
	</div>
		<!-- div de los detalles del producto--> 
<div style=" width:100%; background: #FFF;">
			<div style=" width:100%; text-align:center; color:#000;"><button id="detalles" class="buttonchag" style="vertical-align:middle; text-align:center; width:100%; font-size:16px; cursor:pointer;"><strong>Detalles Producto</strong></button></div>
		<div id="verDetalles" style="margin: 5px;">
			<strong>Artista</strong>: <?php
			$wsql = "select nombre from artista where id_artista=".$row['id_artista'];
			$result = mysql_query($wsql,$link);
			$rw = mysql_fetch_array($result);
			echo $rw['nombre'];
			?><br />
			<strong>Nombre</strong>: <?php echo $row['nombre']; ?><br />
			<strong>Género</strong>: <?php
			$wsql = "select nombre from genero where id_genero=".$row['id_genero'];
			$result = mysql_query($wsql,$link);
			$rw = mysql_fetch_array($result);
			echo $rw['nombre'];
			?><br />
			<strong>Tipo Producto</strong>: <?php
			$wsql = "select nombre from tipo_producto where id_tipo=".$row['id_tipoproducto'];
			$result = mysql_query($wsql,$link);
			$rw = mysql_fetch_array($result);
			echo $rw['nombre'];
			?><br />
			<strong>Tipo Venta</strong>: <?php
			$wsql = "select tipo from tipo_venta where id_venta=".$row['id_tipoventa'];
			$result = mysql_query($wsql,$link);
			$rw = mysql_fetch_array($result);
			echo $rw['tipo'];
			?><br />
			<strong>Disponibilidad</strong>: <?php
			$wsql = "select nombre from estatus where id_estatus=".$row['id_estatus'];
			$result = mysql_query($wsql,$link);
			$rw = mysql_fetch_array($result);
			echo $rw['nombre'];
			?><br />
		<strong>Descripción</strong>:<br />
				<div style="margin: -5px 10px 10px 10px; padding: 5px; font-size:14px"><?php echo $row['descripcion']; ?></div>
		<strong>Precio</strong>: <?php echo $row['precio']; ?> Bs.<br />
		</div>
		</div>
	<div style=" width:100%; background: #FFF; margin-top: 5px;">
		<div style=" width:100%; text-align:center; background:#CCC; color:#000;"><button id="msj" class="buttonchag" style="vertical-align:middle; text-align:center; width:100%; font-size:16px;"><strong>Comentarios Sobre el Producto</strong></button>
		</div>
		<div id="verMensajes" style="margin: 5px;">
			Information, please! I want it so bad!!!
		</div>
	</div>
</div>

</body>
</html>