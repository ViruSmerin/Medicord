<?php include('header.php'); ?>
    <style type="text/css">
    	.circle-icon {
		    width: 42px;
		    height: 42px;
		    border-radius: 50%;
		    text-align: center;
		    vertical-align: middle;
		    padding-top: 12px;
		    font-size: 20px;
		    color: white;
		}
		.bg-pink{
		    background: #ffc0c0; 
		}
		.bg-blue{
			background: #AED6F1;
		}
		.bg-orange{
			background: #F5CBA7;
		}
		.bg-green{
			background: #ABEBC6;
		}
		.bg-yellow{
			background: #F9E79F;
		}
		.bg-tuple{
			background: #EBDEF0;
		}
		.bg-or{
			background: #F5B7B1;
		}
		.bg-dgreen{
			background: #CCCCFF;
		}
    </style>
    <div class="app-main__inner">
        <h5 class="dashboard-title">Dashboard</h5> 
        <div class="row">
            
            <div class="col-md-6 col-xl-3">
                <div class="card mb-3 widget-content">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left" style="margin-top: -45px;">
                            <i class="fas fa-users circle-icon bg-pink"></i>
                        </div>
                        <div class="widget-content-right">
                            <div class="widget-heading">Total Patients</div>
                            <div class="widget-numbers"><span>30</span></div>
                            <div class="widget-subheading">4 patients waiting</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="card mb-3 widget-content">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left" style="margin-top: -45px;">
                            <i class="fas fa-star-of-life circle-icon bg-blue"></i>
                        </div>
                        <div class="widget-content-right">
                            <div class="widget-heading">Hypertension Patient</div>
                            <div class="widget-numbers"><span>1896</span></div>
                            <div class="widget-subheading">78 new patients</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="card mb-3 widget-content">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left" style="margin-top: -45px;">
                            <i class="fas fa-file-medical circle-icon bg-orange"></i>
                        </div>
                        <div class="widget-content-right">
                            <div class="widget-heading">Diabetic Patient</div>
                            <div class="widget-numbers"><span>1896</span></div>
                            <div class="widget-subheading">78 new patients</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="card mb-3 widget-content">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left" style="margin-top: -45px;">
                            <i class="fas fa-heartbeat circle-icon bg-yellow"></i>
                        </div>
                        <div class="widget-content-right">
                            <div class="widget-heading">Diabetic Hypertension</div>
                            <div class="widget-numbers"><span>Rs. 22.4 K</span></div>
                            <div class="widget-subheading">24% Increase</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-9">
            	<div class="card mb-3">
            		<h6 class="p-20 bold">Patient Inflow</h6>
            		<figure class="highcharts-figure pl-10">
	                    <div id="follow-up"></div>
	                </figure>
            	</div>
            </div>
            <div class="col-md-3">
                <div class="card mb-3">
            		<h6 class="p-20 bold">Age</h6>
                    <figure class="highcharts-figure">
	                    <div id="age"></div>
	                </figure>
                </div>  
            </div>
        </div>
    </div>

    <script type="text/javascript">
        Highcharts.chart('follow-up', {
            chart: {
                type: 'areaspline'
            },
            title: {
                text: ' '
            },
            xAxis: {
                categories: [
                    'Monday',
                    'Tuesday',
                    'Wednesday',
                    'Thursday',
                    'Friday',
                    'Saturday',
                    'Sunday'
                ],
                plotBands: [{ 
                    from: 4.5,
                    to: 6.5,
                    color: 'rgba(68, 170, 213, .2)'
                }]
            },
            yAxis: {
                title: {
                    text: ''
                }
            },
            tooltip: {
                shared: true,
                valueSuffix: ' units'
            },
            credits: {
                enabled: false
            },
            plotOptions: {
                areaspline: {
                    fillOpacity: 0.5
                }
            },
            series: [{
            	name: 'This Week',
                data: [20, 19, 14, 12, 21, 15, 14]
            }, {
            	name: 'Last Week',
                data: [3, 4, 3, 5, 4, 10, 12]
            }]
        });

		Highcharts.chart('age', {
		  chart: {
		    type: 'column'
		  },
		  title: {
		    text: ''
		  },
		  accessibility: {
		    announceNewData: {
		      enabled: true
		    }
		  },
		  xAxis: {
		    type: 'category'
		  },
		  yAxis: {
            title: {
                text: ''
            }
          },
		  legend: {
		    enabled: false
		  },
		  plotOptions: {
		    series: {
		      borderWidth: 0,
		      dataLabels: {
		        enabled: true,
		        format: '{point.y:.1f}%'
		      }
		    }
		  },

		  tooltip: {
		    headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
		    pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
		  },

		  series: [
		    {
		      name: "Patients",
		      colorByPoint: true,
		      data: [
		        {
		          name: "5-11 yo",
		          y: 62.74,
		          drilldown: "5-11 yo"
		        },
		        {
		          name: "12-25 yo",
		          y: 10.57,
		          drilldown: "12-25 yo"
		        },
		        {
		          name: "26-45 yo",
		          y: 7.23,
		          drilldown: "26-45 yo"
		        },
		        {
		          name: "46-65 yo",
		          y: 5.58,
		          drilldown: "46-65 yo"
		        }
		      ]
		    }
		  ]
		});
    </script>

<?php include('footer.php'); ?>
