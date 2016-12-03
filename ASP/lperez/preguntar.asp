<%@LANGUAGE="VBSCRIPT" CODEPAGE="65001"%>
<!--#include file="conex.asp"-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hacer Pregunta</title>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
<!--
function MM_callJS(jsStr) { //v2.0
  return eval(jsStr)
}
//-->
</script>
</head>
<body>
<table width="358" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr align="center" valign="middle">
    <td width="367"><form id="form1" name="form1" method="post" action="enviarpregunta.asp">
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
	  	<tr>
			<td style="font-family:Roboto, 'Roboto Lt', 'Roboto Th', 'Roboto Bk'; font-size:16px">
				<% login = session("login")
				wsql = "select * from usuarios where idusuario=" &login
				set rs = con.execute(wsql)
					nombre = rs("nombre")
					response.Write(nombre)
				%>, Fecha: 
				<%
					response.Write(date)
				%>
			</td>
		</tr>
		<tr>
          <td width="360" height="31" align="center" valign="middle" bgcolor="#999999" style="font-family:Roboto, 'Roboto Lt', 'Roboto Th', 'Roboto Bk'; font-size: 16px;"><strong>PREGUNTAR
          </strong> <input type="hidden" name="idproducto" id="idproducto" value="<%=session("idprod")%>" /></td>
        </tr>
        <tr>
          <td height="102" align="center"><span id="sprytextfield1">
            <label for="pregunta"></label>
            <textarea name="pregunta" cols="40" rows="5" id="pregunta"></textarea>
            <span class="textfieldRequiredMsg">Se necesita un valor.</span></span></td>
        </tr>
        <tr>
          <td align="center"><p>
          	<label for="button"></label>
          	<input type="submit" style="width: 100px;height: 30px; background-color:#999; color:#000; border: solid thin #000; font-family:Roboto, 'Roboto Lt', 'Roboto Th', 'Roboto Bk'" name="button" id="button" value="Enviar" />
          	<label for="button2"></label>
          	&nbsp;&nbsp;&nbsp;
          	<input name="button2" type="reset" style="width: 100px;height: 30px; background-color:#999; color:#000; border: solid thin #000; font-family:Roboto, 'Roboto Lt', 'Roboto Th', 'Roboto Bk'" id="button2" onclick="MM_callJS('window.close()')" value="Cancelar" />
			</td>
        </tr>
      </table>
    </form></td>
  </tr>
</table>
<script type="text/javascript">
<!--
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
//-->
</script>
</body>
</html>
