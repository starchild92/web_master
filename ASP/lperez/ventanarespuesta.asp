<%@LANGUAGE="VBSCRIPT" CODEPAGE="65001"%>
<!--#include file="conex.asp"-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Respuesta</title>
</head>
<%
	idpregunta = request.QueryString("idpregunta")
	wsql = "select nombreusuario from preguntas where idpregunta=" &idpregunta
	set rs = con.execute(wsql)
%>
<body style="font-family:Roboto, 'Roboto Lt', 'Roboto Th', 'Roboto Bk'">
<table width="400" border="0" align="center">
	<tr>
		<td><form id="form1" name="form1" method="post" action="enviarrespuesta.asp">
			<table width="100%" border="0">
				<tr>
					<td height="32" bgcolor="#999999"><strong>Respuesta a:</strong> <em><%= rs("nombreusuario") %></em></td>
				</tr>
				<tr>
					<td align="center"><label for="respons"></label>
						<textarea name="respons" cols="50" rows="4" id="respons"></textarea></td>
				</tr>
				<tr>
					<td align="center"><input type="submit" style="width: 100px;height: 30px; background-color:#999; color:#000; border: solid thin #000; font-family:Roboto, 'Roboto Lt', 'Roboto Th', 'Roboto Bk'" name="enviar" id="enviar" value="Enviar" />
						<input type="hidden" name="idpregun" id="idpregun" value="<% =idpregunta%>" /></td>
				</tr>
			</table>
		</form></td>
	</tr>
</table>
</body>
</html>
