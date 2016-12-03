<!--#include file="conex.asp"-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="css/menu.css" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<script type="text/javascript">
function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
</script>
</head>
<%
	login = session("login")
	wsql = "select COUNT(*) from preguntas where idvendedor=" &login &" and respuesta = 0"
	set rs = con.execute(wsql)
	wsql = "select COUNT(*) from preguntas where idvendedor=" &login
	set rd = con.execute(wsql)
%>
<body>
<img src="ima/Mensajes.jpg" width="990" height="80" />
<table width="990" border="0">
	<tr>
		<td width="200" valign="top">
			<ul class="menu">
			  <li><a href="#" class="active"><span>Mensajes (<% =rd(0)%>)</span></a></li>
			  <li><a href="responder.asp?accion=marcartodoleido" class="menu"><span>Marcar Todos Como Leido</span></a></li>
			  <li><a href="responder.asp?accion=marcartodonoleido" class="menu"><span>Marcar Todos NO Leido</span></a></li>
			  <li><a href="responder.asp?accion=eliminartodos" class="menu"><span>Eliminar Todos</span></a></li>
			</ul>
		</td>
		<td>
		<table width="100%" border="0" style="font-family:Roboto, 'Roboto Lt', 'Roboto Th', 'Roboto Bk'">
			<tr valign="top">
				<td colspan="4" align="center" height="30" bgcolor="#FFFF66" style="font-size:18px; color:#000">Tiene <%= rs(0) %> preguntas sin leer.</td>
			</tr>
			<%
				login = session("login")
				wsql = "select * from preguntas where idvendedor=" &login
				set rs = con.execute(wsql)
				
				while rs.eof = false
			%>
			<tr style="font-size:16px">
				<td width="28%" bgcolor="#CCCCCC"><strong>Hecha por</strong>: <%=rs("nombreusuario") %></td>
				<td width="20%" bgcolor="#999999"><strong>Fecha</strong>: <%= rs("fechapregunta") %></td>
				<td width="41%" bgcolor="#666666" style="color:#FFF"><strong>Estatus</strong>:
		<em><% if rs("respuesta")=0 then response.Write("Sin Leer") else response.Write("Leido")%></em></td>
			</tr>
			<tr style="font-size:16px">
				<%
					wsql = "select nombre from producto where idproducto=" &rs("idproducto")
					set rt = con.execute(wsql)
				%>
				<td colspan="2" bgcolor="#333333" style="color:#FFF"><strong> Hecha sobre el Producto</strong>:
					<% =rt("nombre") %></td>
				<td bgcolor="#333333" align="center" style="color:#FFF"><a href="responder.asp?accion=marcarleido&idpregunta=<% =rs("idpregunta")%>"><img src="ima/check.png" width="28" height="28" /></a>&nbsp;&nbsp;<a href="#"><img src="ima/respondermensaje.png" width="28" height="28" onclick="MM_openBrWindow('ventanarespuesta.asp?idpregunta=<% =rs("idpregunta")%>','','width=450,height=200')" /></a>&nbsp;&nbsp;<a href="responder.asp?accion=eliminarmsj&idpregunta=<% =rs("idpregunta")%>"><img src="ima/eliminarmensaje.png" width="28" height="28" /></a>&nbsp;&nbsp;<a href="responder.asp?accion=marcarnoleido&idpregunta=<% =rs("idpregunta")%>"><img src="ima/noleido.png" width="28" height="28" /></a></td>
			</tr>
			<tr bgcolor="#FFFFCC">
				<td height="72" colspan="3" align="left" valign="top" style="font-size:14px"><em><%= rs("pregunta") %></em></td>
			</tr>
			<%
				rs.movenext
				wend
			%>
		</table>
		</td>
	</tr>
</table>



</body>
</html>
