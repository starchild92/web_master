<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/cssmenu.css"/>

<link rel="stylesheet" href="nivo-slider/themes/bar/bar.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="nivo-slider/nivo-slider.css" type="text/css" media="screen" />
<!--<link rel="stylesheet" href="nivo-slider/demo/style.css" type="text/css" media="screen" />-->
	    
	<script type="text/javascript" src="nivo-slider/demo/scripts/jquery-1.9.0.min.js"></script>
    <script type="text/javascript" src="nivo-slider/jquery.nivo.slider.js"></script>
    
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

<title>Documento sin título</title>

<link rel="stylesheet" type="text/css" href="960grid/nathansmith-960-Grid-System-231ee0c/code/css/reset.css"/>
<link rel="stylesheet" type="text/css" href="960grid/nathansmith-960-Grid-System-231ee0c/code/css/960.css"/>
<link rel="stylesheet" type="text/css" href="960grid/nathansmith-960-Grid-System-231ee0c/code/css/text.css"/>

</head>

<body>
<div class="container_12">
	<div class="grid_12">

	<div id="wrapper">
                <div class="slider-wrapper theme-bar">
                    <div id="slider" class="nivoSlider">
				    <img src="img/logo.png" width="940" height="80" /></div>
                </div>
            </div>
		
 	</div>
    <div class="grid_12">
		<?php include("menuinicio.html"); ?>    
	</div>
<div class="grid_3">
    <div class="grid_3">
    	<?php include("login.php"); ?>
    </div>
    <div class="grid_3">BUSCAR</div>
    <div class="grid_3">CATEGORIA</div>
</div>
<div class="grid_9">
	CONTENIDO
</div>

<div class="grid_12" style="background:#000; height:60px">
	CERRAR
</div>



</div>


</body>
</html>