<?php
	include("conex.php");
	
	if(isset($_GET['id'])){
		if(isset($_GET['tipo'])){
			if($_GET['tipo']=="producto"){
				$wsql = "delete from producto where id_producto =".$_GET['id'];
				mysql_query($wsql,$link);
				?>
				<body style="font-family: 'Roboto', sans-serif; text-align:center; vertical-align:middle;">
					<h3>Se ha eliminado el articulo con exito.</h3>.<br />
					<strong><em>Haga clic en cerrar y refresque para ver los cambios.</em></strong>
				</body>
				<?php
			}
			if($_GET['tipo']=="artista"){
				$wsql = "delete from producto where id_artista =".$_GET['id'];
				mysql_query($wsql,$link);
				echo mysql_error($link);
				
				$wsql = "delete from artista where id_artista =".$_GET['id'];
				mysql_query($wsql,$link);
				echo mysql_error($link);
				?>
				<body style="font-family: 'Roboto', sans-serif; text-align:center; vertical-align:middle;">
					<h3>Se ha eliminado el artista con exito.</h3>.<br />
					<strong><em>Haga clic en cerrar y refresque para ver los cambios.</em></strong>
				</body>
				<?php
			}
			if($_GET['tipo']=="genero"){
				$wsql = "select * from genero where nombre = 'Sin Especificar'";
				$result = mysql_query($wsql,$link);
				echo mysql_error($link);
				$row = mysql_fetch_array($result);
				$id_anterior = $row['id_genero'];
				
				if($id_anterior == $_GET['id']){
					?>
					<body style="font-family: 'Roboto', sans-serif; text-align:center; vertical-align:middle;">
						<h3>NO PUEDES ELIMINAR EL GENERO 'Sin Especificar', <strong>PRIMERO ELIMINA LOS PRODUCTOS Y ARTISTAS</strong> QUE SON DE ESTE GENERO.</h3>
					</body>
					<?php
				}else{
					$wsql = "update producto set id_genero = '".$_GET['id']."' where id_genero = ".$id_anterior;
					mysql_query($wsql,$link);
					echo mysql_error($link);
					
					$wsql = "update artista set id_genero = '".$_GET['id']."' where id_genero = ".$id_anterior;
					mysql_query($wsql,$link);
					echo mysql_error($link);
					
					$wsql = "delete from genero where nombre = 'Sin Especificar'";
					mysql_query($wsql,$link);
					echo mysql_error($link);
					
					$wsql = "update genero set nombre = 'Sin Especificar' where id_genero = ".$_GET['id'];
					mysql_query($wsql,$link);
					echo mysql_error($link);
					?>
					<body style="font-family: 'Roboto', sans-serif; text-align:center; vertical-align:middle;">
						<h3>El genero no ha eliminado, los productos y artistas que tenian el genero que elimino, ahora tiene por genero: 'Sin Especificar'.</h3>.<br />
						<strong><em>Haga clic en cerrar y refresque para ver los cambios.</em></strong>
					</body>
					<?php
				}
			}/*Genero*/
			if($_GET['tipo']=="tipoproducto"){
				$wsql = "select * from tipo_producto where nombre = 'Sin Especificar'";
				$result = mysql_query($wsql,$link);
				echo mysql_error($link);
				$row = mysql_fetch_array($result);
				$id_anterior = $row['id_tipo'];
				
				if($id_anterior == $_GET['id']){
					?>
					<body style="font-family: 'Roboto', sans-serif; text-align:center; vertical-align:middle;">
						<h3>NO PUEDES ELIMINAR EL TIPO DE PRODUCTO 'Sin Especificar', <strong>PRIMERO ELIMINA LOS PRODUCTOS</strong> QUE SON DE ESTE TIPO.</h3>
					</body>
					<?php
				}else{
					$wsql = "update producto set id_tipoproducto = '".$_GET['id']."' where id_tipoproducto = ".$id_anterior;
					mysql_query($wsql,$link);
					echo mysql_error($link);
					
					$wsql = "delete from tipo_producto where nombre = 'Sin Especificar'";
					mysql_query($wsql,$link);
					echo mysql_error($link);
					
					$wsql = "update tipo_producto set nombre = 'Sin Especificar' where id_tipo = ".$_GET['id'];
					mysql_query($wsql,$link);
					echo mysql_error($link);
					?>
					<body style="font-family: 'Roboto', sans-serif; text-align:center; vertical-align:middle;">
						<h3>El tipo de producto se ha eliminado, los productos que poseian el tipo que elimino, ahora tienen por tipo: 'Sin Especificar'.</h3>.<br />
						<strong><em>Haga clic en cerrar y refresque para ver los cambios.</em></strong>
					</body>
					<?php
				}
			}/*Tipo Producto*/
			if($_GET['tipo']=="tipoventa"){
				$wsql = "select * from tipo_venta where tipo = 'Sin Especificar'";
				$result = mysql_query($wsql,$link);
				echo mysql_error($link);
				$row = mysql_fetch_array($result);
				$id_anterior = $row['id_venta'];
				
				if($id_anterior == $_GET['id']){
					?>
					<body style="font-family: 'Roboto', sans-serif; text-align:center; vertical-align:middle;">
						<h3>NO PUEDES ELIMINAR EL TIPO DE VENTA 'Sin Especificar', <strong>PRIMERO ELIMINA LOS PRODUCTOS</strong> QUE SON DE ESTE TIPO.</h3>
					</body>
					<?php
				}else{
					$wsql = "update producto set id_tipoventa = '".$_GET['id']."' where id_tipoventa = ".$id_anterior;
					mysql_query($wsql,$link);
					echo mysql_error($link);
					
					$wsql = "delete from tipo_venta where tipo = 'Sin Especificar'";
					mysql_query($wsql,$link);
					echo mysql_error($link);
					
					$wsql = "update tipo_venta set tipo = 'Sin Especificar' where id_venta = ".$_GET['id'];
					mysql_query($wsql,$link);
					echo mysql_error($link);
					?>
					<body style="font-family: 'Roboto', sans-serif; text-align:center; vertical-align:middle;">
						<h3>El tipo de venta se ha eliminado, los productos que poseian el tipo que elimino, ahora tienen por tipo: 'Sin Especificar'.</h3>.<br />
						<strong><em>Haga clic en cerrar y refresque para ver los cambios.</em></strong>
					</body>
					<?php
				}
			}/*Tipo Producto*/
		}
	
	}
	

?>