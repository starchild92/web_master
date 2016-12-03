<?php
session_start();
include("conex.php");
extract($_POST);

/* No se admiten dos usuarios iguales o correos iguales. */
$wsql = "select * from usuario where usuario = '$usuario'";
$result = mysql_query($wsql,$link);
echo mysql_error($link);

	if (!$row = mysql_fetch_array($result)){
		
		$wsql = "select * from usuario where correo = '$correo'";
		$result = mysql_query($wsql,$link);
		echo mysql_error($link);
		
		if (!$row = mysql_fetch_array($result)){
			$fecha = date('y/m/d');
			$wsql = "INSERT INTO usuario (id_usuario, id_tipousuario, usuario, clave, nombre, telefono, correo, direccion, fecha_registro) VALUES ('NULL', '5', '$usuario', '$password1', '$nombre', '$telefono', '$correo', '$direccion', '$fecha')";
			
			if(isset($_GET['var'])){
				if($_GET['var']=="Administrador"){
					$wsql = "INSERT INTO usuario (id_usuario, id_tipousuario, usuario, clave, nombre, telefono, correo, direccion, fecha_registro) VALUES ('NULL', '3', '$usuario', '$password1', '$nombre', '$telefono', '$correo', '$direccion', '$fecha')";
				}
			}
			
			/* Todos los usuarios son por defecto vendedores, un usuario administrador puede crear ambos roles. */
			/* echo ($wsql); */
			
			$result = mysql_query($wsql,$link);
			echo mysql_error($link);
			$_SESSION['msj_registro']=$nombre.", has quedado registrado satisfactoriamente en el sitio. Por favor inicia sesión para tener acceso a los servicios.";
			
			if($_GET['var']=="Administrador"){
				?>
				<body style="font-family: 'Roboto', sans-serif; text-align:center; vertical-align:middle;">
					<h3>Ha registrado a '<?php echo $nombre ?>' como un usuario con derechos de Administración.</h3>
				</body>
			<?php
			}else{
				header("location:index.php?pag=registrar_usuario");
				exit;
			}
		}else{
			$_SESSION['msj_registro']="Lo sentimos, el correo electronico (".$correo.") ya ha sido registrado. Por favor, utiliza otro o  trata de recordar tu contraseña.";
			header("location:index.php?pag=registrar_usuario");
			exit;
		}
	}else{
		$_SESSION['msj_registro']="Lo sentimos, no pudimos llevar acabo tu registro porque el usuario (".$usuario.") ya ha sido utilizado, por favor elige otro.";
		header("location:index.php?pag=registrar_usuario");
		exit;
	}
?>