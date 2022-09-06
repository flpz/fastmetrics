<!DOCTYPE html>
<html lang="en">
<head>
	<title>Internet Speeds by State Map</title>
	<link rel="canonical" href="https://www.fastmetrics.com/internet-connection-speed-map-usa.php" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="robots" content="noindex, nofollow"/>
	<link rel="shortcut icon" href="https://www.fastmetrics.com/assets/images/fmicon.ico"/>
	<link rel="apple-touch-icon" href="https://www.fastmetrics.com/assets/images/touch-icon-iphone.png">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--[if lt IE 9]><script src="https://www.fastmetrics.com/assets/js/css3-mediaqueries.js"></script><![endif]-->
	<!--[if lt IE 9]><script src="https://www.fastmetrics.com/assets/js/html5shiv.js"></script><![endif]-->
	<link href="https://www.fastmetrics.com/assets/css/main.css" rel="stylesheet" >
</head>
<body class="page">
	
	<div id="usa-map"></div>
	<p>Source: <a target="_blank" href="https://www.fastmetrics.com/internet-connection-speed-map-usa.php">Fastmetrics</a></p>

	<script defer src="https://www.fastmetrics.com/assets/js/jquery.min.js"></script>
    <script defer src="https://www.fastmetrics.com/assets/js/bootstrap.min.js"></script>
	<script defer src="https://www.fastmetrics.com/assets/js/jquery.validate.js"></script>
	<script defer src="https://www.fastmetrics.com/assets/js/slick.min.js"></script>
	<script defer src="https://www.fastmetrics.com/assets/js/main.js"></script>

	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript">
	google.charts.load('current', {'packages':['geochart']});
	google.charts.setOnLoadCallback(drawRegionsMap);

	function drawRegionsMap() {
		var data = google.visualization.arrayToDataTable([
			['State', 'Average Internet Speed (Mbps)'],
			['Delaware', 75],
			['Virginia', 74],
			['Dist. of Columbia', 68],
			['Massachusetts', 66],
			['Rhode Island', 65],
			['North Dakota', 62],
			['New York', 60],
			['Utah', 60],
			['New Jersey', 59],
			['California', 58],
			['Connecticut', 58],
			['Maryland', 58],
			['Washington', 58],
			['Michigan', 56],
			['Pennsylvania', 56],
			['Oregon', 54],
			['South Dakota', 54],
			['New Hampshire', 53],
			['Wisconsin', 53],
			['Florida', 52],
			['Georgia', 51],
			['Indiana', 51],
			['Illinois', 50],
			['Minnesota', 50],
			['Missouri', 49],
			['Nevada', 49],
			['Tennessee', 49],
			['Texas', 49],
			['Alaska', 48],
			['Colorado', 48],
			['Vermont', 48],
			['Arizona', 46],
			['Nebraska', 46],
			['North Carolina', 45],
			['South Carolina', 45],
			['Wyoming', 45],
			['Alabama', 44],
			['Hawaii', 43],
			['Kansas', 43],
			['Montana', 43],
			['Ohio', 43],
			['Oklahoma', 43],
			['Iowa', 42],
			['West Virginia', 42],
			['Maine', 40],
			['Louisiana', 39],
			['Idaho', 37],
			['Mississippi', 37],
			['New Mexico', 36],
			['Arkansas', 35],
			['Kentucky', 34]
		]);
		/*
		var options = {
			colorAxis: {colors: ['#ff0000', '#ffff1a', '#77b300']}
		};
		*/
		
		var options = {};
        options['region'] = 'US';
		options['resolution'] = 'provinces';
        options['colors'] = ['#ff0000', '#ffff1a', '#77b300'];
	  
		var chart = new google.visualization.GeoChart(document.getElementById('usa-map'));
		chart.draw(data, options);
	}
	</script>
	
	<style>
		#usa-map{width:100%;height:750px;overflow:hidden;}
		@media screen and (max-width:992px){
			#usa-map{height:550px;}
		}
		@media screen and (max-width:420px){
			#usa-map{height:320px;}
		}
	</style>

</body>
</html>