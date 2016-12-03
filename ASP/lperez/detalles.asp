<!--#include file="conex.asp"-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<!-- Add jQuery library -->
    <% jque = request.QueryString("jque")
		if jque="yes" then
	%>
		<script type="text/javascript" src="fancyBox/lib/jquery-1.10.1.min.js"></script>
    <% end if %>
	<!-- Add mousewheel plugin (this is optional) -->
	<script type="text/javascript" src="fancyBox/lib/jquery.mousewheel-3.0.6.pack.js"></script>

	<!-- Add fancyBox main JS and CSS files -->
	<script type="text/javascript" src="fancyBox/source/jquery.fancybox.js?v=2.1.5"></script>
	<link rel="stylesheet" type="text/css" href="fancyBox/source/jquery.fancybox.css?v=2.1.5" media="screen" />

	<!-- Add Button helper (this is optional) -->
	<link rel="stylesheet" type="text/css" href="fancyBox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" />
	<script type="text/javascript" src="fancyBox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>

	<!-- Add Thumbnail helper (this is optional) -->
	<link rel="stylesheet" type="text/css" href="fancyBox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />
	<script type="text/javascript" src="fancyBox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

	<!-- Add Media helper (this is optional) -->
	<script type="text/javascript" src="fancyBox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

<script type="text/javascript">
<!--
$(document).ready(function() {
			/*
			 *  Simple image gallery. Uses default settings
			 */

			$('.fancybox').fancybox();

			/*
			 *  Different effects
			 */

			// Change title type, overlay closing speed
			$(".fancybox-effects-a").fancybox({
				helpers: {
					title : {
						type : 'outside'
					},
					overlay : {
						speedOut : 0
					}
				}
			});

			/*
			 *  Button helper. Disable animations, hide close button, change title type and content
			 */

			$('.fancybox-buttons').fancybox({
				openEffect  : 'none',
				closeEffect : 'none',

				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,

				helpers : {
					title : {
						type : 'inside'
					},
					buttons	: {}
				},

				afterLoad : function() {
					this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
				}
			});


			/*
			 *  Thumbnail helper. Disable animations, hide close button, arrows and slide to next gallery item if clicked
			 */

			$('.fancybox-thumbs').fancybox({
				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,
				arrows    : false,
				nextClick : true,

				helpers : {
					thumbs : {
						width  : 50,
						height : 50
					}
				}
			});

			/*
			 *  Media helper. Group items, disable animations, hide arrows, enable media and button helpers.
			*/
			$('.fancybox-media')
				.attr('rel', 'media-gallery')
				.fancybox({
					openEffect : 'none',
					closeEffect : 'none',
					prevEffect : 'none',
					nextEffect : 'none',

					arrows : false,
					helpers : {
						media : {},
						buttons : {}
					}
				});

			/*
			 *  Open manually
			 */

			$("#fancybox-manual-a").click(function() {
				$.fancybox.open('1_b.jpg');
			});

			$("#fancybox-manual-b").click(function() {
				$.fancybox.open({
					href : 'iframe.html',
					type : 'iframe',
					padding : 5
				});
			});

			$("#fancybox-manual-c").click(function() {
				$.fancybox.open([
					{
						href : '1_b.jpg',
						title : 'My title'
					}, {
						href : '2_b.jpg',
						title : '2nd title'
					}, {
						href : '3_b.jpg'
					}
				], {
					helpers : {
						thumbs : {
							width: 75,
							height: 50
						}
					}
				});
			});


		});

function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
function MM_goToURL() { //v3.0
  var i, args=MM_goToURL.arguments; document.MM_returnValue = false;
  for (i=0; i<(args.length-1); i+=2) eval(args[i]+".location='"+args[i+1]+"'");
}
//-->
</script>
<title>Información del Producto</title>
</head>
<body>
<%
	id = request.QueryString("id")
	wsql = "select * from producto where idproducto=" &id
	set rs = con.execute(wsql)
	idprod = rs("idproducto")
%>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" style="font-family:Roboto, 'Roboto Lt', 'Roboto Th', 'Roboto Bk'">
  <tr>
    <td height="30" colspan="2" align="left" bgcolor="#999999" style="font-family:Roboto, 'Roboto Lt', 'Roboto Th', 'Roboto Bk'; font-size: 18px;"><strong>&nbsp;Detalles del Producto</strong>
    </td>
  </tr>
  <tr>
    <td height="200" colspan="2" align="center"><a class="fancybox" href="ima/prod/IMG<%= rs("idproducto") %>1.jpg" data-fancybox-group="gallery" title="<%= rs("nombre") %>"><img style="border-radius:10px" src="ima/prod/IMG<%= rs("idproducto") %>1.jpg" width="170" height="170" /></a>
	<a class="fancybox" href="ima/prod/IMG<%= rs("idproducto") %>2.jpg" data-fancybox-group="gallery" title="<%= rs("nombre") %>"><img style="border-radius:10px" src="ima/prod/IMG<%= rs("idproducto") %>2.jpg" width="170" height="170" /></a>
	<a class="fancybox" href="ima/prod/IMG<%= rs("idproducto") %>3.jpg" data-fancybox-group="gallery" title="<%= rs("nombre") %>"><img style="border-radius:10px" src="ima/prod/IMG<%= rs("idproducto") %>3.jpg" width="170" height="170" /></a></td>
  </tr>
  <tr>
    <td width="419"><strong>Nombre:</strong></td>
    <td width="737"><% =rs("nombre")%>&nbsp;</td>
  </tr>
  <tr>
  <%
  	
  	wsql = "select * from categorias where idcategoria=" &rs("idcategoria")
	set rs2 = con.execute(wsql)
  %>
    <td><strong>Categoria:</strong></td>
    <td><% =rs2("nombre")%>&nbsp;</td>
  </tr>
  <tr>
    <td><strong>Cantidad:</strong></td>
    <td><% =rs("cantidad")%> Unidades&nbsp;</td>
  </tr>
  <tr>
    <td><strong>Precio:</strong></td>
    <td><% =rs("precio")%> BsF&nbsp;</td>
  </tr>
  <tr>
    <td align="left" valign="top"><strong>Descripcion:</strong></td>
    <td><% =rs("descripcion")%>&nbsp;</td>
  </tr>
  <tr>
    <td><strong>Estatus Producto:</strong></td>
	<%
		estatus = rs("estatus")
		if estatus = "D" then
			estatus = "Disponible"
		else
			estatus = "No Disponible"
		end if
	%>
    <td><% =estatus %>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" align="left" bgcolor="#999999" height="30" style="font-family:Roboto, 'Roboto Lt', 'Roboto Th', 'Roboto Bk'; font-size: 18px;"><strong>&nbsp;Informacion del Vendedor </strong></td>
  </tr>
  <tr>
  	<% 
		idusuario = rs("idusuario")
		wsql = "select * from usuarios where idusuario =" &idusuario
		set rs = con.execute(wsql)
	 %>
    <td><strong>Nombre Usuario: </strong></td>
    <td><% =rs("nombre")%>&nbsp;</td>
  </tr>
  <tr>
    <td><strong>Correo:</strong></td>
    <td><% =rs("correo")%>&nbsp;</td>
  </tr>
    <tr>
    <td><strong>Telefono:</strong></td>
    <td><% =rs("telefono")%>&nbsp;</td>
  </tr>
	<tr><td>&nbsp;</td></tr>
  <tr>
    <td colspan="2" align="center"><form id="form1" name="form1" method="post" action="">
      <label>
<input type="button" style="width: 100px;height: 30px; background-color:#999; color:#000; border: solid thin #000; font-family:Roboto, 'Roboto Lt', 'Roboto Th', 'Roboto Bk'" name="button2" id="button2" onClick="window.close()" value="Imprimir"></label>
&nbsp;&nbsp;&nbsp;
      <label>
        <input name="button2" type="submit" id="button2" style="width: 100px;height: 30px; background-color:#999; color:#000; border: solid thin #000; font-family:Roboto, 'Roboto Lt', 'Roboto Th', 'Roboto Bk'" onclick="MM_goToURL('parent','index.asp');return document.MM_returnValue"  value="Volver">
        </label>
&nbsp;&nbsp;&nbsp;
      <label>
        <input name="button3" type="submit" id="button3" style="width: 100px;height: 30px; background-color:#CCC; color:#000; border: solid thin #000; font-family:Roboto, 'Roboto Lt', 'Roboto Th', 'Roboto Bk'" onclick="MM_openBrWindow('gpreguntar.asp?idprod=<% =idprod %>','','width=100,height=100')" value="Mensaje">
        </label>
    </form>
	
	</td>
  </tr>
</table>

<br />
<table width="100%" border="0" style="font-family:Roboto, 'Roboto Lt', 'Roboto Th', 'Roboto Bk'; font-size: 12px;">
	<tr>
		<td height="30" colspan="2" align="left" bgcolor="#999999" style="font-size:18px"><strong>&nbsp;Mensajes de los Usuarios</strong></td>
	</tr>
	<% 
		wsql = "select * from preguntas where idproducto=" &id
		set rs = con.execute(wsql)
		if rs.eof <> true then
		while rs.eof <> true
	%>
	<tr>
		<td bgcolor="#8FB8B7"><em>Realizada por:</em> <%= rs("nombreusuario") %></td>
		<td bgcolor="#8FB8B7"><em>Fecha:</em> <%= rs("fechapregunta") %></td>
  </tr>
	<tr>
		<td><%= rs("pregunta") %></td>
		<% 
	resp = rs("respuesta")
	if resp=true then %>
		<td align="left" bgcolor="#CCCCCC" style="color:#333"><em><strong>Respuesta</strong></em>: <%= rs("response") %></td>
	<% end if%>
	</tr>
	<tr><td><br /></td></tr>
<% rs.movenext
	wend
	else %>
	<tr>
		<td colspan="2" style="font-size: 16px;">Nadie ha realizado preguntas sobre este producto.</td>
	</tr>
	<% end if %>
</table>


</body>
</html>
