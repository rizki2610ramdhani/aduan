var options = {
  chart: {
    height: 300,
    type: 'bar',
    stacked: true,
    toolbar: {
      show: false,
    },
    dropShadow: {
      enabled: true,
      opacity: 0.1,
      blur: 5,
      left: -10,
      top: 10
    },
    zoom: {
			enabled: false
		},
  },
  dataLabels: {
		enabled: false
	},
  plotOptions: {
    bar: {
      horizontal: true,
    },
  },
  stroke: {
    show: false,
  },
  series: [{
    name: 'Marine Sprite',
    data: [44, 55, 41, 37, 22, 43, 21]
  },{
    name: 'Striking Calf',
    data: [53, 32, 33, 52, 13, 43, 32]
  },{
    name: 'Tank Picture',
    data: [12, 17, 11, 9, 15, 11, 20]
  },{
    name: 'Bucket Slope',
    data: [9, 7, 5, 8, 6, 9, 4]
  },{
    name: 'Reborn Kid',
    data: [25, 12, 19, 32, 25, 24, 10]
  }],
  xaxis: {
    categories: [2008, 2009, 2010, 2011, 2012, 2013, 2014],
    labels: {
      formatter: function(val) {
        return val + "K"
      }
    }
  },
  yaxis: {
    title: {
      text: undefined
    },
  },
  tooltip: {
    y: {
      formatter: function(val) {
      	return val + "K"
    	}
	  }
	},
  grid: {
    borderColor: '#404b75',
    strokeDashArray: 5,
    xaxis: {
      lines: {
        show: true
      }
    },   
    yaxis: {
      lines: {
        show: false,
      } 
    },
    padding: {
      top: 0,
      right: 0,
      bottom: 0,
      left: 0
    }, 
  },
	fill: {
		opacity: 1
	},
	legend: {
	  position: 'top',
	  horizontalAlign: 'left',
	  offsetX: 40
	},
	colors: ['#5a8dee', '#f53a40', '#f3a33c', '#2fcc7e'],
}
var chart = new ApexCharts(
  document.querySelector("#basic-bar-stack-graph"),
  options
);
chart.render();