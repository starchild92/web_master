<script language="javascript" type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" language="javascript" src="jquery.carouFredSel-5.6.1.js"></script>
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

			});
		</script>


<style type="text/css">
		<style type="text/css">
			.wrapper {
				background-color: white;
				width: 220px;
				margin: 5px auto;
				padding: 5px;
				box-shadow: 0 0 2px #999;
			}
			.list_carousel {
				background-color: #FFF;
				margin: 0px;
				width:220px;
			}
			.list_carousel ul {
				margin: 0;
				padding: 0;
				list-style: none;
				display: block;
			}
			.list_carousel li {
			font-size: 10px;
			color: #666;
			text-align: center;
			background-color:  #FFF;
			border: 0px solid #999;
			width: 220px;
			height: 140px;
			padding: 0;
			margin: 2px;
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
				margin-right: 5px;
			}
			.pager {
				float: left;
				width:400px;
				text-align: center;
			}
			.pager a {
				margin: 0 5px;
				text-decoration: none;
			}
			.pager a.selected {
				text-decoration: underline;
			}
			
		.titc01 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
	color: #930;
}
        </style>
        <?php
		include('../conex.php');
		$filtro="";
		if (isset($idc)){
			$filtro =" where idcategoria = '$idc'"; 
		}
		$wsql="select * from productos $filtro";
		$result_01=mysql_query($wsql,$link);
		echo mysql_error($link);
		 ?>
		<div class="wrapper">
			<div class="list_carousel">
				<ul id="foo0">
                	<?php while ($row_01=mysql_fetch_array($result_01)){?>
					<li><a href="../index.php?modo=d&amp;id=<?php echo $row_01['idproducto'] ?>"><img src="imapro/<?php echo $row_01['idproducto']?>_0p.jpg" width="102" height="138" align="left" style="padding:5px"></a> 
                    <div align="left"  style="margin-left:10px; font-family: Arial, Helvetica, sans-serif"><br><br>
                    <span class="titc01">NAME :<br></span> <?php echo $row_01['nombre'] ?><br><br>
                    <span class="titc01">DESCRIPTION :<br></span> <?php echo $row_01['descripcioncorta'] ?>
                    </div>
                  </li>
                   <?php }?>
				</ul>
                 
				<div class="clearfix"></div>
               
			</div>
            
		</div>
         
        