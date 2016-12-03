<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registrar Datos - Nuevo Usuario</title>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationPassword.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationConfirm.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationConfirm.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" type="text/css" href="css/boton.css"/>
<script type="text/javascript">
function MM_goToURL() { //v3.0
  var i, args=MM_goToURL.arguments; document.MM_returnValue = false;
  for (i=0; i<(args.length-1); i+=2) eval(args[i]+".location='"+args[i+1]+"'");
}
</script>
</head>

<body style="font-family: 'Roboto', sans-serif;">
<div style="margin-top:15px"></div>
<table width="400" border="0" align="center" cellpadding="4" cellspacing="0" style="text-align: center;">
  <tr>
    <td><form id="form1" name="form1" method="post" action="enviar_registro.php<?php if(isset($_GET['var'])){ echo "?var=Administrador";} ?>">
      <table width="100%" border="0" align="center" cellpadding="0" cellspacing="5" style=" text-align: center; font-size: 13px; color: #000; background: rgba(220,220,220, 1); border-radius: 5px 5px 5px 5px;">
        <tr bgcolor="#666666">
          <td colspan="2" style="font-size:16px; text-align:center; background:#CCC; border-radius:5px; color: #000; height: 25px; padding-top:8px;"><strong>REGISTRO NUEVO USUARIO</strong></td>
          </tr>
        <tr>
          <td width="31%" height="0" valign="middle" style="text-align: center; vertical-align:middle; color: #000;">Usuario</td>
          <td width="69%" height="0" align="center" valign="middle"><span id="usuario">
            <label for="usuario"></label>
            <input class="borderless" placeholder="Puede ser tu correo" style="margin-top:10px" size="40px" type="text" name="usuario" id="usuario" />
            </span></td>
        </tr>
        <tr>
          <td width="31%" height="0" valign="middle" style="text-align: center; vertical-align:middle; color: #000;">Clave</td>
          <td width="69%" height="0" align="center" valign="middle"><span id="sprypassword1">
          	<label for="password2"></label>
          	<input class="borderless" style="margin-top:10px" size="40px" type="password" name="password1" id="password2" />
          	</span></td>
        </tr>
        <tr>
          <td width="31%" height="0" valign="middle" style="text-align: center; vertical-align:middle; color: #000;">Repetir Clave</td>
          <td width="69%" height="0" align="center" valign="middle"><span id="spryconfirm1">
          	<label for="password3"></label>
          	<input class="borderless" style="margin-top:10px" size="40px" type="password" name="password3" id="password3" />
          	</span></td>
        </tr>
        <tr>
          <td width="31%" height="0" valign="middle" style="text-align: center; vertical-align:middle">Nombre</td>
          <td width="69%" height="0" align="center" valign="middle"><span id="sprytextfield2">
            <label for="nombre"></label>
            <input class="borderless" style="margin-top:10px" size="40px" type="text" name="nombre" id="nombre" />
            </span></td>
        </tr>
        <tr>
          <td width="31%" height="0" valign="middle" style="text-align: center; vertical-align:middle">Télefono</td>
          <td width="69%" height="0" align="center" valign="middle"><span id="sprytextfield3">
            <label for="telefono"></label>
			<input name="telefono" placeholder="0000-0000000" type="text" class="borderless" id="telefono" style="margin-top:10px" size="40px" maxlength="15" />
			</span></td>
        </tr>
        <tr>
          <td width="31%" height="0" valign="middle" style="text-align: center; vertical-align:middle">Correo</td>
          <td width="69%" height="0" align="center" valign="middle"><span id="sprytextfield4">
            <label for="correo"></label>
			<input class="borderless" placeholder="ejemplo@domain.some" style="margin-top:10px" size="40px" type="text" name="correo" id="correo" />
			</span></td>
        </tr>
        <tr>
          <td width="31%" height="0" valign="middle" style="text-align: center; vertical-align:middle">Dirección</td>
          <td width="69%" height="0" align="center" valign="middle"><span id="sprytextfield5">
            <label for="direccion"></label>
			<input name="direccion" type="text" class="borderless" id="direccion" style="margin-top:10px; margin-bottom:10px" value="" size="40px" />
            </span></td>
        </tr>
        <tr>
          <td colspan="2" style="text-align: center; height:30px;"><label for="button2"></label>
            <input style="margin-right:90px;" name="button2" type="button" class="boton-style3" id="button2" onclick="MM_goToURL('parent','index.php');return document.MM_returnValue" value="Cancelar" /><label for="button"></label>
            <input class="boton-style3" style="vertical-align:middle; width:120px;" type="submit" name="button" id="button" value="Registrarse" />
            </td>
          </tr>
      </table>
    </form></td>
  </tr>
</table>
<script type="text/javascript">
<!--
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3", "phone_number", {useCharacterMasking:true, format:"phone_custom", pattern:"0000-0000000"});
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4", "email", {useCharacterMasking:true});
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5");
var sprytextfield1 = new Spry.Widget.ValidationTextField("usuario");
var sprypassword1 = new Spry.Widget.ValidationPassword("sprypassword1");
var spryconfirm1 = new Spry.Widget.ValidationConfirm("spryconfirm1", "password2", {validateOn:["change"]});
//-->
</script>
</body>
</html>