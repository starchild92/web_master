<%@LANGUAGE="VBSCRIPT" CODEPAGE="65001"%>
<!--#include file="conex.asp"-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="css/ccsmenu2.css" type="text/css" />
    <title>Desarrollado por Luis Pérez (@lapv20)</title>
<!--Esto es un comentario en HTML/ Seccion para CCS-->
<!--<link rel="stylesheet" href="nivo-slider/themes/default/default.css" type="text/css" media="screen" />
<link rel="stylesheet" href="nivo-slider/themes/light/light.css" type="text/css" media="screen" />
<link rel="stylesheet" href="nivo-slider/themes/dark/dark.css" type="text/css" media="screen" />-->
    <link rel="stylesheet" href="nivo-slider/themes/bar/bar.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="nivo-slider/nivo-slider.css" type="text/css" media="screen" />
<!--<link rel="stylesheet" href="nivo-slider/demo/style.css" type="text/css" media="screen" />-->
	    
	<script type="text/javascript" src="nivo-slider/demo/scripts/jquery-1.9.0.min.js"></script>
    <script type="text/javascript" src="nivo-slider/jquery.nivo.slider.js"></script>
    <script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
    <script src="SpryAssets/SpryValidationPassword.js" type="text/javascript"></script>
    <script type="text/javascript">
    $(window).load(function() {
        //$('#slider').nivoSlider();
        $('#slider').nivoSlider({
        effect: 'random',
        slices: 15,
        boxCols: 8,
        boxRows: 4,
        animSpeed: 500,
        pauseTime: 3000,
        startSlide: 0,
        directionNav: false,
        controlNav: false,
        controlNavThumbs: false,
        pauseOnHover: true,
        manualAdvance: false,
        prevText: 'Prev',
        nextText: 'Next',
        randomStart: false,
        });
    });
    function MM_goToURL() { //v3.0
      var i, args=MM_goToURL.arguments; document.MM_returnValue = false;
      for (i=0; i<(args.length-1); i+=2) eval(args[i]+".location='"+args[i+1]+"'");
    }
    </script>
	<style type="text/css">
    .slider-wrapper{
        margin:0px;
        width:990px;
        height:220px;
    }
    </style>
    <link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
    <link href="SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css" />
	<!--<meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
	<meta name="author" content="caroufredsel.frebsite.nl" />-->

<!--		<script type="text/javascript" language="javascript" src="carrusel0/jquery.js"></script>
-->		<script type="text/javascript" language="javascript" src="carrusel0/jquery.carouFredSel-5.6.1.js"></script>
	<script type="text/javascript" language="javascript">
			$(function() {

				//	Basic carousel, no options
				$('#foo0').carouFredSel();

				//	Basic carousel + timer
				$('#foo1').carouFredSel({
					auto: {
						pauseOnHover: 'resume',
						onPauseStart: function( percentage, duration ) {
							$(this).trigger( 'configuration', ['width', function( value ) { 
								$('#timer1').stop().animate({
									width: value
								}, {
									duration: duration,
									easing: 'linear'
								});
							}]);
						},
						onPauseEnd: function( percentage, duration ) {
							$('#timer1').stop().width( 0 );
						},
						onPausePause: function( percentage, duration ) {
							$('#timer1').stop();
						}
					}
				});

				//	Scrolled by user interaction
				$('#foo2').carouFredSel({
					prev: '#prev2',
					next: '#next2',
					pagination: "#pager2",
					auto: false
				});

				//	Variable number of visible items with variable sizes
				$('#foo3').carouFredSel({
					width: 360,
					height: 'auto',
					prev: '#prev3',
					next: '#next3',
					auto: false
				});

				//	Fluid layout example 1, resizing the items
				$('#foo4').carouFredSel({
					responsive: true,
					width: '100%',
					scroll: 2,
					items: {
						width: 400,
					//	height: '30%',	//	optionally resize item-height
						visible: {
							min: 2,
							max: 6
						}
					}
				});

				//	Fuild layout example 2, centering the items
				$('#foo5').carouFredSel({
					width: '100%',
					scroll: 2
				});

			});
		</script>
	<style type="text/css" media="all">
			html, body {
				padding: 0;
				margin: 0;
				/* height: 100%; */
			}
			body, div, p {
				font-family: Arial, Helvetica, Verdana;
				color: #333;
			}
			body {
				background-color: #eee;
			}
			h1 {
				font-size: 60px;
			}
			a, a:link, a:active, a:visited {
				color: black;
				text-decoration: underline;
			}
			a:hover {
				color: #9E1F63;
			}
			#intro {
				width: 580px;
				margin: 0 auto;
			}
			.wrapper {
				background-color: white;
				width: 480px;
				margin: 40px auto;
				padding: 50px;
				box-shadow: 0 0 5px #999;
			}
			.list_carousel {
				margin: 0;
				width: 190px;
			}
			.list_carousel ul {
				margin: 0;
				padding: 0;
				list-style: none;
				display: block;
			}
			.list_carousel li {
				font-size: 40px;
				color: #999;
				text-align: center;
				background-color: #eee;
				width: 190px;
				height: 80px;
				padding: 0;
				margin: 0px;
				display: block;
				float: left;
			}
			.list_carousel.responsive {
				width: auto;
				margin-left: 0;
			}
			.clearfix {
				float: none;
				clear: both;
			}
			.prev {
				float: left;
				margin-left: 10px;
			}
			.next {
				float: right;
				margin-right: 10px;
			}
			.pager {
				float: left;
				width: 300px;
				text-align: center;
			}
			.pager a {
				margin: 0 5px;
				text-decoration: none;
			}
			.pager a.selected {
				text-decoration: underline;
			}
			.timer {
				background-color: #999;
				height: 6px;
				width: 0px;
			}
		</style>
</head>

<body background="ima/pagebackground.png">
<div style="margin-top:20px"></div>
<table width="990" border="0" align="center" cellpadding="0" cellspacing="0" background="ima/tablebackground.png">
  <tr>
    <td align="center">
    	<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF">
     		<tr>
                <td width="71%"><img name="logo" src="ima/logo.png" width="800" height="80" border="0" id="logo" alt="" /></td>
                <td width="29%">
					<div class="list_carousel">
						<ul id="foo0">
							<li><a href="javascript:;" onclick="MM_openBrWindow('detalles.asp?id=31&jque=yes','','width=560,height=600')"><img src="ima/ima_carrusel/C311.jpg" width="190" height="80"/></a></li>
							<li><a href="javascript:;" onclick="MM_openBrWindow('detalles.asp?id=27&jque=yes','','width=560,height=600')"><img src="ima/ima_carrusel/C271.jpg" width="190" height="80"/></a></li>
							<li><a href="javascript:;" onclick="MM_openBrWindow('detalles.asp?id=49&jque=yes','','width=560,height=600')"><img src="ima/ima_carrusel/C491.jpg" width="190" height="80"/></a></li>
							<li><a href="javascript:;" onclick="MM_openBrWindow('detalles.asp?id=48&jque=yes','','width=560,height=600')"><img src="ima/ima_carrusel/C481.jpg" width="190" height="80"/></a></li>
						</ul>
					</div>
				</td>
      		</tr>
    	</table>
    </td>
  </tr>
  <tr align="center" valign="middle">
    <td>
		<%
        	'end if
			tipo=session("tipo")
        	if tipo="v" then
        %>
			<!--#include file="menuvendedor.html"-->
			<img src="ima/welcome.png" width="990" height="150" align="middle" />
			<!--Prefiero no hacer lo de verproductos.asp aqui sin validar
				el hecho de que en enviarpregunta.asp hago session.Abandon(),
				lo cual deslogue al usuario y esto se vuelve un sancocho.
			-->
		<%
			else
        %>
			<!--#include file="menuusuario.html"-->
		<%
			end if
        %>
    </td>
  </tr>
	<%
	    if (session("tipo")="") then
    %>
  <tr>
        <td>
            <div id="wrapper">
                <div class="slider-wrapper theme-bar">
                    <div id="slider" class="nivoSlider">
                        <img src="ima/rotacion.jpg" width="990" height="220" />
                        <img src="ima/rotacion_3.jpg" width="990" height="220" />
                        <img src="ima/rotacion_2.jpg" width="990" height="220" />
                        <img src="ima/rotacion_4.jpg" width="990" height="220" />
                        <img src="ima/rotacion_5.jpg" width="990" height="220" />
                        <img src="ima/rotacion_6.jpg" width="990" height="220" />
                        <img src="ima/rotacion_7.jpg" width="990" height="220" />
                        <img src="ima/rotacion_8.jpg" width="990" height="220" />
                    </div>
                </div>
            </div>
        </td>
    </tr>
	<%
    	end if
    %>
  <tr>
    <td valign="top">
    	<table width="100%" border="0" cellspacing="0" cellpadding="0">
			<%
            if (session("tipo")="") then
            %>
                <tr>
                    <td width="22%" height="100%" valign="top" bgcolor="#FFFFFF">
                        <table width="0%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td align="center">
                                    <form id="form1" name="form1" method="post" action="validar.asp">
                                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                            <tr align="center">
                                                <td colspan="2"><img src="ima/Ingresar.png" width="220" height="32" /></td>
                                            </tr>
                                            <tr>
                                                <td height="32" align="center" style="font-family:Roboto, 'Roboto Lt', 'Roboto Th', 'Roboto Bk'; font-size: 12px;"><strong>Login</strong></td>
                                                <td>
                                                <span id="sprytextfield1"><label>
                                                <input name="login" type="text" id="login" size="16" />
                                                </label></span>
                                                </td>
                                            </tr>
                                            <tr>
                                            <td height="32" align="center" style="font-family:Roboto, 'Roboto Lt', 'Roboto Th', 'Roboto Bk'; font-size: 12px;"><strong>Password</strong></td>
                                            <td><span id="sprytextfield20"><span class="textfieldRequiredMsg">Se necesita un valor.</span></span><span id="sprypassword1">
                                            <label>
                                            <input name="password1" type="password" id="password1" size="16" />
                                            </label>
                                            </span></td>
                                            </tr>
                                            <tr>
                                            <td height="32" colspan="2" align="center"><label>
                                            <input type="submit" style="width: 80px;height: 25px; background-color:#999; color:#000; border: solid thin #000; font-family:Roboto, 'Roboto Lt', 'Roboto Th', 'Roboto Bk'" name="Entrar" id="Entrar" value="Entrar" />
                                            &nbsp;                    </label>                    
                                            <label>
                                            <input name="Registrarse" type="button" id="Registrarse" style="width: 80px;height: 25px; background-color:#999; color:#000; border: solid thin #000; font-family:Roboto, 'Roboto Lt', 'Roboto Th', 'Roboto Bk'" onclick="MM_goToURL('parent','index.asp?pag=fusuario');return document.MM_returnValue" value="Registarse" />
                                            </label></td>
                                            </tr>
                                            <tr>
                                            <td colspan="2" style="font-family:Roboto, 'Roboto Lt', 'Roboto Th', 'Roboto Bk'" align="center">
                                            <%
                                            men=session("men")
                                            response.Write(men)
                                            session("men")=""
                                            %></td>
                                            </tr>
                                        </table>
                                    </form></td>
                            </tr>
                            <tr>
                            <td align="center"><form id="form2" name="form2" method="post" action="index.asp">
                              <table width="100%" border="0" height="80px" cellspacing="0" cellpadding="0" align="center" bgcolor="#FFFFFF">
                                <tr>
                                  <td height="32" align="center" style="font-family:Roboto, 'Roboto Lt', 'Roboto Th', 'Roboto Bk'; font-size: 18px; font-weight: bold;">Buscador</td>
                                </tr>
                                <tr valign="middle">
                                  <td height="30" align="center"><span id="sprytextfield6">
                                    <label>
                                      <input type="text" name="buscar" id="buscar" />
                                    </label>
                                  <label>
                                    <input type="submit" style="width: 40px; height: 21px; background-color:#999; color:#000; border: solid thin #000; font-family:Roboto, 'Roboto Lt', 'Roboto Th', 'Roboto Bk'" name="button3" id="button3" value="OK" />
                                  </label>
                                  </span></td>
                                </tr>
                              </table>
                            </form></td>
                            </tr>
                            <tr>
                            <td height="100%" align="left">
								<div id='cssmenu2'>
									<ul>
										<li><a href="index.asp"><span><strong>Ver todas</strong></span></a></li>
											<!--Esta consulta es asquerosa, no debe ser un PRODUCTO CARTESIANO. Pero el JOIN me da error.-->
											<% 
											wsql = "select DISTINCT (c.idcategoria),c.nombre from categorias c, producto p where c.idcategoria = p.idcategoria ORDER BY c.nombre"
											set rs = con.execute(wsql)
											while rs.eof = false
												response.Write("<li><a href='index.asp?idc="&rs("idcategoria")&"'><span>"&rs("nombre")&"</span></a></li>")
												rs.movenext
												wend
											%>
									</ul>
								</div>
                            </td>
                            </tr>
                        </table>
		    		<%
                        	end if
                        %></td>
                    <td align="center" valign="top">
                    	<%
                            pag=request.QueryString("pag")
                            if pag="fusuario" then
                        %>
                            <!--#include file="formusuarios.asp"-->
                        <%
                            end if
                        %>
                        <%
                            if pag="fproducto" then
                        %>
                            <!--#include file="Productos.asp"-->
                        <%
                            end if
                        %>
						<%
                            if pag="categorias" then
                        %>
                            <!--#include file="categorias.asp"-->
                        <%
                            end if
                        %>
						<%
                            if pag="preguntas" then
                        %>
                            <!--#include file="preguntas.asp"-->
                            
                        <%
							else
                            end if
                        %>
                        <%
                            if pag="modinformacion" then 
                        %>
                            <!--#include file="editarperfil.asp"-->
                        <%
                            end if
                        %>
                        <% if pag ="verdetalles" then %>
                           <!--#include file="detalles.asp"-->
						<% else 
							if pag<>"modinformacion" and pag<>"preguntas" and pag<>"categorias" and pag<>"fproducto" then%>
							<!--#include file="verproductos.asp"-->
                        <% 
							end if
						end if %>
                    </td>
                </tr>
            
        </table>
    </td>
  </tr>
  <tr align="center">
    <td><img name="copyright" src="ima/copyright.png" width="990" height="50" border="0" id="copyright" alt="copyright" /></td>
  </tr>
</table>
<div style="margin-bottom:20px"></div>
    
<script type="text/javascript">
<!--
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield20 = new Spry.Widget.ValidationTextField("sprytextfield20");
var sprypassword1 = new Spry.Widget.ValidationPassword("sprypassword1");
//-->
</script>
</body>
</html>