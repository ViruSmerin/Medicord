<?php include('header.php'); ?>

    <div class="app-main__inner">
        <h5 class="dashboard-title">Dashboard</h5> 
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-4 col-xl-4">
                        <div class="card mb-3 widget-content">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left" style="margin-top: -25px;">
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
                    <div class="col-md-4 col-xl-4">
                        <div class="card mb-3 widget-content">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left" style="margin-top: -25px;">
                                    <i class="fas fa-heartbeat circle-icon bg-blue"></i>
                                </div>
                                <div class="widget-content-right">
                                    <div class="widget-heading">Intervention Patient</div>
                                    <div class="widget-numbers"><span>1896</span></div>
                                    <div class="widget-subheading">78 new patients</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-xl-4">
                        <div class="card mb-3 widget-content">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left" style="margin-top: -25px;">
                                    <i class="fas fa-star-of-life circle-icon bg-orange"></i>
                                </div>
                                <div class="widget-content-right">
                                    <div class="widget-heading">Control Patient</div>
                                    <div class="widget-numbers"><span>1896</span></div>
                                    <div class="widget-subheading">78 new patients</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-xl-4">
                        <div class="card mb-3 widget-content">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left" style="margin-top: -25px;">
                                    <i class="fas fa-star-of-life circle-icon bg-orange"></i>
                                </div>
                                <div class="widget-content-right">
                                    <div class="widget-heading">Cohort Patient</div>
                                    <div class="widget-numbers"><span>1896</span></div>
                                    <div class="widget-subheading">78 new patients</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-xl-12">
                        <div class="card mb-3">
                            <h6 class="p-20 bold pb-10">Patient Inflow Statistics</h6>
                            <figure class="highcharts-figure pl-10">
                                <div id="follow-up"></div>
                            </figure>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-6">
                        <div class="card mb-3">
                            <h6 class="p-20 bold pb-0">Patient By Gender</h6>
                            <figure class="highcharts-figure">
                                <div id="gender"></div>
                            </figure>
                        </div>  
                    </div>
                    <div class="col-md-6 col-xl-6">
                        <div class="card mb-3">
                            <h6 class="p-20 bold pb-0">Top Patient By Group</h6>
                            <figure class="highcharts-figure">
                                <div id="age"></div>
                            </figure>
                        </div>  
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row">
                    <div class="col-12">
                        <div class="card mb-3 h-500">
                            <h6 class="p-20 bold pb-10">Scheduled Patients</h6>
                            
                            <div class="p-20 pt-0">
                                <ul class="rm-list-borders rm-list-borders-scroll list-group list-group-flush">
                                    <li class="list-group-item">
                                        <div class="widget-content p-0">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left mr-3">
                                                    <img width="42" class="rounded-circle" src="./assets/images/avatars/1.png" alt="">
                                                </div>
                                                <div class="widget-content-left">
                                                    <div class="widget-heading">Ella-Rose Henry</div>
                                                    <div class="widget-subheading">21-01-2021</div>
                                                </div>
                                                <div class="widget-content-right-force">
                                                    <a href="">
                                                        <i class="fas fa-ellipsis-h right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="widget-content p-0">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left mr-3">
                                                    <img width="42" class="rounded-circle" src="./assets/images/avatars/2.png" alt="">
                                                </div>
                                                <div class="widget-content-left">
                                                    <div class="widget-heading">Ruben Tillman</div>
                                                    <div class="widget-subheading">21-01-2021</div>
                                                </div>
                                                <div class="widget-content-right-force">
                                                    <a href="">
                                                        <i class="fas fa-ellipsis-h right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="widget-content p-0">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left mr-3">
                                                    <img width="42" class="rounded-circle" src="./assets/images/avatars/3.png" alt="">
                                                </div>
                                                <div class="widget-content-left">
                                                    <div class="widget-heading">Vinnie Wagstaff</div>
                                                    <div class="widget-subheading">21-01-2021</div>
                                                </div>
                                                <div class="widget-content-right-force">
                                                    <a href="">
                                                        <i class="fas fa-ellipsis-h right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="widget-content p-0">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left mr-3">
                                                    <img width="42" class="rounded-circle" src="./assets/images/avatars/4.png" alt="">
                                                </div>
                                                <div class="widget-content-left">
                                                    <div class="widget-heading">Ella-Rose Henry</div>
                                                    <div class="widget-subheading">21-01-2021</div>
                                                </div>
                                                <div class="widget-content-right-force">
                                                    <a href="">
                                                        <i class="fas fa-ellipsis-h right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="widget-content p-0">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left mr-3">
                                                    <img width="42" class="rounded-circle" src="./assets/images/avatars/5.png" alt="">
                                                </div>
                                                <div class="widget-content-left">
                                                    <div class="widget-heading">Ruben Tillman</div>
                                                    <div class="widget-subheading">22-01-2021</div>
                                                </div>
                                                <div class="widget-content-right-force">
                                                    <a href="">
                                                        <i class="fas fa-ellipsis-h right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="widget-content p-0">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left mr-3">
                                                    <img width="42" class="rounded-circle" src="./assets/images/avatars/1.png" alt="">
                                                </div>
                                                <div class="widget-content-left">
                                                    <div class="widget-heading">Ella-Rose Henry</div>
                                                    <div class="widget-subheading">22-01-2021</div>
                                                </div>
                                                <div class="widget-content-right-force">
                                                    <a href="">
                                                        <i class="fas fa-ellipsis-h right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="spaceBelow16">
                            <div class="dotNew">
                                <div class="dotPulse"></div>
                            </div>
                            <div class="card-notice">
                                <h6 class="bold pb-10">Notifications</h6>
                                <h1>Chronic condition</h1>
                                <div class="date-tag requestedDate">
                                    <h2>Not scheduled</h2>
                                </div>
                                <h2 class="floatRight status requested">Requested</h2>
                                <p>Over the last two weeks I’ve experienced some extremely sharp pain in the top part of my foot...</p>
                                <div class="cardFooter">
                                    <div class="doctor">
                                        <img src="./assets/images/avatars/4.png" width=42px height=42px>
                                        <h2 class="floatRight greyText mt-14">Dr. Stewart</h2>
                                    </div>
                                    <h2 class="floatRight greyText mt-14">For Ilya</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
        </div>
    </div>

    <script type="text/javascript">
        Highcharts.chart('follow-up', {
            chart: {
                type: 'spline',
                height: 260,
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
            responsive:{
                rules:[{
                    condition:{
                        maxHeight: 200
                    }
                }]
            },
            colors: ['#5DADE2', '#F0B27A'],
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
            type: 'column',
            height: 200,
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
          colors: ['#AED6F1', '#A3E4D7', '#F5CBA7', '#F5B7B1'],
          series: [
            {
              name: "Patients",
              colorByPoint: true,
              data: [
                {
                  name: "5-11 yo",
                  y: 22.74,
                  drilldown: "5-11 yo"
                },
                {
                  name: "12-25 yo",
                  y: 32.57,
                  drilldown: "12-25 yo"
                },
                {
                  name: "26-45 yo",
                  y: 40.23,
                  drilldown: "26-45 yo"
                },
                {
                  name: "46-65 yo",
                  y: 15.58,
                  drilldown: "46-65 yo"
                }
              ]
            }
          ]
        });
        
        Highcharts.chart('gender', {
          chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie',
            height: 200
          },
          title: {
            text: ''
          },
          tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
          },
          accessibility: {
            point: {
              valueSuffix: '%'
            }
          },
          plotOptions: {
            pie: {
              allowPointSelect: true,
              cursor: 'pointer',
              dataLabels: {
                enabled: false
              },
              showInLegend: true
            }
          },
          colors: ['#5DADE2', '#D6EAF8'],
          series: [{
            name: 'Gender',
            colorByPoint: true,
            data: [{
              name: 'Female',
              y: 61.41,
              sliced: true,
              selected: true
            }, {
              name: 'Male',
              y: 11.84
            }]
          }]
        });
    </script>

<?php include('footer.php'); ?>
