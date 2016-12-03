<%@LANGUAGE="VBSCRIPT" CODEPAGE="65001"%>
<!--#include file="conex.asp"-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Eliminar Categoria</title>
</head>
<body>
<%
	idcategoria = request.QueryString("idcategoria")
	wsql = "select * from categorias where idcategoria=" &idcategoria
	set rs = con.execute(wsql)
%>
<table width="100%" border="0">
	<tr>
		<td><form name="form1" method="post" action="gcategoria.asp">
			<table width="100%" border="0">
				<tr>
					<td align="center" style="font-family:Roboto, 'Roboto Lt', 'Roboto Th', 'Roboto Bk'">¿Desea Eliminar la cateogria '<strong><%= rs("nombre") %></strong>'?. Incluye los siguientes productos:
					<input type="hidden" name="accion" id="accion"  value="Eliminar"/>
            		<input type="hidden" name="idcategoria" id="idcategoria" value="<%= idcategoria %>"/>
					<br />
					</td>
				</tr>
				<%
				wsql = "select * from producto where idcategoria=" &idcategoria
				set rs = con.execute(wsql)
				while rs.eof = false
				%>
				<tr>
					<td align="left" style="font-family:Roboto, 'Roboto Lt', 'Roboto Th', 'Roboto Bk'">
						<em><% =rs("nombre")%></em>
					</td>
				</tr>
				<%
				rs.movenext
				wend
				%>
				<tr>
					<td align="Center" style="font-family:Roboto, 'Roboto Lt', 'Roboto Th', 'Roboto Bk'" bgcolor="#FF0000">
						<strong>Nota:</strong> <em>Al eliminar la categoria tambien se eliminarán los productos asociados a ella.</em>
					</td>
				</tr>
				<tr>
					<td align="center"><input type="submit" style="width: 100px;height: 30px; background-color:#999; color:#000; border: solid thin #000; font-family:Roboto, 'Roboto Lt', 'Roboto Th', 'Roboto Bk'" name="button" id="button" value="Si!">&nbsp;&nbsp;
						<input type="button" style="width: 100px;height: 30px; background-color:#999; color:#000; border: solid thin #000; font-family:Roboto, 'Roboto Lt', 'Roboto Th', 'Roboto Bk'" name="button2" id="button2" onClick="window.close()" value="No"></td>
				</tr>
			</table>
		</form></td>
	</tr>
</table>

</body>
</html>
