<%@LANGUAGE="VBSCRIPT" CODEPAGE="65001"%>
<!--#include file="conex.asp"-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Eliminar un Producto</title>
</head>

<body>
<%
	idprod = request.QueryString("idprod")
	wsql = "select * from producto where idproducto=" &idprod
	set rs = con.execute(wsql)
	
%>
<table width="400" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><form id="form1" name="form1" method="post" action="gproducto.asp">
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr align="center">
          <td height="32" style="font-family:Roboto, 'Roboto Lt', 'Roboto Th', 'Roboto Bk'"><strong>Eliminar
            <input type="hidden" name="accion" id="accion"  value="Eliminar"/>
            <input type="hidden" name="idprod" id="idprod" value="<%= idprod %>"/>
          </strong></td>
        </tr>
        <tr>
          <td align="center"><img src="" alt="" width="300" height="300" style="background-color: #0000FF" /></td>
        </tr>
        <tr>
          <td align="center" style="font-family:Roboto, 'Roboto Lt', 'Roboto Th', 'Roboto Bk'"><br />
          	Seguro que desea eliminar este producto:<br />
          	<strong><%= rs("nombre") %></strong></td>
        </tr>
        <tr align="center" valign="middle">
          <td><label>
            <input type="submit" style="width: 100px;height: 30px; background-color:#999; color:#000; border: solid thin #000; font-family:Roboto, 'Roboto Lt', 'Roboto Th', 'Roboto Bk'" name="eliminar" id="eliminar" value="Eliminar" />
          </label>
            <label>
              &nbsp;&nbsp;
              <input name="cancelar" type="button" id="cancelar" style="width: 100px;height: 30px; background-color:#999; color:#000; border: solid thin #000; font-family:Roboto, 'Roboto Lt', 'Roboto Th', 'Roboto Bk'" onclick="window.close()" value="Cancelar" />
            </label></td>
        </tr>
      </table>
    </form></td>
  </tr>
</table>
</body>
</html>
