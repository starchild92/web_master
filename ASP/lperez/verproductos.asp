<!--#include file="conex.asp"-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<!-- Add jQuery library -->
	<!--<script type="text/javascript" src="fancyBox/lib/jquery-1.10.1.min.js"></script>-->
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
//-->
</script>
<title>Ver Productos</title>
</head>

<body>
<% 
	idc = request.QueryString("idc")
	filtro=""
	if idc <>"" then
		filtro = " where idcategoria=" &idc
	end if
	buscar = request.Form("buscar")
	if buscar <>"" then
		filtro = " where nombre like '" & buscar&"%'"
	end if
	wsql = "select * from producto" &filtro
	set rs = con.execute(wsql)
%>
<table width="750" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </table>
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
     <% 
	 	cont = 0
		if rs.eof = true and filtro<>"" then
			%><strong><h2 align="center"><% response.Write("No hay nada.") %></h2></strong><%
		end if
		while rs.eof = false
			cont = cont + 1
	 %>
     <td><table width="180" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td height="40" align="center" style="font-family:Roboto, 'Roboto Lt', 'Roboto Th', 'Roboto Bk'; font-size: 12px;"><strong><a href="index.asp?pag=verdetalles&id=<% =rs("idproducto")%>"><% =rs("nombre")%></a></strong></td>
          </tr>
          <tr >
            <td align="center"><spam><img style="border-radius:10px" src="ima/prod/IMG<%= rs("idproducto") %>1.jpg" width="180" height="180"/></spam>
				<div style="position: relative;">
				<div class="fancybox"; href="ima/prod/IMG<%= rs("idproducto") %>1.jpg"; data-fancybox-group="gallery"; title="<%= rs("nombre") %>"; style="background-image:url(ima/glow.png); position: absolute; right: 0px; bottom: 0px; width: 180px; height: 180px;"></div>
				</div>
			</td>
          </tr>
          <tr>
            <td height="30" align="center" background="ima/backname.png" style="font-family:Roboto, 'Roboto Lt', 'Roboto Th', 'Roboto Bk'; font-size: 12px;"><strong><%= rs("precio") %></strong> BsF</td>
          </tr>
        </table></td>
        <%
			rs.movenext
			if(cont = 4) then
				response.Write("</tr>")
				cont = 0
			end if
			wend
		%>
  </tr>
</table>
    </td>
  </tr>
</table>
</body>
</html>
