
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />

<script src="SpryAssets/SpryValidationPassword.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css">
<form id="form1" name="form1" method="post" action="validar.php">
<table width="250" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="2" align="center">ENTRAR</td>
    </tr>
  <tr>
    <td>Usuario</td>
    <td align="right"><span id="sprytextfield1">
      <label for="usuario"></label>
      <input type="text" name="usuario" id="usuario" />
      </span></td>
  </tr>
  <tr>
    <td>Contrasena</td>
    <td align="right"><span id="sprytextfield2">
      <label for="clave"></label>
      <span id="sprypassword1">
      <label for="password1"></label>
      <input type="password" name="password1" id="password1">
      </span></span></td>
  </tr>
  <tr>
    <td colspan="2" align="center"><label for="button"></label>
      <input type="submit" name="button" id="button" value="Entrar" />
      <label for="button2"></label>
      <input type="button" name="button2" id="button2" value="Registro" /></td>
    </tr>
  <tr>
    <td colspan="2" align="center">
	<?php
    	if(isset($_SESSION['mensaje'])){
			echo $_SESSION['mensaje'];
			 $_SESSION['mensaje']='';
		}
	?></td>
    </tr>
  <tr>
    <td colspan="2" align="center"><label for="button3"></label>
      <input type="button" name="button3" id="button3" value="Cerrar Sesion" onClick="window.location='cerrar.php'"/></td>
    </tr>
</table></form>
<script type="text/javascript">
<!--
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprypassword1 = new Spry.Widget.ValidationPassword("sprypassword1");
//-->
</script>
