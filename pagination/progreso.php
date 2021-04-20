<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>progreso</title>
<style>
	canvas{
		height: 100%;
		width: 100%;
	}
	html{
		height: 100%;
	}
	body{
		height: 100%;
	}
</style>
</head>

<body>
<canvas id="myCanvas"></canvas>
</body>
<script>
var c = document.getElementById("myCanvas");
var ctx = c.getContext("2d");
var prog = <?php echo json_encode(intval($_GET['id']), JSON_HEX_TAG); ?>;
ctx.beginPath();
ctx.arc(60, 60, 40, - Math.PI/2, -1 * Math.PI/2 + ((2 * Math.PI)/10)*prog);
ctx.strokeStyle = "#20C3AF";
ctx.lineWidth = 40;
ctx.stroke();
</script>
</html>
