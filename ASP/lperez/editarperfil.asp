<!--#include file="conex.asp"-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationConfirm.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationPassword.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationConfirm.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
<!--
function MM_goToURL() { //v3.0
  var i, args=MM_goToURL.arguments; document.MM_returnValue = false;
  for (i=0; i<(args.length-1); i+=2) eval(args[i]+".location='"+args[i+1]+"'");
}
//-->
</script>
</head>
<%
	login = session("login")
	wsql = "select * from usuarios where idusuario=" &login
	set rs = con.execute(wsql)

%>
<body>
<table width="490" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><form id="form1" name="form1" method="post" action="gusuario.asp?pag=editarperfil">
      <table width="100%" border="0" cellspacing="0" cellpadding="0" style="font-family:Roboto, 'Roboto Cn', 'Roboto Bk', 'Roboto Lt', 'Roboto Th'; font-size: 18px; font-weight: bold;">
        <tr>
          <td height="32" colspan="2" align="center" bgcolor="#999999">Editar Perfil</td>
          </tr>
        <tr>
          <td>Login</td>
          <td><span id="sprytextfield1">
            <label for="login"></label>
            <input type="text" name="login" id="login" value="<%=rs("login")%>"/>
            </span></td>
        </tr>
        <tr>
          <td>Nombre</td>
          <td><span id="sprytextfield2">
            <label for="nombre"></label>
            <input type="text" name="nombre" id="nombre" value="<%= rs("nombre") %>" />
            <span class="textfieldRequiredMsg">Se necesita un valor.</span></span></td>
        </tr>
        <tr>
          <td>Clave</td>
          <td><span id="sprytextfield3">
            <label for="text3"></label>
            <span class="textfieldRequiredMsg">Se necesita un valor.</span><span id="sprytextfield8">
            <label for="text3"></label>
            <span class="textfieldRequiredMsg">Se necesita un valor.</span><span id="sprypassword1">
            <label for="password1"></label>
            <input type="password" name="password1" id="password1" />
            <span class="passwordRequiredMsg">Se necesita un valor.</span></span></span></span></td>
        </tr>
        <tr>
          <td>Repetir Clave</td>
          <td><span id="sprytextfield4">
            <label for="text4"></label>
            <span class="textfieldRequiredMsg">Se necesita un valor.</span><span id="spryconfirm1">
            <label for="text4"></label>
            <span class="confirmRequiredMsg">Se necesita un valor.</span><span class="confirmInvalidMsg">Los valores no coinciden.</span></span><span id="spryconfirm2">
            <label for="password2"></label>
            <input type="password" name="password2" id="password2" />
            <span class="confirmRequiredMsg">Se necesita un valor.</span><span class="confirmInvalidMsg">Los valores no coinciden.</span></span></span></td>
        </tr>
        <tr>
          <td>Correo</td>
          <td><span id="sprytextfield5">
            <label for="correo"></label>
            <input type="text" name="correo" id="correo" value="<%= rs("correo") %>" />
            </span></td>
        </tr>
        <tr>
          <td>Telefono</td>
          <td><span id="sprytextfield6">
            <label for="telefono"></label>
            <input type="text" name="telefono" id="telefono" value="<%= rs("telefono") %>" />
            </span></td>
        </tr>
        <tr>
          <td>Direccion</td>
          <td><span id="sprytextfield7">
            <label for="direccion"></label>
            <input name="direccion" type="text" id="direccion" value="<%= rs("direccion") %>" />
            </span></td>
        </tr>
        <tr>
          <td colspan="2" align="center"><label for="button"></label>
            <input type="submit" name="button" style="width: 100px;height: 30px; background-color:#999; color:#000; border: solid thin #000; font-family:Roboto, 'Roboto Lt', 'Roboto Th', 'Roboto Bk'" id="button" value="Guardar" />
            &nbsp;&nbsp;&nbsp;
            <label for="button2"></label>
            <input name="button2" type="button" id="button2" style="width: 100px;height: 30px; background-color:#999; color:#000; border: solid thin #000; font-family:Roboto, 'Roboto Lt', 'Roboto Th', 'Roboto Bk'" onclick="MM_goToURL('parent','index.asp');return document.MM_returnValue" value="Cancelar" /></td>
          </tr>
      </table>
    </form></td>
  </tr>
</table>
<script type="text/javascript">
<!--
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5");
var sprytextfield6 = new Spry.Widget.ValidationTextField("sprytextfield6");
var sprytextfield7 = new Spry.Widget.ValidationTextField("sprytextfield7");
var sprypassword1 = new Spry.Widget.ValidationPassword("sprypassword1");
var spryconfirm2 = new Spry.Widget.ValidationConfirm("spryconfirm2", "password1");
//-->
</script>
</body>
</html>
