<?php 
	ob_start();
	session_start();
	include("conex.php");
	
	if(!isset($_SESSION['logeado'])){
		header("location:cerrar.php");
		exit;
	}
	ob_flush();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Online Music Store 2 - Administración</title>

	<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="HTML5 Admin Template/css/layout.css" type="text/css" media="screen" />
	<link rel="stylesheet" type="text/css" href="FancyBitch/source/jquery.fancybox.css?v=2.1.5" media="screen" />
	
	<style type="text/css">
		.fancybox-custom .fancybox-skin {
			box-shadow: 0 0 50px #222;
		}
	</style>
	
	<script type="text/javascript" src="FancyBitch/lib/jquery-1.10.1.min.js"></script>
	<script type="text/javascript" src="FancyBitch/source/jquery.fancybox.js?v=2.1.5"></script>
	<script src="HTML5 Admin Template/js/hideshow.js" type="text/javascript"></script>
	<script src="HTML5 Admin Template/js/jquery.tablesorter.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="HTML5 Admin Template/js/jquery.equalHeight.js"></script>
	<script type="text/javascript" src="NicEdit/nicEdit.js"></script>
	<script type="text/javascript">
    	bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
    </script>
	<script type="text/javascript">
	$(document).ready(function(){
		$("#esconderPanel").click(function(){
			$("#sidebar").toggle("slow");
		});
	});
	$(document).ready(function() 
    	{ 
      	  $(".tablesorter").tablesorter(); 
   	 } 
	);
	$(document).ready(function() {

	//When page loads...
	$(".tab_content").hide(); //Hide all content
	$("ul.tabs li:first").addClass("active").show(); //Activate first tab
	$(".tab_content:first").show(); //Show first tab content

	//On Click Event
	$("ul.tabs li").click(function() {

		$("ul.tabs li").removeClass("active"); //Remove any "active" class
		$(this).addClass("active"); //Add "active" class to selected tab
		$(".tab_content").hide(); //Hide all tab content

		var activeTab = $(this).find("a").attr("href"); //Find the href attribute value to identify the active tab + content
		$(activeTab).fadeIn(); //Fade in the active ID content
		return false;
		});
	
	});
    </script>
    <script type="text/javascript">
		$(function(){
				$('.column').equalHeight();
			});
		function MM_showHideLayers() { //v9.0
		  var i,p,v,obj,args=MM_showHideLayers.arguments;
		  for (i=0; i<(args.length-2); i+=3) 
		  with (document) if (getElementById && ((obj=getElementById(args[i]))!=null)) { v=args[i+2];
			if (obj.style) { obj=obj.style; v=(v=='show')?'visible':(v=='hide')?'hidden':v; }
			obj.visibility=v; }
		}
		$(document).ready(function() {
			$('.fancybox').fancybox();
		});
	</script>
	
</head>

<link rel="shortcut icon" href="img/loguito.png">
<body>

	<header id="header">
		<hgroup>
			<h1 class="site_title">OLMS2013</h1>
			<h2 class="section_title">Panel Administrativo</h2><div class="btn_view_site"><a href="cerrar.php">Salir</a></div>
		</hgroup>
	</header> <!-- end of header bar -->
	
	<section id="secondary_bar">
		<div class="user" style="cursor:pointer">
			<p id="esconderPanel"><?php echo $_SESSION['nombre_usuario']; ?></p>
			<!-- <a class="logout_user" href="#" title="Logout">Logout</a> -->
		</div>
		<div class="breadcrumbs_container">
			<!--<article class="breadcrumbs"><a href="#" onclick="MM_showHideLayers('sidebar','','show')">Mostrar Menu</a> <div class="breadcrumb_divider"></div><a href="#" onclick="MM_showHideLayers('sidebar','','hide')">Ocultar Menu</a></article>-->
		</div>
	</section><!-- end of secondary bar -->
	
	<aside id="sidebar" class="column">
		<!--<form class="quick_search">
			<input type="text" value="Quick Search" onFocus="if(!this._haschanged){this.value=''};this._haschanged=true;">
		</form>
		<hr/>-->
		<h3><a href="administracion.php?pag=Inicio">INICIO</a></h3>
		<h3>CONTENIDO</h3>
		<ul class="toggle">
			<li class="icn_new_article"><a href="administracion.php?pag=ver">Ver Información</a></li>
			<li class="icn_edit_article"><a href="administracion.php?pag=adicionar">Adicionar Datos</a></li>
		</ul>
		<h3>USUARIO</h3>
		<ul class="toggle">
			<li class="icn_add_user"><a class="fancybox fancybox.iframe" href="registro.php?var=A">Agregar Admin</a></li>
			<li class="icn_view_users"><a href="administracion.php?pag=ver_users">Ver Usuarios</a></li>
			<li class="icn_profile"><a href="#">Tu Perfil</a></li>
		</ul>
		<!--<h3>MULTIMEDIA</h3>
		<ul class="toggle">
			<li class="icn_folder"><a href="#">File Manager</a></li>
			<li class="icn_photo"><a href="#">Gallery</a></li>
			<li class="icn_audio"><a href="#">Audio</a></li
			<li class="icn_video"><a href="#">Video</a></li>
		</ul>-->
		<!--<h3>ADMINISTRACIÓN</h3>
		<ul class="toggle">
			<li class="icn_settings"><a href="#">Options</a></li>
			<li class="icn_security"><a href="#">Seguridad</a></li>
			<li class="icn_jump_back"><a href="cerrar.php">Cerrar Sesión</a></li>
		</ul>-->
		
		<footer style=" text-align:center;">
			<hr />
			<p><strong>Copyright &copy; 2013<br />
Online Music Store</strong></p>
			<p>Adaptada por <a href="http://www.twitter.com/lapv20" title="Twitter de Luis Pérez">Luis Perez</a></p>
		</footer>
	</aside><!-- end of sidebar -->
	
	<section id="main" class="column">
		<?php
		if(isset($_GET['op'])){
			if($_GET['op']=="success"){ ?>
			<h4 class="alert_success">Hemos registrado el producto con exito!</h4>
		<?php }if($_GET['op']=="equal_name"){ ?>
			<h4 class="alert_error">No se ha podido agregar el producto, debido a que exite uno con el mismo nombre y artista.</h4>
		<?php }if($_GET['op']=="success_artista"){ ?>
			<h4 class="alert_success">Se registro correctamente el Nuevo Artista</h4>
		<?php }if($_GET['op']=="fail_artista"){ ?>
			<h4 class="alert_error">Vaya! Ese artista ya existe.</h4>
		<?php }if($_GET['op']=="success_genero"){ ?>
			<h4 class="alert_success">Se registro correctamente el Nuevo Genero</h4>
		<?php }if($_GET['op']=="fail_genero"){ ?>
			<h4 class="alert_error">Vaya! Este genero ya existe.</h4>
		<?php }if($_GET['op']=="success_tipoprod"){?>
			<h4 class="alert_success">Se registro correctamente el Nuevo Tipo de Producto</h4>
		<?php }if($_GET['op']=="fail_tipoprod"){ ?>
			<h4 class="alert_error">Vaya! Este tipo de Producto ya existe.</h4>
		<?php }if($_GET['op']=="success_tipoventa"){ ?>
			<h4 class="alert_success">Se registro correctamente el Nuevo Tipo de Venta</h4>
		<?php }if($_GET['op']=="fail_tipoventa"){ ?>
			<h4 class="alert_error">Vaya! Este tipo de Venta ya existe.</h4>
		<?php }
		} /* end of isset op */ ?>
		
		<?php if(isset($_GET['pag'])){ ?>
		<?php if($_GET['pag']=="Inicio"){ ?>
			<!--Parrafo de bienvenida.-->
			<article class="module width_full" >
					<div class="module_content" style="color:#000; font-size:14px;">
					<h1>Bienvenido, <?php echo $_SESSION['nombre_usuario']; ?></h1>
					
					<p>En 1815, era obispo de D. el ilustrísimo Carlos Francisco Bienvenido Myriel, un anciano de
unos setenta y cinco años, que ocupaba esa sede desde 1806. Quizás no será inútil indicar aquí
los rumores y las habladurías que habían circulado acerca de su persona cuando llegó por primera
vez a su diócesis.</p>
<p>Lo que de los hombres se dice, verdadero o falso, ocupa tanto lugar en su destino, y sobre todo
en su vida, como lo que hacen. El señor Myriel era hijo de un consejero del Parlamento de Aix,
nobleza de toga. Se decía que su padre, pensando que heredara su puesto, lo había casado muy
joven. Se decía que Carlos Myriel, no obstante este matrimonio, había dado mucho que hablar.
Era de buena presencia, aunque de estatura pequeña, elegante, inteligente; y se decía que toda la
primera parte de su vida la habían ocupado el mundo y la galantería.</p>
<p>Sobrevino la Revolución; se precipitaron los sucesos; las familias ligadas al antiguo régimen,
perseguidas, acosadas, se dispersaron, y Carlos Myrielemigró a Italia. Su mujermurió allí de tisis.
No habían tenido hijos. ¿Qué pasó después en los destinos del señor Myriel?</p>
<p>El hundimiento de la antigua sociedad francesa, la caída de su propia familia, los trágicos
espectáculos del 93, ¿hicieron germinar tal vez en su alma ideas de retiro y de soledad? Nadie
hubiera podido decirlo; sólo se sabía que a su vuelta de Italia era sacerdote.
En 1804 el señor Myriel se desempeñaba como cura de Brignolles. Era ya anciano y vivía en un
profundo retiro.</p>
				</div>
		</article>
			<!--Parrafo de bienvenida.-->
			<!--En prueba-->
			<article class="module width_full">
			<header><h3>Estadisticas</h3></header>
			<div class="module_content">
				<article class="stats_graph">
					<?php include('progressbar.php'); ?>
				</article>
				
				<article class="stats_overview" style="text-align:center; color:#000;">
					<div class="overview_today" >
						<p class="overview_day">totales</p>
						<p class="overview_count"><?php echo $row[0]; ?></p>
						<p class="overview_type">Usuarios</p>
						<p class="overview_count"><?php echo $row3[0]; ?></p>
						<p class="overview_type">Productos</p>
					</div>
					<div class="overview_previous">
						<p class="overview_day">totales</p>
						<p class="overview_count"><?php echo $row2[0]; ?></p>
						<p class="overview_type">artistas</p>
						<p class="overview_count"><?php echo $row4[0]; ?></p>
						<p class="overview_type">generos</p>
					</div>
				</article>
				<article class="stats_graph">
					<?php include('plot_cake.php'); ?>
				</article>
				<!--Las variables row ... row4 puede ser utilizadas SOLO despues de esta sentencia.-->
				<div class="clear"></div>
			</div>
			</article>
			<!--En prueba-->
		<?php }if($_GET['pag']=="ver"){ ?>
			<article class="module width_3_quarter">
				<header>
					<h3 class="tabs_involved">VISUALIZADOR DE CONTENIDOS</h3>
						<ul class="tabs">
							<li><a href="#tab1">Productos</a></li>
							<li><a href="#tab2">Artistas</a></li>
							<li><a href="#tab3">Generos</a></li>
							<li><a href="#tab5">Estatus</a></li>
							<li><a href="#tab6">Tipo Producto</a></li>
							<li><a href="#tab7">Tipo Usuario</a></li>
							<li><a href="#tab8">Tipo Venta</a></li>
						</ul>
				</header>
				<div class="tab_container">
					<div id="tab1" class="tab_content">
					<?php
						$idusuario = $_SESSION['id_usuario'];
						/* $wsql = "select * from producto where id_usuario = '$idusuario'"; */
						$wsql = "select * from producto";
						$result = mysql_query($wsql,$link);
						echo mysql_error($link);
					?>
					<table class="tablesorter" cellspacing="0"> 
					<thead> 
						<tr> 
							<th>Artista</th>
							<th>Nombre</th> 
							<th>Descripción</th> 
							<th>Genero</th> 
							<th>Fecha Reg.</th> 
							<!--<th>Cantidad</th>-->
							<th>Tipo</th>
							<th>Precio</th>
							<th>Estatus</th>  
							<th>Acción</th> 
						</tr> 
					</thead> 
					<tbody>
						<?php while($row = mysql_fetch_array($result)){ ?>
						<tr>
							<td style="width:128px;"><?php 
								$idartista = $row['id_artista'];
								$wsql2 = "select * from artista where id_artista = $idartista";
								$result2 = mysql_query($wsql2,$link);
								$row2 = mysql_fetch_array($result2);
								echo $row2['nombre']; ?></td>
							<td style="width:140px; background: rgba(0,0,0,0.03);"><?php echo $row['nombre']; ?></td> 
							<td><?php echo $row['descripcion']; ?></td>
							<td style="width:80px;"><?php 
								$idgenero = $row['id_genero'];
								$wsql2 = "select * from genero where id_genero = $idgenero";
								$result2 = mysql_query($wsql2,$link);
								$row2 = mysql_fetch_array($result2);
								echo $row2['nombre']; ?></td>
							<td style="width:66px;"><?php echo $row['fecha_registro']; ?></td> 
							<!--<td><?php echo $row['cantidad']; ?></td>-->
							<td><?php 
								$idtipoprod = $row['id_tipoproducto'];
								$wsql2 = "select * from tipo_producto where id_tipo = $idtipoprod";
								$result2 = mysql_query($wsql2,$link);
								$row2 = mysql_fetch_array($result2);
								echo $row2['nombre']; ?></td>
							<td><?php echo $row['precio']; ?></td>
							<td><?php 
								$idestatus = $row['id_estatus'];
								$wsql2 = "select * from estatus where id_estatus = $idestatus";
								$result2 = mysql_query($wsql2,$link);
								$row2 = mysql_fetch_array($result2);
								echo $row2['nombre']; ?></td>
							<td style="width:80px; background: rgba(51, 255, 204, 0.5);"><a class="fancybox fancybox.iframe" href="registro_producto.php?id=<?php echo $row['id_producto']?>"><input type="image" src="HTML5 Admin Template/images/icn_edit.png" title="Edit"></a><a class="fancybox fancybox.iframe" href="eliminar.php?id=<?php echo $row['id_producto'];?>&tipo=producto"><input type="image" src="HTML5 Admin Template/images/icn_trash.png" title="Trash"></a><a class="fancybox fancybox.iframe" href="loadimg.php?id=<?php echo $row['id_producto']?>&amp;num=1"><input type="image" title="UpImagen" src="HTML5 Admin Template/images/icn_photo.png" ></a></td> 
						</tr>
						<?php }; ?> 
					</tbody> 
					</table>
					</div><!-- end of #tab1 -->
					<div id="tab2" class="tab_content">
					<?php
						$wsql = "select * from artista";
						$result = mysql_query($wsql,$link);
						echo mysql_error($link);
					?>
					<table class="tablesorter" cellspacing="0"> 
					<thead> 
						<tr> 
							<th>Nombre</th> 
							<th>Genero</th> 
							<th>Descripción</th> 
							<th>Acción</th> 
						</tr> 
					</thead> 
					<tbody> 
						<?php while($row = mysql_fetch_array($result)){ ?>
						<tr> 
							<td style="width:130px;"><?php echo $row['nombre']; ?></td> 
							<td style="width:110px;"><?php 
								$idgenero = $row['id_genero'];
								$wsql2 = "select * from genero where id_genero = $idgenero";
								$result2 = mysql_query($wsql2,$link);
								$row2 = mysql_fetch_array($result2);
								echo $row2['nombre']; ?></td> 
							<td><?php echo $row['biografia']; ?></td> 
							<td style="width:83px; background: rgba(51, 255, 204, 0.5);"><a class="fancybox fancybox.iframe" href="registro_artista.php?id=<?php echo $row['id_artista']?>"><input type="image" src="HTML5 Admin Template/images/icn_edit.png" title="Edit"></a><a class="fancybox fancybox.iframe" href="eliminar.php?id=<?php echo $row['id_artista'];?>&tipo=artista"><input type="image" src="HTML5 Admin Template/images/icn_trash.png" title="Trash"></a><a class="fancybox fancybox.iframe" href="loadimg.php?id=<?php echo $row['id_artista']?>&num=1&type"><input type="image" title="UpImagen" src="HTML5 Admin Template/images/icn_photo.png" ></a></td> 
						</tr> 
						<?php }; ?>
					</tbody> 
					</table>
					</div><!-- end of #tab2 -->
					<div id="tab3" class="tab_content">
					<?php
						$wsql = "select * from genero";
						$result = mysql_query($wsql,$link);
						echo mysql_error($link);
					?>
					<table class="tablesorter" cellspacing="0"> 
					<thead> 
						<tr> 
							<th>Nombre</th>  
							<th>Acción</th>
						</tr> 
					</thead> 
					<tbody> 
						<?php while($row = mysql_fetch_array($result)){ ?>
						<tr> 
							<td><?php echo $row['nombre']; ?></td> 
							<td style="width:80px; background: rgba(51, 255, 204, 0.5);">
							<?php if($row['nombre']!="Sin Especificar"){ ?><a class="fancybox fancybox.iframe" href="registro_genero.php?id=<?php echo $row['id_genero']?>"><input  type="image" src="HTML5 Admin Template/images/icn_edit.png" title="Edit"></a><a class="fancybox fancybox.iframe" href="eliminar.php?id=<?php echo $row['id_genero'];?>&tipo=genero"><input type="image" src="HTML5 Admin Template/images/icn_trash.png" title="Trash"></a>
							<?php } ?>
							</td>
						</tr>
						<?php } ?>
					</tbody> 
					</table>
		
					</div><!-- end of #tab3 -->
					<div id="tab5" class="tab_content">
					<?php
						$wsql = "select * from estatus";
						$result = mysql_query($wsql,$link);
						echo mysql_error($link);
					?>
					<table class="tablesorter" cellspacing="0"> 
					<thead> 
						<tr> 
							<th>Nombre</th>  
							<!--<th>Acción</th>-->
						</tr> 
					</thead> 
					<tbody> 
						<?php while($row = mysql_fetch_array($result)){ ?>
						<tr> 
							<td><?php echo $row['nombre']; ?></td>
							<!--<td style="width:80px; background: rgba(51, 255, 204, 0.5);"><input type="image" src="HTML5 Admin Template/images/icn_edit.png" title="Edit"><input type="image" src="HTML5 Admin Template/images/icn_trash.png" title="Trash"></td> -->
						</tr>
						<?php } ?>
					</tbody> 
					</table>
		
					</div><!-- end of #tab5 -->
					<div id="tab6" class="tab_content">
					<?php
						$wsql = "select * from tipo_producto";
						$result = mysql_query($wsql,$link);
						echo mysql_error($link);
					?>
					<table class="tablesorter" cellspacing="0"> 
					<thead> 
						<tr> 
							<th>Nombre</th>  
							<th>Acción</th>
						</tr> 
					</thead> 
					<tbody> 
						<?php while($row = mysql_fetch_array($result)){ ?>
						<tr> 
							<td><?php echo $row['nombre']; ?></td>
							<td style="width:80px; background: rgba(51, 255, 204, 0.5);">
							<?php if($row['nombre']!="Sin Especificar"){ ?><a class="fancybox fancybox.iframe" href="registro_tipoproducto.php?id=<?php echo $row['id_tipo']?>"><input type="image" src="HTML5 Admin Template/images/icn_edit.png" title="Edit"></a><a class="fancybox fancybox.iframe" href="eliminar.php?id=<?php echo $row['id_tipo'];?>&tipo=tipoproducto"><input type="image" src="HTML5 Admin Template/images/icn_trash.png" title="Trash"></a>
							<?php } ?>
							</td> 
						</tr>
						<?php } ?>
					</tbody> 
					</table>
		
					</div><!-- end of #tab6 -->
					<div id="tab7" class="tab_content">
					<?php
						$wsql = "select * from tipo_usuario";
						$result = mysql_query($wsql,$link);
						echo mysql_error($link);
					?>
					<table class="tablesorter" cellspacing="0"> 
					<thead> 
						<tr> 
							<th>Nombre</th>  
							<th>Acción</th>
						</tr> 
					</thead> 
					<tbody> 
						<?php while($row = mysql_fetch_array($result)){ ?>
						<tr> 
							<td><?php echo $row['nombre']; ?></td>
							<td style="width:80px; background: rgba(51, 255, 204, 0.5);"><input type="image" src="HTML5 Admin Template/images/icn_edit.png" title="Trash"></td> 
						</tr>
						<?php } ?>
					</tbody> 
					</table>
		
					</div><!-- end of #tab7 -->
					<div id="tab8" class="tab_content">
					<?php
						$wsql = "select * from tipo_venta";
						$result = mysql_query($wsql,$link);
						echo mysql_error($link);
					?>
					<table class="tablesorter" cellspacing="0"> 
					<thead> 
						<tr> 
							<th>Nombre</th>  
							<th>Acción</th>
						</tr> 
					</thead> 
					<tbody> 
						<?php while($row = mysql_fetch_array($result)){ ?>
						<tr> 
							<td><?php echo $row['tipo']; ?></td>
							<td style="width:80px; background: rgba(51, 255, 204, 0.5);">
							<?php if($row['tipo']!="Sin Especificar"){ ?><a class="fancybox fancybox.iframe" href="registro_tipoventa.php?id=<?php echo $row['id_venta']?>"><input type="image" src="HTML5 Admin Template/images/icn_edit.png" title="Edit"></a><a class="fancybox fancybox.iframe" href="eliminar.php?id=<?php echo $row['id_venta'];?>&tipo=tipoventa"><input type="image" src="HTML5 Admin Template/images/icn_trash.png" title="Trash"></a>
							<?php } ?>
							</td> 
						</tr>
						<?php } ?>
					</tbody> 
					</table>
		
					</div><!-- end of #tab8 -->
				</div><!-- end of .tab_container -->
			</article>
		<?php }if($_GET['pag']=="adicionar"){ ?>
			<article class="module width_3_quarter">
				<header><h3 class="tabs_involved">AGREGAR CONTENIDO</h3>
					<ul class="tabs">
						<li><a href="#tabl1">Producto</a></li>
						<li><a href="#tabl2">Artista</a></li>
						<li><a href="#tabl3">Genero</a></li>
						<li><a href="#tabl4">Tipo Producto</a></li>
						<li><a href="#tabl5">Tipo Venta</a></li>
					</ul>
				</header>
				<div class="tab_container">
					<div id="tabl1" class="tab_content"> <?php include('registro_producto.php'); ?></div>
					<div id="tabl2" class="tab_content"> <?php include('registro_artista.php'); ?></div>
					<div id="tabl3" class="tab_content"> <?php include('registro_genero.php'); ?></div>
					<div id="tabl4" class="tab_content"> <?php include('registro_tipoproducto.php'); ?></div>
					<div id="tabl5" class="tab_content"> <?php include('registro_tipoventa.php'); ?></div>
				</div>
			</article>
		<?php }if($_GET['pag']=="ver_users"){ ?>
			<article class="module width_3_quarter">
				<header><h3 class="tabs_involved">USUARIOS</h3>
				<ul class="tabs">
					<li><a href="#tab1">Compradores</a></li>
					<li><a href="#tab2">Administradores</a></li>
				</ul>
				</header>
				<div class="tab_container">
					<div id="tab1" class="tab_content">
					<?php
						$wsql = "select * from usuario where id_tipousuario = 5";
						$result = mysql_query($wsql,$link);
						echo mysql_error($link);
					?>
					<table class="tablesorter" cellspacing="0"> 
					<thead> 
						<tr> 
							<th>Usuario</th>
							<th>Clave</th> 
							<th>Nombre</th> 
							<th>Telefono</th> 
							<th>Correo</th> 
							<th>Dirección</th>
							<th>Regacha Registro</th>  
							<th>Acción</th> 
						</tr> 
					</thead> 
					<tbody>
						<?php while($row = mysql_fetch_array($result)){ ?>
						<tr>
							<td><?php echo $row['usuario']; ?></td>
							<td><?php echo $row['clave']; ?></td> 
							<td><?php echo $row['nombre']; ?></td>
							<td><?php echo $row['telefono']; ?></td>
							<td><?php echo $row['correo']; ?></td>
							<td><?php echo $row['direccion']; ?></td>
							<td><?php echo $row['fecha_registro']; ?></td> 
							<td><input type="image" src="HTML5 Admin Template/images/icn_edit.png" title="Edit"><input type="image" src="HTML5 Admin Template/images/icn_trash.png" title="Trash"></td> 
						</tr>
						<?php }; ?> 
					</tbody> 
					</table>
					</div><!-- end of #tab1 -->
					<div id="tab2" class="tab_content">
					<?php
						$wsql = "select * from usuario where id_tipousuario = 3";
						$result = mysql_query($wsql,$link);
						echo mysql_error($link);
					?>
					<table class="tablesorter" cellspacing="0"> 
					<thead> 
						<tr> 
							<th>Usuario</th>
							<th>Clave</th> 
							<th>Nombre</th> 
							<th>Telefono</th> 
							<th>Correo</th> 
							<th>Dirección</th>
							<th>Regacha Registro</th>  
							<th>Acción</th> 
						</tr> 
					</thead> 
					<tbody>
						<?php while($row = mysql_fetch_array($result)){ ?>
						<tr>
							<td><?php echo $row['usuario']; ?></td>
							<td><?php echo $row['clave']; ?></td> 
							<td><?php echo $row['nombre']; ?></td>
							<td><?php echo $row['telefono']; ?></td>
							<td><?php echo $row['correo']; ?></td>
							<td><?php echo $row['direccion']; ?></td>
							<td><?php echo $row['fecha_registro']; ?></td> 
							<td><input type="image" src="HTML5 Admin Template/images/icn_edit.png" title="Edit"><input type="image" src="HTML5 Admin Template/images/icn_trash.png" title="Trash"></td> 
						</tr>
						<?php }; ?> 
					</tbody> 
					</table>
					</div><!-- end of #tab2 -->
				</div><!-- end of .tab_container -->
			</article>
		<?php
				}
		} /* end of isset pag */ ?>
		<div class="clear"></div><!-- end of post new article -->
		<!-- <h4 class="alert_warning">A Warning Alert</h4>
		<h4 class="alert_error">An Error Message</h4>
		<h4 class="alert_success">A Success Message</h4>end of styles article -->
		<div class="spacer"></div>
	</section>
	
</body>
</html>