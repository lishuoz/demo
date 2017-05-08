@extends('layouts.app')

@section('content')
<section class="section">
	<div class="container">
		<div class="columns">
			<div class="column is-2">
				<bl-menu default-item="home"></bl-menu>
			</div>
			<div class="column is-10">
				<bl-header origin="{{$origin}}"></bl-header>
				<div class="columns">
					<div class="column is-8">
						<div class="box">
							<div id='map'></div>
						</div>
						<div class="box">
							<h2 class="title is-5"><strong>March 2017 Top Active Lanes</strong></h2>
							<div class="columns">
								<div class="column is-half">
									<h3 class="title is-6 has-text-centered">Domestic</h3>
									<table class="table">
										<thead>
											<tr>
												<th>Origin</th>
												<th>Destination</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Montreal, QC</td>
												<td>Toronto, ON</td>
											</tr>
											<tr>
												<td>Montreal, QC</td>
												<td>Mississauga, ON</td>
											</tr>
											<tr>
												<td>Toronto, ON</td>
												<td>Montreal, QC</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="column is-half">
									<h3 class="title is-6 has-text-centered">Cross Border</h3>
									<table class="table">
										<thead>
											<tr>
												<th>Origin</th>
												<th>Destination</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Laredo, TX</td>
												<td>Toronto, ON</td>
											</tr>
											<tr>
												<td>Chicago, IL</td>
												<td>Toronto, ON</td>
											</tr>
											<tr>
												<td>Mcallen, TX</td>
												<td>Toronto, ON</td>
											</tr>
										</tbody>
									</table>
									<a href="/loads" class="button is-primary is-fullwidth">Check My Lane</a>
								</div>
							</div>
							
						</div>
						<div class="box">
							<h2 class="title is-5"><strong>March 2017 Top Active Lanes</strong></h2>
							<div class="columns">
								<div class="column is-half">
									<h3 class="title is-6 has-text-centered">Domestic</h3>
									<table class="table">
										<thead>
											<tr>
												<th>Origin</th>
												<th>Destination</th>
												<th>$ Per Mile</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Regina</td>
												<td>Toronto</td>
												<td><strong>2.24</strong></td>
											</tr>
											<tr>
												<td>Toronto</td>
												<td>Regina</td>
												<td><strong>2.75</strong></td>
											</tr>
											<tr>
												<td>Moncton</td>
												<td>Halifax</td>
												<td><strong>3.51</strong></td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="column is-half">
									<h3 class="title is-6 has-text-centered">Cross Border</h3>
									<table class="table">
										<thead>
											<tr>
												<th>Origin</th>
												<th>Destination</th>
												<th>$ Per Mile</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Seattle</td>
												<td>Calgary</td>
												<td><strong>3.16</strong></td>
											</tr>
											<tr>
												<td>Atlanta</td>
												<td>London</td>
												<td><strong>2.70</strong></td>
											</tr>
											<tr>
												<td>Houston</td>
												<td>London</td>
												<td><strong>2.06</strong></td>
											</tr>
										</tbody>
									</table>
									<a href="/loads" class="button is-primary is-fullwidth">Check My Lane</a>
								</div>
							</div>
						</div>
						<div class="box">
							<canvas id="lineChart"></canvas>
						</div>
					</div>
					<div class="column is-4">
						<div class="box">
							<h2 class="title is-5"><strong>Live loads</strong></h2>
							<ul id="liveloads">
							</ul>
							<a href="/loads" class="button is-primary is-fullwidth">Find More Loads</a>
						</div>
						
						<div class="box">
							<canvas id="doughnutChart"></canvas>
						</div>
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
<script src="{{ asset('/js/data-charts.js') }}"></script>
<script type="text/javascript">
	var origin = document.getElementById('origin').innerHTML;

	var features = [];
	var liveloads = [];

	//call function to extract region
	var region = extractRegion(origin);

	//Set default geo to Canada
	var geoData = { 
		center: [-97.48, 55.11], 
		zoom: 2.5
	};

	var liveorigin = '';

	//call function to get coordinate for each region
	getCoordinate(region);

	mapboxgl.accessToken = 'pk.eyJ1IjoibGlzaHVveiIsImEiOiJjaW8xdHQzNXIxYWx1dWdseTcxZG1wYzJmIn0.cUxYf1SfN7aEOUJjcjqCXA';

	var map = new mapboxgl.Map({
		container: 'map', 
		style: 'mapbox://styles/mapbox/light-v9', 
		center: geoData.center, 
		zoom: geoData.zoom,
		maxZoom: 5,
		minZoom: 2.5
	});

	var liveload = {
		"geometry": 
		{
			"type": "Point", 
			"coordinates": [,]
		}, 
		"type": "Feature", 
	};

	//fetch JSON file
	fetchJSON();

	//extract region
	function extractRegion(origin){
		var splits = origin.split(", ");
		return region = splits[1];
	}

	//get coordinate for each region
	function getCoordinate(region){
		if(region == "ON"){
			geoData = { 
				center: [-85.224413, 50.789227], 
				zoom: 3.5
			}
		}else if(region == "QC"){
			geoData = { 
				center: [-72.294306, 47.103077], 
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

	function fetchJSON(){

		var self = this;
		axios.get('/fetchAllLoads', {
			params:{
				origin: region
			}
		})
		.then(function (response) {

			var loads = response.data;
			var liveloads = loads.slice(0, 8);
			var features = toGeoJSON(loads);
			loadMapData(features);
			renderTable(liveloads);
			// every two second get a live load
			window.setInterval(function(){
				var liveload = {
					"geometry": 
					{
						"type": "Point", 
						"coordinates": [-67.597613198896298, 29.691389732499555]
					}, 
					"type": "Feature", 
					"origin_city" : "",
					"origin_province" : "",
					"destination_city" : "",
					"destination_province" : "",
				};
				getLiveLoad(loads, liveload);
				updateTable(liveloads, liveload);
				// updateMap(liveload, map);
				map.getSource('drone').setData(liveload);

			}, 3500);
		})
		.catch(function (error) {
			console.log(error);
		})
	}

	function renderTable(liveloads){
		$("#liveloads").empty();
		var list = "";
		for(var i=0; i<liveloads.length; i++){
			list +="<li>"+liveloads[i].origin_city+", "+liveloads[i].origin_province+"-> "+liveloads[i].destination_city+", "+liveloads[i].destination_province+"</li>";
		}
		$("#liveloads").append(list);
	}

	function toGeoJSON(loads){
		var features = [];
		for(var i=0; i<loads.length; i++){
			features.push({
				"type": "Feature",
				"properties": {},
				"geometry": {
					"type": "Point",
					"coordinates": [loads[i].origin_longitude, loads[i].origin_latitude]
				},
			})
		}
		return features;
	}

	function getLiveLoad(loads, liveload){
		var random = getRandomInt(0, loads.length);
		liveload.geometry.coordinates = [loads[random].origin_longitude, loads[random].origin_latitude];
		liveload.origin_city = loads[random].origin_city;
		liveload.origin_province = loads[random].origin_province;
		liveload.destination_city = loads[random].destination_city;
		liveload.destination_province = loads[random].destination_province;
	}

	function updateMap(liveload, map){
		showLiveData;
	}

	function updateTable(liveloads, liveload){
		liveloads.unshift(liveload);
		liveloads.pop();
		renderTable(liveloads);
	}

	function getRandomInt(min, max) {
		min = Math.ceil(min);
		max = Math.floor(max);
		return Math.floor(Math.random() * (max - min)) + min;
	}

	function loadMapData(features){
		map.on('load', function () {
			map.addSource("museums", {
				"type": "geojson",
				"data": {
					"type": "FeatureCollection",
					"features": features
				}
			});

			map.addLayer({
				'id': 'museums',
				'type': 'circle',
				'source': 'museums',
				'layout': {
					'visibility': 'visible'
				},
				'paint': {
					'circle-radius': 4,
					'circle-color': 'rgba(0,84,158, 1)'
				},
			});

			map.addSource('drone', 
			{ 
				"type": 'geojson', 
				"data": liveload,
			});
			map.addLayer({
				"id": "drone",
				"type": "circle",
				"source": "drone",
				'layout': {
					'visibility': 'visible'
				},
				'paint': {
					'circle-radius': 7,
					'circle-color': 'rgba(255,153,51,1)'
				},
			});
		});
	}
</script>
@endsection