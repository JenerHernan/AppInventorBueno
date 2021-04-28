<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>svg</title>
	<style>body{
		margin:0px;
		}</style>
</head>

<body>
<svg id="svg" viewBox="0 0 1200 400"
     xmlns="http://www.w3.org/2000/svg" version="1.1">

 
  	
	<path id="prog" d="M100,100 v-100 a100,100 0 0,1 0,200 z"
        fill="#20C3AF" />
</svg>
</body>
<script>
	var conv = 2*Math.PI/360;
	var trozos = <?php echo json_encode(intval($_GET['trozos']), JSON_HEX_TAG); ?>;
	var prog = <?php echo json_encode(intval($_GET['prog']), JSON_HEX_TAG); ?>;
	var ang = 360/trozos*prog;
	
	var angulo = -ang+90;
	var width = (window.outerWidth/2).toString();
	var x = (window.outerWidth/2)*Math.cos(angulo*conv) + window.outerWidth/2;
	var y = (-window.outerWidth/2)*Math.sin(angulo*conv) + window.outerWidth/2;
	var path = document.getElementById("prog");
	var svg = document.getElementById("svg");
	svg.setAttribute("viewBox","0 0 " + (window.outerWidth).toString() + " " + (window.outerWidth).toString());
	svg.setAttribute("height",window.innerWidth);
	path.setAttribute("d","M"+width+","+width+" v-"+width+" a"+width+","+width+" 0 " + (ang > 180 ? 1 : 0).toString() + ",1 " + (x-width).toString() +","+ y.toString() + " z");
</script>
</html>
