// Morris Bar No Axis
Morris.Bar({
	element: 'barNoAxis',
	axes: false,
	data: [
		{x: '2017 Q1', y: 3, z: 2},
		{x: '2017 Q2', y: 2, z: 1},
		{x: '2017 Q3', y: 5, z: 2},
		{x: '2017 Q4', y: 2, z: 4},
		{x: '2016 Q1', y: 3, z: 2},
		{x: '2016 Q2', y: 2, z: 1},
		{x: '2016 Q3', y: 5, z: 2},
		{x: '2016 Q4', y: 2, z: 4},
	],
	xkey: 'x',
	ykeys: ['y', 'z'],
	labels: ['Y', 'Z'],
	resize: true,
	hideHover: "auto",
	gridLineColor: "#3d4767",
	barColors:['#2f71c1', '#f53a40', '#f3a33c'],
});