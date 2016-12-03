<?php 
session_start();
include("conex.php");
$usuario = $_POST["usuario"];
$clave = $_POST["password1"];
$wsql = "select * from usuario where usuario='$usuario' and clave='$clave'";
$result = mysql_query($wsql,$link);
echo mysql_error($link);
$row = mysql_fetch_array($result);
	if ($row > 0){
		$_SESSION['tipo']= $row['id_tipousuario'];
		$_SESSION['mensaje']="<b>Bienvenido</b></br>".$row['nombre'];
		$_SESSION['nombre_usuario']=$row['nombre'];
		$_SESSION['logeado']="si";
		$_SESSION['id_usuario'] = $row['id_usuario'];
	}else{
		$_SESSION['mensaje']="Usuario NO Registrado";
	}
	ob_start();
	header("location:index.php");
	exit;
	ob_flush();
?>