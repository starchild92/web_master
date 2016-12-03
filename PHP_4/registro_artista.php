<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registrar Artista</title>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationSelect.js" type="text/javascript"></script>
<script src="Scripts/swfobject_modified.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationSelect.css" rel="stylesheet" type="text/css" />

    <script type="text/javascript" src="NicEdit/nicEdit.js"></script>
	<script type="text/javascript">
    bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
    </script>
</head>

<?php
include("conex.php");

$nombre = "";
$id_genero = "";
$biografia = "";

if(isset($_GET['id'])){
	$_SESSION['mod_artista']=true;
	
	$wsql = "select * from artista where id_artista = ".$_GET['id'];
	$result = mysql_query($wsql,$link);
	echo mysql_error($link);
	$dato = mysql_fetch_array($result);
	$nombre = $dato['nombre'];
	$id_genero = $dato['id_genero'];
	$biografia = $dato['biografia'];
	
	$wsql = "select nombre from genero where id_genero = ".$id_genero;
	$result = mysql_query($wsql,$link);
	echo mysql_error($link);
	$row = mysql_fetch_array($result);
	$nombre_genero = $row['nombre'];
}

$wsql = "select * from genero ORDER BY nombre";
$result = mysql_query($wsql,$link);
echo mysql_error($link);
?>

<body style="font-family: 'Roboto', sans-serif;">
<table width="600" align="center">
	<tr>
		<td><form id="form1" name="form1" method="post" action="enviar_registro_artista.php<?php if(isset($_GET['id'])){ echo "?idartista=".$_GET['id']; }?>">
			<table width="100%" align="center" cellspacing="5">
				<tr>
					<td colspan="2" align="center" style="font-size:16px; background:#CCC; border-radius:10px;"><strong>REGISTRO DE UN NUEVO ARTISTA</strong></td>
					</tr>
				<tr>
					<td align="center" style="font-size:12px; background: rgba(0,0,0,0.1);">Nombre del Artista</td>
					<td align="center" style="font-size:12px; background: rgba(0,0,0,0.1);">Género del Artista</td>
				</tr>
				<tr>
					<td align="center"><span id="sprytextfield1">
						<label for="nombre"></label>
						<input placeholder="Nombre del nuevo Artista o Banda" style="width:98%" type="text" name="nombre" id="nombre" value="<?php echo $nombre; ?>" />
						</span></td>
						
					<td align="center"><span id="spryselect1">
						<label for="genero"></label>
						<select style="width:100%;" name="genero" id="genero">
						<?php if(isset($_GET['id'])){?>
						  <option value="<?php echo $id_genero; ?>"><?php echo $nombre_genero; ?></option><?php }else{?>
						  <option value="-1">Elige uno de la lista</option>
						  <?php } ?>
						  <?php while($row = mysql_fetch_array($result)){ ?>
						  <option value="<?php echo $row['id_genero']; ?>"><?php echo $row['nombre']; ?></option>
						  <?php } ?>
						</select>
						</span></td>
				</tr>
				<tr>
					<td colspan="2" align="center" style="font-size:12px; background: rgba(0,0,0,0.1);">Biograféa:</td>
					</tr>
				<tr align="center">
					<td colspan="2"><span id="sprytextfield2">
					<label for="text2"></label>
						<textarea style="width:600px; height:200px;" name="biografia" id="text2"><?php echo $biografia; ?></textarea>
						
					  </span></td>
					</tr>
				<tr>
					<td width="50%" align="center"><input type="submit" name="button" id="button" value="Guardar Datos" /></td>
					<td width="50%" align="center"><?php if(!isset($_GET['id'])){?><input type="reset" name="button2" id="button2" value="Restablecer" /><?php }?></td>
				</tr>
			</table>
		</form></td>
	</tr>
</table>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var spryselect1 = new Spry.Widget.ValidationSelect("spryselect1");
</script>
</body>
</html>