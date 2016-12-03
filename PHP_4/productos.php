<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>

	<!-- Add fancyBox main JS and CSS files -->
	<script type="text/javascript" src="FancyBitch/source/jquery.fancybox.js?v=2.1.5"></script>
	<link rel="stylesheet" type="text/css" href="FancyBitch/source/jquery.fancybox.css?v=2.1.5" media="screen" />

	<script type="text/javascript">
		$(document).ready(function() {
			$('.fancybox').fancybox();
		});
	</script>


<title>Productos</title>
</head>

<?php include('conex.php'); 
	$wsql = "select * from artista ORDER BY nombre";
	$result = mysql_query($wsql,$link);
	if(isset($_GET['cant'])){
		$val = $_GET['cant'];
	}else{
		$val = 4;
		if(isset($_SESSION['logeado'])){
			$val = 5;
		}
	}
?>

<body>
<table width="100%" align="center" style="margin-left=10px;">
	<tr>
	<?php
		$cont = 0;
		while($row = mysql_fetch_array($result)){
		$cont = $cont + 1;
	?>
	<td>
	<table width="140" align="center" style="margin-top:10px; border-style:none;">
		<tr >
			<td align="center" height="150px"><img style="border-radius:5px; background: rgba(225, 225, 225, 0.3);" src="img/artists/Artp<?php echo $row['id_artista']?>1.jpg" width="140px" height="150px"/>
				<div style="position:relative; right: 0px; bottom: 0px;"><div class="fancybox" href="img/artists/Artg<?php echo $row['id_artista']?>1.jpg" data-fancybox-group="gallery" title="<?php echo $row['nombre']; ?>" style="background-image:url(img/glow.png); position: absolute; right: 0px; bottom: 0px; width: 140px; height: 150px; border-radius:5px;"></div></div>
				</td>
			</tr>
			<tr>
				<td height="30px" style="vertical-align:bottom; color:#FFF; font-size:12px; text-align:center; background:url(img/backname.png)"><a style=" color:#FFF; text-decoration:none;" class="fancybox fancybox.iframe" href="ver_productos.php?keyArtist=<?php echo $row['id_artista']; ?>" title="Productos de <?php echo $row['nombre']; ?>."><?php echo $row['nombre']; ?></a>
				</td>
		</tr>
	</table>
	</td>
	<?php
		if($cont == $val){
			echo "</tr>";
			$cont = 0;
		}
	} ?>
	</tr>
</table>

</body>
</html>