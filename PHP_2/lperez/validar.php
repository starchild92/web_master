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
		$_SESSION['mensaje']="<b>Bienvenido</b></br>".$row['nombre'];
	}else{
		$_SESSION['mensaje']="usuario no existe!!!";
	}
	header("location:index.php");
?>