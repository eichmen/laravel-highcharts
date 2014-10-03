<html>
<head>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	<script src="http://code.highcharts.com/highcharts.js"></script>
	<title>Highcharts</title>
</head>
<body>
	<div id="container" style="width:100%; height:400px;"></div>
	<footer>
		<script type="text/javascript">
			$(function () { 
			    $('#container').highcharts({
			        chart: {
			            type: 'bar'
			        },
			        title: {
			            text: 'Fruit Consumption'
			        },
			        xAxis: {
			            categories: ['Apples', 'Bananas', 'Oranges']
			        },
			        yAxis: {
			            title: {
			                text: 'Fruit eaten'
			            }
			        },
			        series: [{
			            name: 'Jane',
			            data: [1, 0, 4]
			        }, {
			            name: 'John',
			            data: [5, 7, 3]
			        }]
			    });
			});

		</script>
	</footer>
</body>
</html>