@extends('layouts.app')

@section('content')
<section class="section">
	<div class="container">
		<div class="columns">
			<div class="column is-offset-1 is-2">
				@include('layouts.sidebar')
			</div>
			<div class="column is-offset-1 is-6">
				@if(empty($origin))
				<h1 class="title is-3" id="origin">Canada</h1>
				@else
				<h1 class="title is-3" id="origin">{{$origin}}</h1>
				@endif
				<nav class="level">
					<div class="level-item has-text-centered">
						<div>
							<p class="heading">Total Loads Last Month </p>
							<p class="title">429,779</p>
						</div>
					</div>
					<div class="level-item has-text-centered">
						<div>
							<p class="heading">Month-over-month</p>
							<p class="title"><span class="tag is-success is-large">+ 33%</span></p>
						</div>
					</div>
					<div class="level-item has-text-centered">
						<div>
							<p class="heading">Year-over-year</p>
							<p class="title"><span class="tag is-success is-large">+ 51%</span></p>
						</div>
					</div>
				</nav>
				<div class="box">
					<div id='map'></div>
				</div>
				<div class="box">
					<canvas id="lineChart"></canvas>
				</div>
				<div class="columns is-multiline">
					<div class="column is-half">
						<div class="box">
							<canvas id="doughnutChart"></canvas>
						</div>
					</div>
					<div class="column is-half">
						<div class="box">
							<canvas id="radarChart"></canvas>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection

@section('script-footer')
<script type="text/javascript">
	$(document).ready(function(){
		// Line Chart and Data
		var lineChart = document.getElementById("lineChart");
		var lineChartData = {
			labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "Octobor", "Novemver", "December"],
			datasets: [
			{
				label: "2012",
				fill: false,
				lineTension: 0.1,
				backgroundColor: "rgba(175,198,226,0.4)",
				borderColor: "rgba(175,198,226,1)",
				borderCapStyle: 'butt',
				borderDash: [],
				borderDashOffset: 0.0,
				borderJoinStyle: 'miter',
				pointBorderColor: "rgba(175,198,226,1)",
				pointBackgroundColor: "#fff",
				pointBorderWidth: 1,
				pointHoverRadius: 5,
				pointHoverBackgroundColor: "rgba(175,198,226,1)",
				pointHoverBorderColor: "rgba(220,220,220,1)",
				pointHoverBorderWidth: 2,
				pointRadius: 1,
				pointHitRadius: 10,
				data: [220, 222, 276, 266, 301, 295, 233, 235, 200, 215, 215, 182],
				spanGaps: false,
			},
			{
				label: "2013",
				fill: false,
				lineTension: 0.1,
				backgroundColor: "rgba(74,137,220,0.4)",
				borderColor: "rgba(74,137,220,1)",
				borderCapStyle: 'butt',
				borderDash: [],
				borderDashOffset: 0.0,
				borderJoinStyle: 'miter',
				pointBorderColor: "rgba(74,137,220,1)",
				pointBackgroundColor: "#fff",
				pointBorderWidth: 1,
				pointHoverRadius: 5,
				pointHoverBackgroundColor: "rgba(74,137,220,1)",
				pointHoverBorderColor: "rgba(220,220,220,1)",
				pointHoverBorderWidth: 2,
				pointRadius: 1,
				pointHitRadius: 10,
				data: [228, 198, 245, 229, 252, 234, 233, 229, 218, 232, 210, 234],
				spanGaps: false,
			},
			{
				label: "2014",
				fill: false,
				lineTension: 0.1,
				backgroundColor: "rgba(243,156,18,0.4)",
				borderColor: "rgba(243,156,18,1)",
				borderCapStyle: 'butt',
				borderDash: [],
				borderDashOffset: 0.0,
				borderJoinStyle: 'miter',
				pointBorderColor: "rgba(243,156,18,1)",
				pointBackgroundColor: "#fff",
				pointBorderWidth: 1,
				pointHoverRadius: 5,
				pointHoverBackgroundColor: "rgba(243,156,18,1)",
				pointHoverBorderColor: "rgba(220,220,220,1)",
				pointHoverBorderWidth: 2,
				pointRadius: 1,
				pointHitRadius: 10,
				data: [335, 318, 369, 324, 331, 331, 291, 264, 279, 282, 251, 278],
				spanGaps: false,
			},
			{
				label: "2015",
				fill: false,
				lineTension: 0.1,
				backgroundColor: "rgba(192,57,43,0.4)",
				borderColor: "rgba(192,57,43,1)",
				borderCapStyle: 'butt',
				borderDash: [],
				borderDashOffset: 0.0,
				borderJoinStyle: 'miter',
				pointBorderColor: "rgba(192,57,43,1)",
				pointBackgroundColor: "#fff",
				pointBorderWidth: 1,
				pointHoverRadius: 5,
				pointHoverBackgroundColor: "rgba(192,57,43,1)",
				pointHoverBorderColor: "rgba(220,220,220,1)",
				pointHoverBorderWidth: 2,
				pointRadius: 1,
				pointHitRadius: 10,
				data: [275, 253, 285, 249, 258, 263, 197, 196, 210, 197, 182, 178],
				spanGaps: false,
			},
			{
				label: "2016",
				fill: false,
				lineTension: 0.1,
				backgroundColor: "rgba(137,165,78,0.4)",
				borderColor: "rgba(137,165,78,1)",
				borderCapStyle: 'butt',
				borderDash: [],
				borderDashOffset: 0.0,
				borderJoinStyle: 'miter',
				pointBorderColor: "rgba(137,165,78,1)",
				pointBackgroundColor: "#fff",
				pointBorderWidth: 1,
				pointHoverRadius: 5,
				pointHoverBackgroundColor: "rgba(137,165,78,1)",
				pointHoverBorderColor: "rgba(220,220,220,1)",
				pointHoverBorderWidth: 2,
				pointRadius: 1,
				pointHitRadius: 10,
				data: [199, 201, 236, 207, 252, 247, 197, 220, 231, 213, 226, 258],
				spanGaps: false,
			},
			{
				label: "2017",
				fill: false,
				lineTension: 0.1,
				backgroundColor: "rgba(80,227,194,0.4)",
				borderColor: "rgba(80,227,194,1)",
				borderCapStyle: 'butt',
				borderDash: [],
				borderDashOffset: 0.0,
				borderJoinStyle: 'miter',
				pointBorderColor: "rgba(80,227,194,1)",
				pointBackgroundColor: "#fff",
				pointBorderWidth: 1,
				pointHoverRadius: 5,
				pointHoverBackgroundColor: "rgba(80,227,194,1)",
				pointHoverBorderColor: "rgba(220,220,220,1)",
				pointHoverBorderWidth: 2,
				pointRadius: 1,
				pointHitRadius: 10,
				data: [284, 269, 357],
				spanGaps: false,
			}
			]
		};
		var myLineChart = new Chart(lineChart, {
			type: 'line',
			data: lineChartData,
			options: {
				title: {
					display: true,
					text: 'Canadian Spot Market Freight Index 2012-2016'
				}
			}
		});

		var doughnutChart = document.getElementById("doughnutChart");
		var doughnutChartData = {
			labels: [
			"Cross-border Loads",
			"Intra-Canada Loads",
			"Other"
			],
			datasets: [
			{
				data: [71, 27, 2],
				backgroundColor: [
				"#0079A7",
				"#00AAE9",
				"#7ED3F3"
				],
				hoverBackgroundColor: [
				"#0079A7",
				"#00AAE9",
				"#7ED3F3"
				]
			}]
		};
		var myDoughnutChart = new Chart(doughnutChart, {
			type: 'doughnut',
			data: doughnutChartData,
			options: {
				title: {
					display: true,
					text: 'March 2017 Loads Volumns'
				}
			}
		});

		var radarChart = document.getElementById("radarChart");
		var radarChartData = {
			labels: ["Western", "Ontario", "Quebec", "Atlantic"],
			datasets: [
			{
				label: "By Region of Origin ",
				backgroundColor: "rgba(179,181,198,0.2)",
				borderColor: "rgba(179,181,198,1)",
				pointBackgroundColor: "rgba(179,181,198,1)",
				pointBorderColor: "#fff",
				pointHoverBackgroundColor: "#fff",
				pointHoverBorderColor: "rgba(179,181,198,1)",
				data: [42, 35, 18, 5]
			},
			{
				label: "By Region of Destination",
				backgroundColor: "rgba(255,99,132,0.2)",
				borderColor: "rgba(255,99,132,1)",
				pointBackgroundColor: "rgba(255,99,132,1)",
				pointBorderColor: "#fff",
				pointHoverBackgroundColor: "#fff",
				pointHoverBorderColor: "rgba(255,99,132,1)",
				data: [35, 33, 27, 5]
			}
			]
		};
		var myRadarChart = new Chart(radarChart, {
			type: "radar",
			data: radarChartData,
			options: {
				title: {
					display: true,
					text: 'March 2017 Loads within Canada Distribution'
				}
			}
		});
	})
</script>
<script type="text/javascript">
	var origin = document.getElementById('origin').innerHTML;
	
	//Set default geo to Canada
	var geoData = { 
		center: [-106.48, 57.11], 
		zoom: 3 
	}

	//call function to extract region
	extractRegion(origin);

	//extract region
	function extractRegion(origin){
		var splits = origin.split(", ");
		var region = splits[1];
		getCoordinate(region);
	}

	function getCoordinate(region){
		if(region == "ON"){
			geoData = { 
				center: [-85.224413, 50.789227], 
				zoom: 3.5
			}
		}else if(region == "QC"){
			geoData = { 
				center: [-72.294306, 53.103077], 
				zoom: 3.5
			}
		}else if(region == "BC" || region == "AB" || region == "SK" || region == "MB" || region == "YT" || region == "NT" || region == "NU"){
			geoData = { 
				center: [-110.892739, 55.731258], 
				zoom: 3.5
			}
		}else if(region == "NB" || region == "NS" || region == "PE" || region == "NL"){
			geoData = { 
				center: [-60.968481, 49.778463], 
				zoom: 4
			}
		}else{
			return;
		}
	}

	mapboxgl.accessToken = 'pk.eyJ1IjoibGlzaHVveiIsImEiOiJjaW8xdHQzNXIxYWx1dWdseTcxZG1wYzJmIn0.cUxYf1SfN7aEOUJjcjqCXA';
	var map = new mapboxgl.Map({
    container: 'map', // container id
    style: 'mapbox://styles/mapbox/light-v9', //stylesheet location
    center: geoData.center, // starting position
    zoom: geoData.zoom // starting zoom
});

</script>
@endsection