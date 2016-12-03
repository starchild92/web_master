<!--#include file="conex.asp"-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Categorias</title>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
</script>
</head>

<body background="ima/tablebackground.png">
<%
	'insertar
	genero = ""
	idcategoria = ""
	nb = "Añadir"
	id=request.QueryString("id")
	if id<>"" then
		'entra cuando quiero editar una categoria
		nb = "Modificar"
		wsql = "select * from categorias where idcategoria = " &id
		set rs = con.execute(wsql)
			idcategoria = rs("idcategoria")
			genero = rs("nombre")
	end if
%>
<table width="495" border="0" align="center" background="ima/tablebackground.png">
	<tr valign="top">
		<td><form id="form1" name="form1" method="post" action="gcategoria.asp">
			<table width="100%" border="0">
				<tr>
					<td colspan="2" align="center" valign="middle" style="font-family:Roboto, 'Roboto Lt', 'Roboto Th', 'Roboto Bk'"><img src="ima/anadircategoria.png" width="259" height="55" /></td>
				</tr>
				<tr>
					<td height="45" colspan="2" align="center" valign="middle"><span id="prod_cantidad">
						<label for="prod_categoria"></label>
						<input type="text" name="prod_categoria" id="prod_categoria" value="<%= genero %>" />
						<input type="hidden" name="accion" id="accion" value="<%= nb%>"/>
						<input type="hidden" name="idcategoria" id="idcategoria" value="<%= idcategoria%>" />
					</span></td>
				</tr>
				<tr>
					<td width="46" align="center" valign="middle"><input type="submit" style="width: 100px;height: 30px; background-color:#999; color:#000; border: solid thin #000; font-family:Roboto, 'Roboto Lt', 'Roboto Th', 'Roboto Bk'" name="añadir" id="añadir" value="<%= nb%>" /></td>
					<td width="46" align="center" valign="middle"><input type="reset" style="width: 100px;height: 30px; background-color:#999; color:#000; border: solid thin #000; font-family:Roboto, 'Roboto Lt', 'Roboto Th', 'Roboto Bk'" name="resformcat" id="resformcat" value="Restablecer" /></td>
				</tr>
			</table>
		</form></td>
		<td><table width="100%" border="0">
			<tr>
				<td colspan="2"><img src="ima/listacategorias.png" width="259" height="55" /></td>
			</tr>
			<% 
				wsql = "select * from categorias ORDER BY nombre"
				set rs=con.execute(wsql)
				while rs.eof = false
			%>
			<tr>
				<td width="70%" style="font-family:Roboto, 'Roboto Lt', 'Roboto Th', 'Roboto Bk'"><% =rs("nombre")%></td>
				<td width="30%" align="center"><a href="index.asp?pag=categorias&id=<% =rs("idcategoria")%>"><img src="ima/Modify.png" width="24" height="24" /></a><img src="ima/delete.png" width="24" height="24" onclick="MM_openBrWindow('ecategoria.asp?idcategoria=<% =rs("idcategoria")%>','','width=300,height=200')" /></td>
			</tr>
			<%
				rs.movenext
				wend
			%>
			<tr>
				<td colspan="2" align="center" style="font-family:Roboto, 'Roboto Lt', 'Roboto Th', 'Roboto Bk'"><strong>Total:</strong></td>
			</tr>
		</table></td>
	</tr>
</table>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("prod_cantidad");
</script>
</body>
</html>
