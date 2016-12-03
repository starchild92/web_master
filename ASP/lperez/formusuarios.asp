<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationConfirm.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationPassword.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css">
<link href="SpryAssets/SpryValidationConfirm.css" rel="stylesheet" type="text/css">
<link href="SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css">
<title>Registro de Usuario</title>
</head>

<body><table width="500" border="0" align="center" cellpadding="0" cellspacing="0" background="ima/tablebackground.png">
  <tr>
    <td>
      <form name="form1" method="post" action="gusuario.asp">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td height="50" colspan="2" align="center"><img name="registro" src="ima/registro.png" width="500" height="50" border="0" alt=""></td>
          </tr>
          <tr>
            <td height="32" align="center" style="font-family:Roboto, 'Roboto Lt', 'Roboto Th', 'Roboto Bk'">Login</td>
            <td height="30" align="left"><span id="sprytextfield1">
              <label>
                <input name="login" type="text" id="login" size="30" maxlength="8">
              </label>
            </span></td>
</tr>
          <tr>
            <td height="32" align="center" style="font-family:Roboto, 'Roboto Lt', 'Roboto Th', 'Roboto Bk'">Clave</td>
            <td height="30" align="left"><span id="sprypassword1">
              <label>
                <input name="password1" type="password" id="password1" size="30" maxlength="6">
              </label>
            </span></td>
</tr>
          <tr>
            <td height="32" align="center" style="font-family:Roboto, 'Roboto Lt', 'Roboto Th', 'Roboto Bk'">Repetir Clave</td>
            <td height="30" align="left"><span id="spryconfirm1">
              <label>
                <input name="password2" type="password" id="password2" size="30" maxlength="6">
              </label>
            </span></td>
</tr>
          <tr>
            <td height="32" align="center" style="font-family:Roboto, 'Roboto Lt', 'Roboto Th', 'Roboto Bk'">Nombre</td>
            <td height="30" align="left"><span id="sprytextfield2">
              <label>
                <input name="nombre" type="text" id="nombre" size="30" maxlength="50">
              </label>
            </span></td>
</tr>
          <tr>
            <td height="32" align="center" style="font-family:Roboto, 'Roboto Lt', 'Roboto Th', 'Roboto Bk'">Teléfono</td>
            <td height="30" align="left"><span id="sprytextfield3">
              <label>
                <input name="telefono" type="text" id="telefono" size="30" maxlength="15" />
              </label>
            </span></td>
</tr>
          <tr>
            <td height="32" align="center" style="font-family:Roboto, 'Roboto Lt', 'Roboto Th', 'Roboto Bk'">Correo Electronico</td>
            <td height="30" align="left"><span id="sprytextfield4">
              <label>
                <input name="correo" type="text" id="correo" size="30" maxlength="50">
              </label>
            </span></td>
</tr>
          <tr>
            <td height="32" align="center" style="font-family:Roboto, 'Roboto Lt', 'Roboto Th', 'Roboto Bk'">Dirección</td>
            <td height="30" align="left"><span id="sprytextfield5">
              <label>
                <input name="direccion" type="text" id="direccion" value="" size="30" maxlength="255" />
              </label>
            </span></td>
</tr>
          <tr>
            <td height="40" colspan="2" align="center"><label>
              <input type="submit" style="width: 100px;height: 30px; background-color:#999; color:#000; border: solid thin #000; font-family:Roboto, 'Roboto Lt', 'Roboto Th', 'Roboto Bk'" name="button2" id="button2" value="Guardar">
&nbsp;&nbsp; </label>
              <label>
                <input type="reset" style="width: 100px;height: 30px; background-color:#999; color:#000; border: solid thin #000; font-family:Roboto, 'Roboto Lt', 'Roboto Th', 'Roboto Bk'" name="button" id="button" value="Borrar">
              </label></td>
          </tr>
          <tr> </tr>
          <tr> </tr>
          <tr> </tr>
          <tr> </tr>
          <tr> </tr>
          <tr> </tr>
          <tr> </tr>
        </table>
    </form></td>
  </tr>
  <tr>
    <td><p><img src="ima/Info.png" width="500" height="69" /></p></td>
  </tr>
</table>
<script type="text/javascript">
<!--
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3", "phone_number", {useCharacterMasking:true, format:"phone_custom"});
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4", "email");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var spryconfirm1 = new Spry.Widget.ValidationConfirm("spryconfirm1", "password2");
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprypassword1 = new Spry.Widget.ValidationPassword("sprypassword1");
//-->
</script>
</body>
</html>