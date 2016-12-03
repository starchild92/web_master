<!--#include file="conex.asp"-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registro de Producto</title>
<link href="SpryAssets/SpryValidationSelect.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<script src="SpryAssets/SpryValidationSelect.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script type="text/javascript">
<!--
function MM_goToURL() { //v3.0
  var i, args=MM_goToURL.arguments; document.MM_returnValue = false;
  for (i=0; i<(args.length-1); i+=2) eval(args[i]+".location='"+args[i+1]+"'");
}
function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
//-->
</script>
<style type="text/css" title="currentStyle">
			@import "DataTables-1.9.4/media/css/demo_page.css";
			@import "DataTables-1.9.4/media/css/demo_table_jui.css";
			@import "DataTables-1.9.4/examples/examples_support/themes/smoothness/jquery-ui-1.8.4.custom.css";
		</style>
		<script type="text/javascript" language="javascript" src="DataTables-1.9.4/media/js/jquery.dataTables.js"></script>
		<script type="text/javascript" charset="utf-8">
			$(document).ready(function() {
				oTable = $('#example').dataTable({
					"bJQueryUI": true,
					"sPaginationType": "full_numbers",
					"oLanguage": {
                	"sUrl": "traduccion.html"}
				});
			} );
		</script>
</head>

<body background="ima/tablebackground.png"><%
	'insertar
	genero = ""
	nombre = ""
	cantidad = ""
	precio = ""
	descripcion = ""
	estatus = ""
	nb = "Guardar"
	id=request.QueryString("id")
	if id<>"" then
		'entra cuando quiero editar un producto
		nb = "Modificar"
		wsql = "select * from producto where idproducto = " &id
		set rs = con.execute(wsql)
			genero = rs("idcategoria")
			nombre = rs("nombre")
			cantidad = rs("cantidad")
			precio = rs("precio")
			descripcion = rs("descripcion")
			estatus = rs("estatus")
			idprod = rs("idproducto")
	end if
%>

<table width="990" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><form id="form1" name="form1" method="post" action="gproducto.asp">
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td height="40" colspan="4" align="center" ><img name="Info_Producto" src="ima/Info_Producto.jpg" width="990" height="55" border="0" id="Info_Producto" alt="" /></td>
          </tr>
        <tr>
          <td width="248" height="32" align="center" style="font-family:Roboto, 'Roboto Lt', 'Roboto Th', 'Roboto Bk'"><strong>Genero</strong></td>
          <td width="248" height="32" align="left"><span id="spryselect1">
            <label>
              <select name="prod_categoria" id="prod_categoria">
                <option value="-1">Seleccione una categoria</option>
               
                <% 
				wsql = "select * from categorias ORDER BY nombre"
				set rs=con.execute(wsql)
				while rs.eof = false
				%>
                  <option value="<% =rs("idcategoria")%>" <% if rs("idcategoria")=genero then %>selected="selected"<% end if  %>><% =rs("nombre") %></option>
                <% 
				rs.movenext
				wend
				 %>
              </select>
            </label>
            </span>
            <input type="hidden" name="accion" id="accion"  value="<%= nb %>"/>
            <input type="hidden" name="idprod" id="idprod"  value="<%= idprod %>"/></td>
          <td width="248" align="center"><strong><span style="font-family:Roboto, 'Roboto Lt', 'Roboto Th', 'Roboto Bk'">Artista - Album</span></strong></td>
          <td width="246" align="left"><span id="prod_nombre">
            <label>
              <input name="prod_nombre" type="text" id="prod_nombre"  value="<%= nombre %>" maxlength="50"/>
            </label>
            </span></td>
        </tr>
        <tr>
          <td height="32" align="center" style="font-family:Roboto, 'Roboto Lt', 'Roboto Th', 'Roboto Bk'"><strong>Cantidad</strong></td>
          <td height="32" align="left"><span id="prod_cantidad">
            <label for="prod_cantidad"></label>
            <input type="text" name="prod_cantidad" id="prod_cantidad"  value="<%= cantidad %>"/>
            </span></td>
          <td height="32" align="center"><strong><span style="font-family:Roboto, 'Roboto Lt', 'Roboto Th', 'Roboto Bk'">Precio</span></strong></td>
          <td height="32" align="left"><span id="prod_precio">
            <label>
              <input type="text" name="prod_precio" id="prod_precio" value="<%= precio %>" />
            </label>
            </span></td>
        </tr>
        <tr>
          <td height="32" align="center" style="font-family:Roboto, 'Roboto Lt', 'Roboto Th', 'Roboto Bk'"><strong>Descripción</strong></td>
          <td height="32" align="left"><span id="prod_descripcion">
            <label>
              <input name="prod_descripcion" type="text" id="prod_descripcion" value="<%= descripcion %>" />
            </label>
            </span></td>
          <td height="32" align="center"><strong><span style="font-family:Roboto, 'Roboto Lt', 'Roboto Th', 'Roboto Bk'">Estatus</span></strong></td>
          <td height="32" align="left"><span id="spryselect2">
          	<label for="prod_estatus"></label>
          	<select name="prod_estatus" id="prod_estatus">
          		<option value="-1">Seleccione una Opcion</option>
				<option value="D" <% if estatus = "D" then %> selected="selected"<% end if %>>Disponible</option>
				<option value="A" <% if estatus = "A" then %>selected="selected"<% end if %>>Agotado</option>
          		</select>
          	</span></td>
        </tr>
		<tr>
			<td><br /></td>
		</tr>
        <tr>
          <td height="32" colspan="4" align="center"><label>
            <input type="submit" style="width: 100px;height: 30px; background-color:#999; color:#000; border: solid thin #000; font-family:Roboto, 'Roboto Lt', 'Roboto Th', 'Roboto Bk'" name="guardar" id="guardar" value="<% =nb %>" />
            </label>            <label>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <% if nb = "Guardar" then %>
              <input type="reset" style="width: 100px;height: 30px; background-color:#999; color:#000; border: solid thin #000; font-family:Roboto, 'Roboto Lt', 'Roboto Th', 'Roboto Bk'" name="limpiar" id="limpiar" value="Limpiar" />
              <% end if %>
              <% if nb="Modificar" then %>
              <input name="button" type="submit" id="button" style="width: 100px;height: 30px; background-color:#999; color:#000; border: solid thin #000; font-family:Roboto, 'Roboto Lt', 'Roboto Th', 'Roboto Bk'" onclick="MM_goToURL('parent','index.asp?pag=fproducto');return document.MM_returnValue" value="Cancelar" />
              <% end if %>
            </label></td>
          </tr>
      </table>
    </form></td>
  </tr>
</table>
<p></p>
<table width="990" border="0" align="center" cellpadding="0" cellspacing="0" class="display" id="example">
<thead>
  <tr>
    <td width="60" height="30" align="center" style="font-family:Roboto, 'Roboto Lt', 'Roboto Th', 'Roboto Bk'"><strong>Imagen</strong></td>
    <td width="552" height="30" align="center" style="font-family:Roboto, 'Roboto Lt', 'Roboto Th', 'Roboto Bk'"><strong>Nombre del Prodcuto</strong></td>
    <td width="137" height="30" align="center" style="font-family:Roboto, 'Roboto Lt', 'Roboto Th', 'Roboto Bk'"><strong>Precio</strong></td>
    <td width="126" height="30" align="center" style="font-family:Roboto, 'Roboto Lt', 'Roboto Th', 'Roboto Bk'"><strong>Cantidad</strong></td>
    <td width="108" height="30" align="center" style="font-family:Roboto, 'Roboto Lt', 'Roboto Th', 'Roboto Bk'"><strong>Accion</strong></td>
  </tr>
</thead>
<tbody>
  <%
  	login = session("login")
  	wsql = "select * from producto where idusuario = "&login
	wsql2 = " ORDER BY nombre"
	wsql = wsql & wsql2
	set rs = con.execute(wsql)
	contador = 0
		while rs.EOF = false
		contador = contador + 1
  %>

      <tr class="gradeB">
        <td align="center"><div style="padding:3px; background-color:#FFF"><img src="ima/prod/IMG<%= rs("idproducto") %>1.jpg" width="60" height="60" /></div></td>
        <td align="center" style="font-family:Roboto, 'Roboto Lt', 'Roboto Th', 'Roboto Bk'"><% =rs("nombre")%></td>
        <td align="center" style="font-family:Roboto, 'Roboto Lt', 'Roboto Th', 'Roboto Bk'"><% =rs("precio")%> <strong>Bs.F</strong></td>
        <td align="center" style="font-family:Roboto, 'Roboto Lt', 'Roboto Th', 'Roboto Bk'"><% =rs("cantidad")%> <em>unid.</em></td>
        <td align="center" valign="middle"><a href="index.asp?pag=fproducto&id=<% =rs("idproducto")%>"><img src="ima/Modify.png" alt="" width="24" height="24" /></a><a href="#"><img src="ima/delete.png" width="24" height="24" onclick="MM_openBrWindow('eproducto.asp?idprod=<% =rs("idproducto")%>','','width=400,height=450')" /></a><a href="#"><img src="ima/Update (2).png" width="24" height="24" onclick="MM_openBrWindow('ffotos.asp?idp=<% =rs("idproducto") %>','Fu','width=460,height=250')"  /></a></td>
      </tr>
  <%
  	rs.movenext
	wend
  %>
  </tbody>
</table>
<script type="text/javascript">
<!--
var spryselect1 = new Spry.Widget.ValidationSelect("spryselect1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("prod_nombre", "none");
var sprytextfield3 = new Spry.Widget.ValidationTextField("prod_descripcion");
var sprytextfield4 = new Spry.Widget.ValidationTextField("prod_precio", "currency", {format:"dot_comma"});
var sprytextfield6 = new Spry.Widget.ValidationTextField("prod_cantidad", "integer");
var spryselect2 = new Spry.Widget.ValidationSelect("spryselect2");
//-->
</script>
</body>
</html>