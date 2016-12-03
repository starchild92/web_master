<?php 
	session_start();
	include("conex.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="es">
<head>
<meta charset="utf-8"/>
<link rel="stylesheet" type="text/css" href="css/cssmenu.css"/>
<link rel="stylesheet" type="text/css" href="css/footerlink.css"/>
<link rel="stylesheet" type="text/css" href="css/boton.css"/>
<link rel="stylesheet" href="nivo-slider/themes/bar/bar.css" type="text/css" media="screen" />
<link rel="stylesheet" href="nivo-slider/nivo-slider.css" type="text/css" media="screen" />    
<script type="text/javascript" src="nivo-slider/demo/scripts/jquery-1.9.0.min.js"></script>
<script type="text/javascript" src="nivo-slider/jquery.nivo.slider.js"></script>

<script type="text/javascript">
$(window).load(function() {
        $('#slider').nivoSlider({
			effect: 'random', slices: 15,
			boxCols: 8, boxRows: 4, animSpeed: 500, pauseTime: 3000,
			startSlide: 0, directionNav: false, controlNav: false,
			controlNavThumbs: false, pauseOnHover: true,
			manualAdvance: false, prevText: 'Prev',
			nextText: 'Next', randomStart: false,
		});
    });
    function MM_goToURL() { //v3.0
      var i, args=MM_goToURL.arguments; document.MM_returnValue = false;
      for (i=0; i<(args.length-1); i+=2) eval(args[i]+".location='"+args[i+1]+"'");
    }
	$(document).ready(function(){
		$("#logwin").click(function(){
			$("#verIniciarSesion").toggle("slow");
		});
	});
	$(document).ready(function(){
		$("#boton_busqueda").click(function(){
			$("#busq").toggle("slow");
		});
	});
	$(document).ready(function(){
		$("#HideTipoProducto").click(function(){
			$("#TipoProducto").toggle("slow");
		});
	});
	$(document).ready(function(){
		$("#HideTipoVenta").click(function(){
			$("#TipoVenta").toggle("slow");
		});
	});
	$(document).ready(function(){
		$("#HideGenero").click(function(){
			$("#Genero").toggle("slow");
		});
	});
function MM_showHideLayers() { //v9.0
  var i,p,v,obj,args=MM_showHideLayers.arguments;
  for (i=0; i<(args.length-2); i+=3) 
  with (document) if (getElementById && ((obj=getElementById(args[i]))!=null)) { v=args[i+2];
    if (obj.style) { obj=obj.style; v=(v=='show')?'visible':(v=='hide')?'hidden':v; }
    obj.visibility=v; }
}
function MM_callJS(jsStr) { //v2.0
  return eval(jsStr)
}
	</script>
	
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
</script>

	<style type="text/css">
    .slider-wrapper{
		margin:0px;
		width:940px;
		height:220px;
		border-radius: 5px;
    }
    </style>
<link rel="stylesheet" type="text/css" href="960grid/nathansmith-960-Grid-System-231ee0c/code/css/reset.css"/>
<link rel="stylesheet" type="text/css" href="960grid/nathansmith-960-Grid-System-231ee0c/code/css/960.css"/>
<link rel="stylesheet" type="text/css" href="960grid/nathansmith-960-Grid-System-231ee0c/code/css/text.css"/>
<link rel="shortcut icon" href="img/loguito.png">
<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>

<title>Online Music Store 2</title>
</head>
<body style="background:#333; background-image:url(img/background.png); background-repeat:no-repeat;">
<div class="container_12" style="margin-top:5px"></div>
<div class="container_12">
	<div class="social icons">
		<div class="twitter"><a href="https://twitter.com/lapv20" title="Twitter de Luis Pérez"><img src="img/twitter1.png" alt="social links"/></a></div>
		<div class="fb"><a href="https://www.facebook.com/lperez17" title="Facebook de Luis Pérez"><img src="img/fb-icon.png" alt="social links"/></a></div>
	</div>
	<div class="grid_12">
		<div id="wrapper">
			<div class="slider-wrapper theme-bar">
				<div id="slider" class="nivoSlider">
					<img src="img/logo_banner.jpg" width="940" height="220" />
					<img src="img/nivo1.jpg" width="940" height="220" />
					<img src="img/nivo4.jpg" width="940" height="220" />
					<img src="img/nivo2.jpg" width="940" height="220" />
					<img src="img/nivo5.jpg" width="940" height="220" />
					<img src="img/nivo3.jpg" width="940" height="220" />
					<img src="img/nivo6.jpg" width="940" height="220" />
					<img src="img/nivo7.jpg" width="940" height="220" />
				</div>
			</div>
		</div>
 	</div>
</div>
<div class="container_12"  style="background: rgba(0, 0, 0, 0.1); -webkit-border-radius: 10px 10px 0px 0px;">
	<div class="grid_12">
		<?php
		if(isset($_SESSION['tipo'])){
			if($_SESSION['tipo']==3){
				/* header('Location: administracion.php?pag=Inicio');
				exit; */
				echo "<script> location.href = 'administracion.php?pag=Inicio';</script>";
				
			}
			if($_SESSION['tipo']==5){
				include("menucomprador.html");
				?>
				<div class="container_12">
					<div style="margin: 5px 5px 5px 5px; height:25px;">
					<form action="" method="get">
						<input style="cursor: pointer; height:25px; float: right; background: rgba(255, 255, 255, 1); color:#000; border-style:hidden; margin-left:2px;" name="buscar" type="button" id="buscar" value="Buscar" />
						<input style=" vertical-align:top; height:23px; border-style:hidden; background: #fff url(img/icn_search.png) no-repeat; float: right; background-position:3px; text-indent:23px;" type="text" placeholder="Búsqueda" size="30px"/>
					</form>
					</div>
					<div style="background: rgba(255, 255, 255, 0.1); margin: 5px 5px 5px 5px;">&nbsp;</div>
				</div>
				<?php
				include("productos.php");
			}else{
				include("menuinicio.html");
			}
		}else{
			include("menuinicio.html");
		}
		?>
	</div>
	<?php if(!isset($_SESSION['logeado'])){ ?>
		<div class="grid_3" style="margin-top:5px;">
		<div class="grid_3" style="background-color:#999;">
		<button id="logwin" class="boton-style4" style="vertical-align:middle; text-align:center; width:100%; font-size:14px; cursor:pointer;"><strong>Iniciar Sesión</strong></button>
		<div id="verIniciarSesion" style="vertical-align:middle; text-align:center;"><?php include("login.php");?></div>
		</div> <!--Login-->
		<div class="grid_3" style="background:#999; margin-top:5px;">
		<button id="boton_busqueda" placeholder="¿Qué estás búscando?" class="boton-style4" style="vertical-align:middle; text-align:center; width:100%; font-size:14px; cursor:pointer;"><strong>Búsqueda</strong></button>
			<table id="busq" width="100%" border="0" cellspacing="0" cellpadding="0">
				<tr>
					<td style="vertical-align:middle; text-align:center; font-size: 14px; ">
						<form action="" method="get">
						<input style="margin: 10px 5px 5px 5%; width:90%; border-style:hidden; height:26px; background: #fff url(img/icn_search.png) no-repeat; background-position:3px center; text-indent:23px;" type="text" placeholder="Que estas buscando?"/>
						<br />
						<input class="boton-style3" style="margin-top:6px;" name="buscar" type="button" id="buscar" value="Buscar" />
						</form>
					</td>
				</tr>
			</table>
		</div> <!--Busqueda-->
		<div class="grid_3" style="margin-top:5px; background: -moz-linear-gradient(top, rgba(151,229,208,1) 18%, rgba(255,255,255,1) 100%);
background: -webkit-gradient(linear, left top, left bottom, color-stop(18%,rgba(151,229,208,1)), color-stop(100%,rgba(255,255,255,1)));">
			<div><button id="HideTipoProducto" class="boton-style5" style="vertical-align:middle; text-align:center; width:100%; font-size:14px; cursor:pointer;"><strong>Tipo de Producto</strong></button>
				<div id="TipoProducto" style="font-size:13.5px; padding: 5px;">
					<?php
						$wsql = "select * from tipo_producto order by nombre";
						$resulttipoprod = mysql_query($wsql,$link);
						while($rowtipoprod = mysql_fetch_array($resulttipoprod)){
							if($rowtipoprod['nombre']!="Sin Especificar"){
						?>
							<div class="selector"><?php echo $rowtipoprod['nombre']; ?></div>
					<?php }} ?>
				</div>
			</div>
			<div style="margin-top:5px;"><button id="HideGenero" class="boton-style5" style="vertical-align:middle; text-align:center; width:100%; font-size:14px; cursor:pointer;"><strong>Géneros</strong></button>
				<div id="Genero" style="font-size:13.5px; padding: 5px;">
					<?php
						$wsql = "select * from genero order by nombre";
						$result = mysql_query($wsql,$link);
						while($rowg = mysql_fetch_array($result)){
							if($rowg['nombre']!="Sin Especificar"){
						?>
							<div class="selector"><?php echo $rowg['nombre']; ?></div>
					<?php }} ?>
				</div>
			</div>
			<div style="margin-top:5px;"><button id="HideTipoVenta" class="boton-style5" style="vertical-align:middle; text-align:center; width:100%; font-size:14px; cursor:pointer;"><strong>Tipo de Venta</strong></button>
				<div id="TipoVenta" style="font-size:13.5px; padding: 5px;">
					<?php
						$wsql = "select * from tipo_venta order by tipo";
						$result = mysql_query($wsql,$link);
						while($rowv = mysql_fetch_array($result)){ 
							if($rowv['tipo']!="Sin Especificar"){
						?>
							<div class="selector"><?php echo $rowv['tipo']; ?></div>
					<?php }} ?>
				</div>
			</div>
		</div> <!--Categorias-->
		</div>
	<?php } ?>
	
	<div class="grid_9" style="margin:5px;">
		<?php
			if(isset($_GET['pag'])){
				if ($_GET['pag']=="registrar_usuario"){
					if(isset($_SESSION['msj_registro'])){ ?>
						<div class="footer-message"><?php echo $_SESSION['msj_registro']; ?></div>
						<?php unset($_SESSION['msj_registro']);
					}else{
						include("registro.php");
					}
				}
		?>		
				<?php if ($_GET['pag']=="contacto"){ ?> 
					<div style="padding: 10px; background: rgba(255, 255, 255, 0.1); width: 690px; text-align:center; float:right; elevation:lower;">
					<iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fjalee.com.ve%2Fluisperez%2Findex.php&amp;width=450&amp;height=80&amp;colorscheme=light&amp;layout=standard&amp;action=like&amp;show_faces=true&amp;send=true" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:520px; height:60px; background: rgba(225, 225, 225, 0.7); margin-bottom:10px; border-radius: 4px;" allowTransparency="true"></iframe>
					</div>
					<div style="padding: 10px; margin-top:5px; background: rgba(255, 255, 255, 0.1); width: 690px; text-align:center; float:right; elevation:lower;">
						<div>
						<a class="twitter-timeline" href="https://twitter.com/lapv20" data-widget-id="373835581525983232">Tweets por @lapv20</a>
						</div>
					</div>
		<?php } ?>
			
			<?php if ($_GET['pag']=="noticias"){ ?> 
			<div id="Informacion" class="info-box">
				<div style="float:right;">
					<input class="boton-style2" name="Ocultar" type="button" onclick="MM_showHideLayers('Informacion','','hide')" value="Ocultar" />
				</div>
				<strong>Esto es información de la pagina.</strong>
				<p>Ok, No te emociones mucho. Esta página es un simulacro de una tienda en linea, la verdad es que puedes hacer muchas cosas exepto la que realmente importa que es en definitiva comprar. Sin embargo, puedes navegar por todo el sitio como gustes, no repares en enviar comentarios sobre el sitio a Luis Pérez en la siguiente dirección de correo electronico lapv1992@gmail.com, puede que te responda.</p> 
				<em>&quot;En cuanto tus ojos golpen con su profundiad bajo el avismo fiel de mi mirada, sabrás que siempre he tenido estos sentimientos debastadores por ti.</em>&quot;
			</div>
			<?php } ?>
			<?php if ($_GET['pag']=="productos"){ ?>
				<div style="background: rgba(225, 225, 225, 0.2);"><?php include("productos.php"); ?></div>
			<?php }
		} ?>
	</div>
</div>
<!--Pie de la Página-->
<p class="footer-link" style="text-align:center">Copyright &copy; 2013 | Website Developed By <a href="http://lastfm.com/user/upgrade18">Luis Perez</a> | Website Designed by <a href="http://twitter.com/lapv20">Luis Perez</a>
</body>
</html>