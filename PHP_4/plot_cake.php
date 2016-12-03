<!DOCTYPE html>
<html>
<head>
    <title>Plot Cake Donut Chart</title>
    <link class="include" rel="stylesheet" type="text/css" href="dist/jquery.jqplot.min.css" />
    <!--[if lt IE 9]><script language="javascript" type="text/javascript" src="../excanvas.js"></script><![endif]-->
    <script class="include" type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>

<body>
<div id="chart3" style="height:300px; width:500px;"></div>
<script class="code" type="text/javascript">
$(document).ready(function(){
  var s1 = [['a',6], ['b',8], ['c',14], ['d',20]];
  var s2 = [['a', 8], ['b', 12], ['c', 6], ['d', 9]];
  
  var plot3 = $.jqplot('chart3', [s1, s2], {
    seriesDefaults: {
      // make this a donut chart.
      renderer:$.jqplot.DonutRenderer,
      rendererOptions:{
        // Donut's can be cut into slices like pies.
        sliceMargin: 3,
        // Pies and donuts can start at any arbitrary angle.
        startAngle: -90,
        showDataLabels: true,
        // By default, data labels show the percentage of the donut/pie.
        // You can show the data 'value' or data 'label' instead.
        dataLabels: 'value'
      }
    }
  });
});
</script>

    <script class="include" type="text/javascript" src="dist/jquery.jqplot.min.js"></script>
    <script class="include" language="javascript" type="text/javascript" src="dist/plugins/jqplot.pieRenderer.min.js"></script>
    <script class="include" language="javascript" type="text/javascript" src="dist/plugins/jqplot.donutRenderer.min.js"></script>
</body>


</html>
