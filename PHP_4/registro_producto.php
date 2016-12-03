<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registrar Producto</title>

<link rel="stylesheet" type="text/css" href="css/boton.css"/>
<style type="text/css">
<!--
#form1 table tr td {
	font-size: 12px;
}
-->
</style>
<script src="SpryAssets/SpryValidationSelect.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationSelect.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />

    <script type="text/javascript" src="NicEdit/nicEdit.js"></script>
    <script type="text/javascript">
    	bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
    </script>
</head>

<body style="font-family: 'Roboto', sans-serif;">
<?php 
	include("conex.php");
	$nombre = "";
	$precio = "";
	$cantidad = "";
	$descripcion = "";
	$id_artista = "";
	$id_genero = "";
	$id_tipoproducto = "";
	$id_tipoventa = "";
	$id_estatus = "";
	
	if(isset($_GET['id'])){
		
		$_SESSION['mod_prod']=true;
		
		$wsql = "select * from producto where id_producto = ".$_GET['id'];
		$result = mysql_query($wsql,$link);
		echo mysql_error($link);
		$dato = mysql_fetch_array($result);
		$nombre = $dato['nombre'];
		$precio = $dato['precio'];
		$cantidad = $dato['cantidad'];
		$descripcion = $dato['descripcion'];
		$id_artista = $dato['id_artista'];
		$id_genero = $dato['id_genero'];
		$id_tipoproducto = $dato['id_tipoproducto'];
		$id_tipoventa = $dato['id_tipoventa'];
		$id_estatus = $dato['id_estatus'];
		
		$wsql = "select nombre from artista where id_artista = ".$id_artista;
		$result = mysql_query($wsql,$link);
		echo mysql_error($link);
		$row = mysql_fetch_array($result);
		$nombre_artista = $row['nombre'];
		
		$wsql = "select nombre from genero where id_genero = ".$id_genero;
		$result = mysql_query($wsql,$link);
		echo mysql_error($link);
		$row = mysql_fetch_array($result);
		$nombre_genero = $row['nombre'];
		
		$wsql = "select nombre from tipo_producto where id_tipo = ".$id_tipoproducto;
		$result = mysql_query($wsql,$link);
		echo mysql_error($link);
		$row = mysql_fetch_array($result);
		$nombre_tipoproducto = $row['nombre'];
		
		$wsql = "select tipo from tipo_venta where id_venta = ".$id_tipoventa;
		$result = mysql_query($wsql,$link);
		echo mysql_error($link);
		$row = mysql_fetch_array($result);
		$nombre_tipoventa = $row['tipo'];
		
		$wsql = "select nombre from estatus where id_estatus = ".$id_estatus;
		$result = mysql_query($wsql,$link);
		echo mysql_error($link);
		$row = mysql_fetch_array($result);
		$nombre_estatus = $row['nombre'];
		
	}
		$wsql = "select * from artista ORDER BY nombre";
		$result = mysql_query($wsql,$link);
		echo mysql_error($link);
?>

<table width="700" border="0" align="center" cellpadding="4" cellspacing="0" style="text-align: center; font-size: 12px;">
  <tr>
    <td><form id="form1" name="form1" method="post" action="enviar_registro_producto.php<?php if(isset($_GET['id'])){ echo "?idprod=".$_GET['id']; }?>">
    <table width="100%" cellspacing="5">
	<tr>
		<td colspan="4" style="font-size:16px; text-align:center; background:#CCC; border-radius:10px;"><strong>REGISTRAR UN NUEVO PRODUCTO</strong>
			</td>
	</tr>
	<tr>
		<td width="19%" style="font-size:12px; background: rgba(0,0,0,0.1);"><span>Artista</span></td>
		<td width="31%"><span id="spryselect1">
            <label for="artista"></label>
            <select style="width:100%" name="artista" id="artista">
              <?php if(isset($_GET['id'])){?>
				  <option value="<?php echo $id_artista; ?>"><?php echo $nombre_artista; ?></option><?php }else{?>
				  <option value="-1">Elige uno de la lista</option>
				  <?php } ?>
              <?php while($row = mysql_fetch_array($result)){ ?>
              <option value="<?php echo $row['id_artista']; ?>"><?php echo $row['nombre']; ?></option>
              <?php } ?>
            </select>
          </span></td>
		<td width="19%" style="font-size:12px; background: rgba(0,0,0,0.1);"><span>Nombre</span></td>
		<td width="31%"><span id="sprytextfield1">
            <label for="nombre"></label>
            <input placeholder="del Producto" style="width:100%" type="text" name="nombre" id="nombre" value="<?php echo $nombre; ?>" />
            </span></td>
	</tr>
	<tr>
		<td width="19%" style="font-size:12px; background: rgba(0,0,0,0.1);"><span>Género</span></td>
		<td width="31%">
			<?php $wsql = "select * from genero ORDER BY nombre";
			$result = mysql_query($wsql,$link);
			echo mysql_error($link);?>
			<span id="spryselect2">
				<label for="genero"></label>
				<select style="width:100%" name="genero" id="genero">
				  <?php if(isset($_GET['id'])){?>
					  <option value="<?php echo $id_genero; ?>"><?php echo $nombre_genero; ?></option><?php }else{?>
					  <option value="-1">Elige uno de la lista</option>
					  <?php } ?>
				  <?php while($row = mysql_fetch_array($result)){ ?>
				  <option value="<?php echo $row['id_genero']; ?>"><?php echo $row['nombre']; ?></option>
				  <?php } ?>
				</select>
	</span>
		</td>
		<td width="19%" style="font-size:12px; background: rgba(0,0,0,0.1);">Tipo de Producto</td>
		<td width="31%">
			<?php $wsql = "select * from tipo_producto ORDER BY nombre";
			$result = mysql_query($wsql,$link);
			echo mysql_error($link);?>
			<span id="spryselect4">
				<label for="tipoproducto"></label>
				<select style="width:100%" name="tipoproducto" id="tipoproducto">
					<?php if(isset($_GET['id'])){?>
					<option value="<?php echo $id_tipoproducto; ?>"><?php echo $nombre_tipoproducto; ?></option>
					<?php }else{?>
					<option value="-1">Elige uno de la lista</option>
					<?php } ?>
					<?php while($row = mysql_fetch_array($result)){ ?>
					<option value="<?php echo $row['id_tipo']; ?>"><?php echo $row['nombre']; ?></option>
					<?php } ?>
				</select>
				</span>
		</td>
	</tr>
	<tr>
		<td width="19%" style="font-size:12px; background: rgba(0,0,0,0.1);">Tipo de Venta</td>
		<td width="31%">
			<?php $wsql = "select * from tipo_venta ORDER BY tipo";
			$result = mysql_query($wsql,$link);
			echo mysql_error($link);?>
			<span id="spryselect5">
				<label for="tipoproducto"></label>
				<select style="width:100%" name="tipoventa" id="tipoventa">
				  <?php if(isset($_GET['id'])){?>
					  <option value="<?php echo $id_tipoventa; ?>"><?php echo $nombre_tipoventa; ?></option><?php }else{?>
					  <option value="-1">Elige uno de la lista</option>
					  <?php } ?>
					<?php while($row = mysql_fetch_array($result)){ ?>
				  <option value="<?php echo $row['id_venta']; ?>"><?php echo $row['tipo']; ?></option>
				  <?php } ?>
				</select>
				</span>
		</td>
		<td width="19%" style="font-size:12px; background: rgba(0,0,0,0.1);">Estatus</td>
		<td width="31%">
			<?php $wsql = "select * from estatus ORDER BY nombre";
			$result = mysql_query($wsql,$link);
			echo mysql_error($link);?>
			<span id="spryselect6">
				<label for="estatus"></label>
				<select style="width:100%" name="estatus" id="estatus">
				  <?php if(isset($_GET['id'])){?>
					  <option value="<?php echo $id_estatus; ?>"><?php echo $nombre_estatus; ?></option><?php }else{?>
					  <option value="-1">Elige uno de la lista</option>
					  <?php } ?>
					<?php while($row = mysql_fetch_array($result)){ ?>
				  <option value="<?php echo $row['id_estatus']; ?>"><?php echo $row['nombre']; ?></option>
				  <?php } ?>
				</select>
			</span>
		</td>
	</tr>
	<tr>
		<td width="19%" style="font-size:12px; background: rgba(0,0,0,0.1);">Precio</td>
		<td width="31%"><span id="sprytextfield3">
            <label for="precio"></label>
            <input placeholder="En Bs.F" style="width:98%" type="text" name="precio" id="precio" value="<?php echo $precio; ?>" />
            </span></td>
		<td width="19%" style="font-size:12px; background: rgba(0,0,0,0.1);">Cantidad</td>
		<td width="31%"><span id="sprytextfield4">
            <label for="cantidad"></label>
            <input placeholder=" mayor a cero" style="width:100%" type="text" name="cantidad" id="cantidad" value="<?php echo $cantidad; ?>" />
            </span></td>
	</tr>
	<tr>
		<td align="center" valign="middle" style="font-size:12px; background: rgba(0,0,0,0.1);">Descripción</td>
		<td colspan="3" align="left"><span id="sprytextarea1">
			<label for="descripcion"></label>
			<textarea name="descripcion" id="descripcion" style="width:560px; height:200px;"><?php echo $descripcion; ?></textarea>
			</span></td>
	</tr>
	<tr>
		<td colspan="4" style="text-align: center;"><label for="button"></label>
          	<input name="button" type="submit" style="width: 120px; margin-right: 120px" id="button" value="Guardar Datos" />
          	<label for="button2"></label>
			<?php if(!isset($_GET['id'])){?>
          	<input name="button2" type="reset" style="width: 120px" id="button2" value="Restablecer" />
			<?php } ?>
		</td>
	</tr>
</table>
    </form>
	</td>
  </tr>
</table>
<script type="text/javascript">
var spryselect1 = new Spry.Widget.ValidationSelect("spryselect1");
var sprytextfield1 = new Spry.Widget.ValidationTextField("spytextfield1");
var spryselect2 = new Spry.Widget.ValidationSelect("spryselect2");
var spryselect5 = new Spry.Widget.ValidationSelect("spryselect5");
var spryselect6 = new Spry.Widget.ValidationSelect("spryselect6");
var sprytextfield3 = new Spry.Widget.ValidationTextField("spytextfield3");
var sprytextfield4 = new Spry.Widget.ValidationTextField("spytextfield4");
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
</script>
</body>
</html>