<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="es">
<head>

<meta charset="utf-8"/>
<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="css/boton.css"/>

<title>Ver Productos</title>
<script type="text/javascript">
function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
$(document).ready(function(){
		$("#ocultarInfo").click(function(){
			$("#info").toggle("slow");
		});
	});
</script>
</head>

<?php include("conex.php"); ?>
<?php 
	if(isset($_GET['keyArtist'])){
		$wsql = "select * from producto where id_artista=".$_GET['keyArtist'];
		$result = mysql_query($wsql,$link);
		echo mysql_error($link);
		
		$wsql = "select * from artista where id_artista=".$_GET['keyArtist'];
		$result2 = mysql_query($wsql,$link);
		echo mysql_error($link);
		$rowa = mysql_fetch_array($result2);
	}
?>
<body style="font-family: 'Roboto', sans-serif; background: rgba(0, 0, 0, 0.07);">
<div style="border-radius:5px;">	
		<table width="100%">
			<tr>
				<td rowspan="3" width="140"><img style="border-radius:5px;" src="img/artists/Artp<?php echo $_GET['keyArtist']; ?>1.jpg" width="140" height="150" /></td>
				<td></td>
			</tr>
			<tr>
				<td style="text-align:center; text-shadow: 2px 3px 3px #999;"><h1><?php echo $rowa['nombre']; ?></h1></td>
			</tr>
			<tr>
				<td style="text-align:center; vertical-align:top;"><?php echo $rowa['biografia']; ?></td>
			</tr>
		</table>
					</div>
<table width="100%" align="center" style="margin-left=10px;">
	<tr>
	<?php
		$cont = 0;
		while($row = mysql_fetch_array($result)){
		$cont = $cont + 1;
	?>
		<td>
		<table width="399" align="center" style="margin-top:10px; border-style:none;">
			<tr>
				<td width="140" align="center"><img style="border-radius:5px; background: rgba(225, 225, 225, 0.3); margin-right: 10px;" src="img/covers/Artp<?php echo $row['id_artista']?>1.jpg" width="140" height="150"/>
					</td>
				<td width="300" align="center">
					<table width="100%" height="150" align="center">
						<tr>
							<td height="21" style="text-shadow: 2px 3px 3px #999;"><?php echo $row['nombre']?> <strong>(<?php
							$wsql = "select nombre from genero where id_genero=".$row['id_genero'];
							$result2 = mysql_query($wsql,$link);
							$nombre_g = mysql_fetch_array($result2);
							echo $nombre_g['nombre']; ?>)</strong></td>
							</tr>
						<tr>
							<td valign="top"><div style="font-size:13.5px; margin-top: 5px;"><em><?php echo $row['descripcion']?></em></div></td>
							</tr>
						<tr>
							<td height="21" align="center"><div class="botonDetalles"><a href="#"  style="text-decoration:none; color:#333; font-size:12px;" onclick="MM_openBrWindow('producto_detalles.php?idProd=<?php echo $row['id_producto']; ?>','','width=500,height=700')">Ver Detalles <img src="HTML5 Admin Template/images/icn_jump_back.png" width="13" height="13" /></a></div></td>
							</tr>
					</table>
				</td>
				</tr>
				<tr>
			</tr>
		</table>
		</td>
	<?php
		if($cont == 2){
			echo "</tr>";
			$cont = 0;
		}
	} ?>
	</tr>
</table>
</body>
</html>