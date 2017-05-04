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
		"#00549E",
		"#FF9933",
		"#CAD2D3"
		],
		hoverBackgroundColor: [
		"#00549E",
		"#FF9933",
		"#CAD2D3"
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