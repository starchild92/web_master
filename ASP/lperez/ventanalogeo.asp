<%@LANGUAGE="VBSCRIPT" CODEPAGE="65001"%>
<!--#include file="conex.asp"-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Entrar</title>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationPassword.js" type="text/javascript"></script>
<script type="text/javascript">
function MM_goToURL() { //v3.0
  var i, args=MM_goToURL.arguments; document.MM_returnValue = false;
  for (i=0; i<(args.length-1); i+=2) eval(args[i]+".location='"+args[i+1]+"'");
}
</script>

<% session("preguntar") = "si" 
preguntar = "si"
%>

<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css" />
</head>
<body>
<form id="form1" name="form1" method="post" action="validar.asp">
	<table width="379" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr align="center">
			<td colspan="2"><img src="ima/Ingresar.png" width="220" height="32" /></td>
		</tr>
		<tr>
			<td height="32" align="center" style="font-family:Roboto, 'Roboto Lt', 'Roboto Th', 'Roboto Bk'; font-size: 14px;"><strong>Login</strong></td>
			<td><span id="sprytextfield1">
				<label for="login"></label>
				<input type="text" name="login" id="login" />
			</span></td>
		</tr>
		<tr>
			<td height="32" align="center" style="font-family:Roboto, 'Roboto Lt', 'Roboto Th', 'Roboto Bk'; font-size: 14px;"><strong>Password</strong></td>
				<td><span id="sprypassword1">
					<label for="password1"></label>
					<input type="password" name="password1" id="password1" />
				</span></td>
		</tr>
		<tr>
			<td height="32" colspan="2" align="center">
				<label>
					<input type="submit" style="width: 80px;height: 25px; background-color:#999; color:#000; border: solid thin #000; font-family:Roboto, 'Roboto Lt', 'Roboto Th', 'Roboto Bk'" name="Entrar" id="Entrar" value="Ingresar" />
					&nbsp;
				</label>
			</td>
		</tr>
		<tr>
			<td colspan="2" style="font-family:Roboto, 'Roboto Lt', 'Roboto Th', 'Roboto Bk'" align="center"></td>
		</tr>
		<tr align="center">
			<td height="50" colspan="2" align="center" valign="middle" bgcolor="#000000" style="font-family:Roboto, 'Roboto Lt', 'Roboto Th', 'Roboto Bk'; font-size: 14px; color:#FFF"><p>Para realizar preguntas al vendedor, debe estar resgistrado.</p>
				<p>Si está registrado, ingrese su usuario y clave.<br />
					Si lo prefiere puede <strong>registrarse</strong> en la página principal.<br />
			</p></td>
		</tr>
	</table>
</form>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprypassword1 = new Spry.Widget.ValidationPassword("sprypassword1");
</script>
</body>
</html>
