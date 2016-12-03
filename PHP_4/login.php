<link rel="stylesheet" type="text/css" href="css/boton.css"/>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />

<script src="SpryAssets/SpryValidationPassword.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css">

<form id="form1" name="form1" method="post" action="validar.php">

<table width="220" border="0" align="center" cellpadding="4" cellspacing="0" style="font-size: 12px; text-align: center;">
<tr>
    <!--<td valign="middle" bgcolor="#999999" style="font-size: 12px; text-align: center; vertical-align:middle; height:35px">Usuario</td>-->
    <td width="147" align="center" valign="middle" bgcolor="#999999" style="vertical-align:middle; height:30px;"><span id="sprytextfield1">
      <label for="usuario"></label>
      <input style="margin: 10px 5px 5px 5%; text-align:center; width:90%; border-style:hidden; height:26px;" placeholder="Usuario" type="text" name="usuario" id="usuario" />
      </span></td>
  </tr>
  <tr>
    <!--<td bgcolor="#999999" style="font-size: 12px; text-align: center; vertical-align:middle; height:35px">Clave</td>-->
    <td align="center" valign="middle" bgcolor="#999999" style="vertical-align:middle; height:29px"><span id="sprytextfield2">
      <label for="clave"></label>
      <span id="sprypassword1">
      <label for="password1"></label>
      <input style="margin: 5px 5px 5px 5%; text-align:center; width:90%; border-style:hidden; height:26px;" placeholder="Clave" type="password" name="password1" id="password1">
      </span></span></td>
  </tr>
  <tr>
    <td colspan="2" valign="middle" bgcolor="#999999" style="font-size: 12px; text-align: center; padding-bottom:5px; padding-top:5px;">&nbsp;
	<?php
    	if(isset($_SESSION['mensaje'])){
			echo $_SESSION['mensaje'];
			 $_SESSION['mensaje']='';
		}
	?></td>
    </tr>
  <tr>
    <td colspan="2" valign="middle" bgcolor="#999999" style="font-size: 12px; text-align: center;"><label for="button"></label>
      <input class="boton-style3" type="submit" name="button" id="button" value="Entrar" />&nbsp;&nbsp;
      <label for="button2"></label>
      <input class="boton-style3" type="button" name="button2" id="button2" onclick="MM_goToURL('parent','index.php?pag=registrar_usuario');return document.MM_returnValue" value="Registro" /></td>
    </tr>
  
<!--  <tr>
    <td colspan="2" valign="middle" style="font-size: 12px; text-align: center;"><label for="button3"></label>
      <input type="button" name="button3" id="button3" value="Cerrar Sesion" onClick="window.location='cerrar.php'"/></td>
    </tr>-->
</table>
</form>
<script type="text/javascript">
<!--
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprypassword1 = new Spry.Widget.ValidationPassword("sprypassword1");
//-->
</script>
