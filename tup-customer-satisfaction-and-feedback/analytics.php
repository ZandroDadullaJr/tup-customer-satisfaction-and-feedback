<!DOCTYPE html>
<html>
	<head>
		<title>Analytics</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	</head>
	<body>
		<h1 style="text-align: center;">Analytics</h1>
		<div id="test">
			<button id="randomizeData">Randomize Data</button>
			<button id="addDataset">Add Dataset</button>
			<button id="removeDataset">Remove Dataset</button>
		</div>
		<div id="canvas-holder" style="width:40%;text-align: right;float: right;">
			<canvas id="chart-area"></canvas>
		</div>
		<div style="width: 75%;margin: 0 auto;">
			<canvas id="canvas"></canvas>
		</div>
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/axios.min.js"></script>
		<script type="text/javascript" src="js/Chart.bundle.min.js"></script>
		<script type="text/javascript" src="js/chart.utils.js"></script>
		<script type="text/javascript" src="js/getdata.js"></script>
	</body>
</html>