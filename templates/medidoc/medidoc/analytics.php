<?php include('header.php'); ?>
  
    <div class="app-main__inner">
        <div class="app-page-title pt-18">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="card-body p-0">
                        <div class="mr-2 btn-group">
                            <h5 style="font-size: 18px;font-weight: 700;padding-bottom: 10px;">Analytics &emsp;| &emsp;</h5>
                            <p style="font-size: 14px;">Filter by: </p>

                        </div>

                        <div class="mr-2 btn-group" style="margin-top: -20px;">
                            <select name="select" id="exampleSelect" class="form-control custom-sort">
                                <option>All</option>
                                <option>Bahunepati</option>
                                <option>Bode</option>
                                <option>Dhulikhel</option>
                                <option>Paanchkhal</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="page-title-actions">
                    <div class="d-inline-block">
                        <a class="mb-2 mr-2 btn btn-light">
                                <span class="btn-icon-wrapper opacity-7">
                                <i class="fas fa-print"></i>
                            </span>
                        </a>
                    </div>

                    <div class="d-inline-block">
                        <a class="mb-2 mr-2 btn btn-light">
                                <span class="btn-icon-wrapper pr-2 opacity-7">
                                <i class="fas fa-filter"></i>
                            </span>
                            Fitler
                        </a>
                    </div>

                    <div class="d-inline-block">
                        <a class="mb-2 mr-2 btn btn-light">
                                <span class="btn-icon-wrapper pr-2 opacity-7">
                                <i class="fas fa-edit"></i>
                            </span>
                            Edit Column
                        </a>
                    </div>
                    <div class="d-inline-block">
                        <a class="mb-2 mr-2 btn btn-light">
                                <span class="btn-icon-wrapper pr-2 opacity-7">
                                <i class="fas fa-plus"></i>
                            </span>
                            Add New
                        </a>
                    </div>
                </div>    
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="card mb-3">
                    <figure class="highcharts-figure">
                        <div id="bmi"></div>
                    </figure>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-3">
                    <figure class="highcharts-figure">
                        <div id="waist"></div>
                    </figure>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-3">
                    <figure class="highcharts-figure">
                        <div id="mean-bp"></div>
                    </figure>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-3">
                    <figure class="highcharts-figure">
                        <div id="weight-distribution"></div>
                    </figure>
                </div>
            </div>
            
        </div>
    </div>

    <script type="text/javascript">
        Highcharts.chart('bmi', {

          chart: {
            type: 'boxplot'
          },

          title: {
            text: 'BMI'
          },

          legend: {
            enabled: false
          },

          xAxis: {
            categories: ['1', '2', '3', '4', '5'],
            title: {
              text: 'Experiment No.'
            }
          },

          yAxis: {
            title: {
              text: 'Observations'
            },
            plotLines: [{
              value: 932,
              color: 'red',
              width: 1,
              label: {
                text: 'Theoretical mean: 932',
                align: 'center',
                style: {
                  color: 'gray'
                }
              }
            }]
          },

          series: [{
            name: 'Observations',
            data: [
              [760, 801, 848, 895, 965],
              [733, 853, 939, 980, 1080],
              [714, 762, 817, 870, 918],
              [724, 802, 806, 871, 950],
              [834, 836, 864, 882, 910]
            ],
            tooltip: {
              headerFormat: '<em>Experiment No {point.key}</em><br/>'
            }
          }, {
            name: 'Outliers',
            color: Highcharts.getOptions().colors[0],
            type: 'scatter',
            data: [ // x, y positions where 0 is the first category
              [0, 644],
              [4, 718],
              [4, 951],
              [4, 969]
            ],
            marker: {
              fillColor: 'white',
              lineWidth: 1,
              lineColor: Highcharts.getOptions().colors[0]
            },
            tooltip: {
              pointFormat: 'Observation: {point.y}'
            }
          }]
        });

        Highcharts.chart('waist', {

          chart: {
            type: 'boxplot'
          },

          title: {
            text: 'Waist Circumference'
          },

          legend: {
            enabled: false
          },

          xAxis: {
            categories: ['1', '2', '3', '4', '5'],
            title: {
              text: 'Experiment No.'
            }
          },

          yAxis: {
            title: {
              text: 'Observations'
            },
            plotLines: [{
              value: 932,
              color: 'red',
              width: 1,
              label: {
                text: 'Theoretical mean: 932',
                align: 'center',
                style: {
                  color: 'gray'
                }
              }
            }]
          },

          series: [{
            name: 'Observations',
            data: [
              [760, 801, 848, 895, 965],
              [733, 853, 939, 980, 1080],
              [714, 762, 817, 870, 918],
              [724, 802, 806, 871, 950],
              [834, 836, 864, 882, 910]
            ],
            tooltip: {
              headerFormat: '<em>Experiment No {point.key}</em><br/>'
            }
          }, {
            name: 'Outliers',
            color: Highcharts.getOptions().colors[0],
            type: 'scatter',
            data: [ // x, y positions where 0 is the first category
              [0, 644],
              [4, 718],
              [4, 951],
              [4, 969]
            ],
            marker: {
              fillColor: 'white',
              lineWidth: 1,
              lineColor: Highcharts.getOptions().colors[0]
            },
            tooltip: {
              pointFormat: 'Observation: {point.y}'
            }
          }]
        });

        Highcharts.chart('mean-bp', {
          chart: {
            type: 'bar'
          },
          title: {
            text: 'Mean Blood Pressure'
          },
          xAxis: {
            categories: ['Bahunepati', 'Bode', 'Dhulikhel', 'Panauti', 'Paanchkhal'],
            title: {
              text: null
            }
          },
          yAxis: {
            min: 0,
            title: {
              text: 'Population (millions)',
              align: 'high'
            },
            labels: {
              overflow: 'justify'
            }
          },
          tooltip: {
            valueSuffix: ' millions'
          },
          plotOptions: {
            bar: {
              dataLabels: {
                enabled: true
              }
            }
          },
          legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'top',
            x: -40,
            y: 80,
            floating: true,
            borderWidth: 1,
            backgroundColor:
              Highcharts.defaultOptions.legend.backgroundColor || '#FFFFFF',
            shadow: true
          },
          credits: {
            enabled: false
          },
          series: [{
            name: 'Systolic BP',
            data: [107, 31, 635, 203, 2]
          }, {
            name: 'Diastolic BP',
            data: [133, 156, 947, 408, 6]
          }]
        });

        Highcharts.chart('weight-distribution', {

          chart: {
            type: 'boxplot'
          },

          title: {
            text: 'Weight Distribution'
          },

          legend: {
            enabled: false
          },

          xAxis: {
            categories: ['1', '2', '3', '4', '5'],
            title: {
              text: 'Experiment No.'
            }
          },

          yAxis: {
            title: {
              text: 'Observations'
            },
            plotLines: [{
              value: 932,
              color: 'red',
              width: 1,
              label: {
                text: 'Theoretical mean: 932',
                align: 'center',
                style: {
                  color: 'gray'
                }
              }
            }]
          },

          series: [{
            name: 'Observations',
            data: [
              [760, 801, 848, 895, 965],
              [733, 853, 939, 980, 1080],
              [714, 762, 817, 870, 918],
              [724, 802, 806, 871, 950],
              [834, 836, 864, 882, 910]
            ],
            tooltip: {
              headerFormat: '<em>Experiment No {point.key}</em><br/>'
            }
          }, {
            name: 'Outliers',
            color: Highcharts.getOptions().colors[0],
            type: 'scatter',
            data: [ // x, y positions where 0 is the first category
              [0, 644],
              [4, 718],
              [4, 951],
              [4, 969]
            ],
            marker: {
              fillColor: 'white',
              lineWidth: 1,
              lineColor: Highcharts.getOptions().colors[0]
            },
            tooltip: {
              pointFormat: 'Observation: {point.y}'
            }
          }]
        });
    </script>

<?php include('footer.php'); ?>
        
