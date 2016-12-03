<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registrar Artista</title>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
</head>

<body style="font-family: 'Roboto', sans-serif;">
<table width="600" align="center">
	<tr>
		<td><form id="form1" name="form1" method="post" action="enviar_registro_tipoproducto.php<?php if(isset($_GET['id'])){ echo "?idtipoprod=".$_GET['id']; }?>">
			<table width="100%" align="center" cellspacing="5">
				<tr>
					<td colspan="2" align="center" style="font-size:16px; background:#CCC; border-radius:10px;"><strong> NUEVO TIPO DE PRODUCTO</strong></td>
					</tr>
				<tr>
					<td colspan="2" align="center" style="font-size:12px; background: rgba(0,0,0,0.1);">Nombre del Tipo de Producto</td>
					</tr>
				<tr>
				<?php include("conex.php");
				$nombre = "";
				if(isset($_GET['id'])){
					$wsql = "select * from tipo_producto where id_tipo =".$_GET['id'];
					$result = mysql_query($wsql,$link);
					echo mysql_error($link);
					$row = mysql_fetch_array($result);
					$nombre = $row['nombre'];
				}
				?>
					<td colspan="2" align="center"><span id="sprytextfield1">
						<label for="nombre"></label>
						<input placeholder="nombre tipo de producto" style="width:250px" type="text" name="nombre" id="nombre" value="<?php echo $nombre; ?>"/>
						</span></td>
					</tr>
				<tr>
					<td width="50%" align="center"><input type="submit" name="button" id="button" value="Guardar Datos" /></td>
					<?php if(!isset($_GET['id'])){?><td width="50%" align="center"><input type="reset" name="button2" id="button2" value="Restablecer" /></td><?php }?>
				</tr>
			</table>
		</form></td>
	</tr>
</table>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
</script>
</body>
</html>