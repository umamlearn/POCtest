@extends('layouts.dashboard-dark-layout')
@section('title','Genset Details | Fuel Manager')

@section('content')

<!-- Main content -->
<!-- Genset 1 Row -->
<div class="row">
  <!-- Genset Card -->
  <div class="col-lg-12">
      <div class="small-box card-outline card-info bg-secondary shadow-none">
        <div class="card-header bg-dark">
          
          <div class="row">

            <div class="col-lg-10">
              <h3>Genset 1</h3>
            </div>

            <div class="float-right">
                <img src="{{ url('storage/images/genset-white.png') }}" alt="" title="" style="height: 100px;"/>
            </div>

          </div>

          
        </div>
        <!-- /.card-header -->
        <div class="inner">
          <div class="row">
            
            <!-- Genset Card -->
            <div class="col-lg-6">
                <div class="small-box card-success shadow-none bg-info">
                  <div class="card-header shadow-none">
                      <div class="row">
                        <div class="col-lg-6">
                          <h3>Normal</h3>
                          <p>Power Status</p>
                        </div>
                        <div class="col-lg-6">
                          <h3>ON</h3>
                          <p>Genset Status</p>
                        </div>
                      </div>
                  </div>
                  <!-- /.card-header -->
                  <!-- Genset Simple Card -->
                  <div class="col-lg-12">
                    <!-- small card -->
                    <div class="small-box bg-info shadow-none">
                      <div class="inner">
                        <p>Run Hour</p>
                        <h3>44 jam</h3>
                      </div>
                      <div class="icon">
                        <i class="fas fa-clock"></i>
                      </div>
                      
                    </div>
                  </div>
                  <!-- /.col -->
                  <!-- /.card-body -->

                </div>
            </div>
            <!-- End of Genset Card -->

          </div>
          <!-- /.row -->

          <div class="row">
              <div class="col-lg-6">
              <!-- Line chart -->
              <div class="card card-info card-outline bg-secondary">
                  <div class="card-header bg-dark">
                    <h4 class="card-title">
                        Run Hour / Hari
                    </h4>

                  </div>
                  <div class="card-body">
                    <div id="line1-chart" style="height: 300px;"></div>
                  </div>
                  <!-- /.card-body-->
              </div>
              <!-- /.card -->

              </div>
              <!-- /.col -->

              
              <div class="col-6">
                <!-- Table Card -->
                <div class="card card-info card-outline bg-secondary">
                  <div class="card-header bg-dark bg-dark">
                    <h4 class="card-title">History Status</h4>

                    
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body table-responsive p-0" style="height: 340px;">
                    <table class="table table-head-fixed table-striped bg-secondary">
                      <thead style="color : #000;">
                        <tr>
                          <th>Date</th>
                          <th>Time</th>
                          <th>Power Status</th>                                
                          <th>Genset Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>01-10-2022</td>
                          <td>09:00:00</td>
                          <td>Normal</td>
                          <td>OFF</td>
                        </tr>
                        <tr class="bg-success">
                          <td>01-10-2022</td>
                          <td>10:00:00</td>
                          <td>Normal</td>
                          <td>ON</td>
                        </tr>
                        <tr >
                          <td>01-10-2022</td>
                          <td>11:00:00</td>
                          <td>Normal</td>
                          <td>OF</td>
                        </tr>
                        <tr class="bg-success">
                          <td>01-10-2022</td>
                          <td>12:00:00</td>
                          <td>Normal</td>
                          <td>ON</td>
                        </tr>
                        <tr class="bg-success">
                          <td>01-10-2022</td>
                          <td>13:00:00</td>
                          <td>Normal</td>
                          <td>ON</td>
                        </tr>
                        <tr class="bg-danger">
                          <td>01-10-2022</td>
                          <td>14:00:00</td>
                          <td>Failed</td>
                          <td>Failed</td>
                        </tr>
                        <tr class="bg-danger">
                          <td>01-10-2022</td>
                          <td>15:00:00</td>
                          <td>Failed</td>
                          <td>Fuse Break</td>
                        </tr>
                        <tr class="bg-success">
                          <td>01-10-2022</td>
                          <td>16:00:00</td>
                          <td>Normal</td>
                          <td>OFF</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>
              <!-- /.col -->

          </div>
          <!-- /.row -->

        </div>
        <!-- /.card-body -->
      </div>
  </div>
  <!-- End of Genset Card -->


      
</div>
<!-- \.row -->


<!-- Genset 1 Row -->
<div class="row">
  <!-- Genset Card -->
  <div class="col-lg-12">
      <div class="small-box card-outline card-info bg-secondary shadow-none">
        <div class="card-header bg-dark">
          
          <div class="row">

            <div class="col-lg-10">
              <h3>Genset 2</h3>
            </div>

            <div class="float-right">
                <img src="{{ url('storage/images/genset-white.png') }}" alt="" title="" style="height: 100px;"/>
            </div>

          </div>

          
        </div>
        <!-- /.card-header -->
        <div class="inner">
          <div class="row">
            
            <!-- Genset Card -->
            <div class="col-lg-6">
                <div class="small-box card-success shadow-none bg-info">
                  <div class="card-header shadow-none">
                      <div class="row">
                        <div class="col-lg-6">
                          <h3>Normal</h3>
                          <p>Power Status</p>
                        </div>
                        <div class="col-lg-6">
                          <h3>ON</h3>
                          <p>Genset Status</p>
                        </div>
                      </div>
                  </div>
                  <!-- /.card-header -->
                  <!-- Genset Simple Card -->
                  <div class="col-lg-12">
                    <!-- small card -->
                    <div class="small-box bg-info shadow-none">
                      <div class="inner">
                        <p>Run Hour</p>
                        <h3>44 jam</h3>
                      </div>
                      <div class="icon">
                        <i class="fas fa-clock"></i>
                      </div>
                      
                    </div>
                  </div>
                  <!-- /.col -->
                  <!-- /.card-body -->

                </div>
            </div>
            <!-- End of Genset Card -->

          </div>
          <!-- /.row -->

          <div class="row">
              <div class="col-lg-6">
              <!-- Line chart -->
              <div class="card card-info card-outline bg-secondary">
                  <div class="card-header bg-dark">
                    <h4 class="card-title">
                        Run Hour / Hari
                    </h4>

                  </div>
                  <div class="card-body">
                    <div id="line1-chart" style="height: 300px;"></div>
                  </div>
                  <!-- /.card-body-->
              </div>
              <!-- /.card -->

              </div>
              <!-- /.col -->

              
              <div class="col-6">
                <!-- Table Card -->
                <div class="card card-info card-outline bg-secondary">
                  <div class="card-header bg-dark bg-dark">
                    <h4 class="card-title">History Status</h4>

                    
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body table-responsive p-0" style="height: 340px;">
                    <table class="table table-head-fixed table-striped bg-secondary">
                      <thead style="color : #000;">
                        <tr>
                          <th>Date</th>
                          <th>Time</th>
                          <th>Power Status</th>                                
                          <th>Genset Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>01-10-2022</td>
                          <td>09:00:00</td>
                          <td>Normal</td>
                          <td>OFF</td>
                        </tr>
                        <tr class="bg-success">
                          <td>01-10-2022</td>
                          <td>10:00:00</td>
                          <td>Normal</td>
                          <td>ON</td>
                        </tr>
                        <tr >
                          <td>01-10-2022</td>
                          <td>11:00:00</td>
                          <td>Normal</td>
                          <td>OF</td>
                        </tr>
                        <tr class="bg-success">
                          <td>01-10-2022</td>
                          <td>12:00:00</td>
                          <td>Normal</td>
                          <td>ON</td>
                        </tr>
                        <tr class="bg-success">
                          <td>01-10-2022</td>
                          <td>13:00:00</td>
                          <td>Normal</td>
                          <td>ON</td>
                        </tr>
                        <tr class="bg-danger">
                          <td>01-10-2022</td>
                          <td>14:00:00</td>
                          <td>Failed</td>
                          <td>Failed</td>
                        </tr>
                        <tr class="bg-danger">
                          <td>01-10-2022</td>
                          <td>15:00:00</td>
                          <td>Failed</td>
                          <td>Fuse Break</td>
                        </tr>
                        <tr class="bg-success">
                          <td>01-10-2022</td>
                          <td>16:00:00</td>
                          <td>Normal</td>
                          <td>OFF</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>
              <!-- /.col -->

          </div>
          <!-- /.row -->

        </div>
        <!-- /.card-body -->
      </div>
  </div>
  <!-- End of Genset Card -->


      
</div>
<!-- \.row -->


<!-- Overview GENSET 2 Card -->
<div class="row">
    <div class="col-lg-4 col-6">
        <div class="small-box card-primary">
        <div class="card-header">
            <h3 class="card-title">Genset 2</h3>
        </div>
        <!-- /.card-header -->
        <div class="inner">
            <div class="row">
            
            <div class="col-lg-6 col-6">
                <div class="info-box shadow-none bg-info">
                <span class="info-box-icon"><i class="fas fa-clock"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Run Hour</span>
                    <span class="info-box-number">44:05:45</span>
                </div>
                <!-- /.info-box-content -->
                </div>
            </div>

            
            <div class="col-lg-6 col-6">
                <div class="info-box shadow-none bg-success">
                <span class="info-box-icon"><i class="fas fa-bolt" style="color:white"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Konsumsi per jam</span>
                    <span class="info-box-number">20 Watt/hour</span>
                </div>
                <!-- /.info-box-content -->
                </div>
            </div>

            </div>
            <!-- /.row -->                  
        </div>
        <!-- /.card-body -->
        <a href="#" class="small-box-footer bg-info">
                More info <i class="fas fa-arrow-circle-right"></i>
                </a>
        </div>
    </div>
</div>
<!-- \.row -->

<!-- Charts Row -->
<div class="row">
    <div class="col-md-6">
    <!-- Line chart -->
    <div class="card card-primary card-outline">
        <div class="card-header">
        <h3 class="card-title">
            <i class="far fa-chart-bar"></i>
            Run Hour / Hari
        </h3>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
            <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove">
            <i class="fas fa-times"></i>
            </button>
        </div>
        </div>
        <div class="card-body">
        <div id="line3-chart" style="height: 300px;"></div>
        </div>
        <!-- /.card-body-->
    </div>
    <!-- /.card -->

    </div>
    <!-- /.col -->

    <div class="col-md-6">
    <!-- Line chart 2 -->
    <div class="card card-primary card-outline">
        <div class="card-header">
        <h3 class="card-title">
            <i class="far fa-chart-bar"></i>
            Suhu / Jam
        </h3>

        
        </div>
        <div class="card-body">
        <div id="line4-chart" style="height: 300px;"></div>
        </div>
        <!-- /.card-body-->
    </div>
    <!-- /.card -->
    </div>
    <!-- /.col -->
</div>
<!-- /.row -->


<!-- Overview GENSET 3 Card -->
<div class="row">
    <div class="col-lg-4 col-6">
        <div class="small-box card-primary">
        <div class="card-header">
            <h3 class="card-title">Genset 3</h3>
        </div>
        <!-- /.card-header -->
        <div class="inner">
            <div class="row">
            
            <div class="col-lg-6 col-6">
                <div class="info-box shadow-none bg-info">
                <span class="info-box-icon"><i class="fas fa-clock"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Run Hour</span>
                    <span class="info-box-number">44:05:45</span>
                </div>
                <!-- /.info-box-content -->
                </div>
            </div>

            
            <div class="col-lg-6 col-6">
                <div class="info-box shadow-none bg-warning">
                <span class="info-box-icon"><i class="fas fa-bolt" style="color:white"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Konsumsi per jam</span>
                    <span class="info-box-number">44 Watt/hour</span>
                </div>
                <!-- /.info-box-content -->
                </div>
            </div>

            </div>
            <!-- /.row -->                  
        </div>
        <!-- /.card-body -->
        <a href="#" class="small-box-footer bg-info">
                More info <i class="fas fa-arrow-circle-right"></i>
                </a>
        </div>
    </div>
</div>
<!-- \.row -->


<!-- Charts Row -->
<div class="row">
    <div class="col-md-6">
    <!-- Line chart -->
    <div class="card card-primary card-outline">
        <div class="card-header">
        <h3 class="card-title">
            <i class="far fa-chart-bar"></i>
            Run Hour / Hari
        </h3>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
            <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove">
            <i class="fas fa-times"></i>
            </button>
        </div>
        </div>
        <div class="card-body">
        <div id="line5-chart" style="height: 300px;"></div>
        </div>
        <!-- /.card-body-->
    </div>
    <!-- /.card -->

    </div>
    <!-- /.col -->

    <div class="col-md-6">
    <!-- Line chart 2 -->
    <div class="card card-primary card-outline">
        <div class="card-header">
        <h3 class="card-title">
            <i class="far fa-chart-bar"></i>
            Suhu / Jam
        </h3>

        
        </div>
        <div class="card-body">
        <div id="line6-chart" style="height: 300px;"></div>
        </div>
        <!-- /.card-body-->
    </div>
    <!-- /.card -->
    </div>
    <!-- /.col -->
</div>
<!-- /.row -->
<!-- /.content -->


@endsection

@section('scripts')
<!-- FLOT CHARTS -->
<script src="../../plugins/flot/jquery.flot.js"></script>
<!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
<script src="../../plugins/flot/plugins/jquery.flot.resize.js"></script>
<!-- FLOT PIE PLUGIN - also used to draw donut charts -->
<script src="../../plugins/flot/plugins/jquery.flot.pie.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    
    /*
     * Flot Interactive Chart
     * -----------------------
     */
    // We use an inline data source in the example, usually data would
    // be fetched from a server
    var data        = [],
        totalPoints = 100

    function getRandomData() {

      if (data.length > 0) {
        data = data.slice(1)
      }

      // Do a random walk
      while (data.length < totalPoints) {

        var prev = data.length > 0 ? data[data.length - 1] : 50,
            y    = prev + Math.random() * 10 - 5

        if (y < 0) {
          y = 0
        } else if (y > 100) {
          y = 100
        }

        data.push(y)
      }

      // Zip the generated y values with the x values
      var res = []
      for (var i = 0; i < data.length; ++i) {
        res.push([i, data[i]])
      }

      return res
    }
/*
    var interactive_plot = $.plot('#interactive', [
        {
          data: getRandomData(),
        }
      ],
      {
        grid: {
          borderColor: '#f3f3f3',
          borderWidth: 1,
          tickColor: '#f3f3f3'
        },
        series: {
          color: '#3c8dbc',
          lines: {
            lineWidth: 2,
            show: true,
            fill: true,
          },
        },
        yaxis: {
          min: 0,
          max: 100,
          show: true
        },
        xaxis: {
          show: true
        }
      }
    )
*/
    var updateInterval = 500 //Fetch data ever x milliseconds
    var realtime       = 'on' //If == to on then fetch data every x seconds. else stop fetching

/*    
    function update() {

      interactive_plot.setData([getRandomData()])

      // Since the axes don't change, we don't need to call plot.setupGrid()
      interactive_plot.draw()
      if (realtime === 'on') {
        setTimeout(update, updateInterval)
      }
    }

    //INITIALIZE REALTIME DATA FETCHING
    if (realtime === 'on') {
      update()
    }
*/
    //REALTIME TOGGLE
    $('#realtime .btn').click(function () {
      if ($(this).data('toggle') === 'on') {
        realtime = 'on'
      }
      else {
        realtime = 'off'
      }
      update()
    })
    /*
     * END INTERACTIVE CHART
     */


    /*
     * LINE CHART
     * ----------
     */
    //LINE randomly generated data

    var sin = [],
        cos = []
    var min = 0;
    for (var i = 1; i < 15; i ++) {
    //   sin.push([i, Math.sin(i)])
    //   cos.push([i, Math.cos(i)])
        sin.push([i, (Math.random() * (0, 15) + min)])
        cos.push([i, (Math.random() * (0, 15) + min)])
    }
    var line_data1 = {
      data : sin,
      color: '#3c8dbc'
    }
    var line_data2 = {
      data : cos,
      color: '#00c0ef'
    }
    //$.plot('#line-chart', [line_data1, line_data2], {
    $.plot('#line-chart', [line_data1], {
      grid  : {
        hoverable  : true,
        borderColor: '#f3f3f3',
        borderWidth: 1,
        tickColor  : '#f3f3f3'
      },
      series: {
        shadowSize: 0,
        lines     : {
          show: true
        },
        points    : {
          show: true
        }
      },
      lines : {
        fill : false,
        color: ['#3c8dbc', '#f56954']
      },
      yaxis : {
        show: true
      },
      xaxis : {
        show: true
      }
    })
    //Initialize tooltip on hover
    $('<div class="tooltip-inner" id="line-chart-tooltip"></div>').css({
      position: 'absolute',
      display : 'none',
      opacity : 0.8
    }).appendTo('body')
    $('#line-chart').bind('plothover', function (event, pos, item) {

      if (item) {
        var x = item.datapoint[0].toFixed(0),
            y = item.datapoint[1].toFixed(2)

        $('#line-chart-tooltip').html('hari ke - ' + x + ' = ' + y)
          .css({
            top : item.pageY + 5,
            left: item.pageX + 5
          })
          .fadeIn(200)
      } else {
        $('#line-chart-tooltip').hide()
      }

    })
    /* END LINE CHART */


    /*
     * GENERIC LINE CHART
     * ----------
     */
    //LINE randomly generated data

    // var data1 = [],
    //     data2 = []
    /*
    for (var i = 0; i < 14; i += 0.5) {
      data1.push([i, Math.sin(i)])
      data2.push([i, Math.cos(i)])
    }*/
    var min = 0;

    var minId = 1;
    var amount = 6;
    var maxId = minId + amount;

    // var line_data1 = [],
    //     line_data2 = []

    var chartName;
    for(var id=minId ; id<maxId ; id++)
    {
        data1 = [];

        chart = 'line'+id+'-chart';
        chartTooltip = 'line'+id+'-chart-tooltip';
        for (var i = 1; i < 15; i ++) {
            data1.push([i, (Math.random() * (0, 15) + min)])
        }
        line_data1 = {
            data : data1,
            color: '#ff7f3b'
        }
        $.plot( ('#'+chart), [line_data1], {
        grid  : {
            hoverable  : true,
            borderColor: '#f3f3f3',
            borderWidth: 1,
            tickColor  : '#f3f3f3'
        },
        series: {
            shadowSize: 0,
            lines     : {
            show: true
            },
            points    : {
            show: true
            }
        },
        lines : {
            fill : false,
            color: ['#3c8dbc', '#f56954']
        },
        yaxis : {
            show: true
        },
        xaxis : {
            show: true
        }
        })
        //Initialize tooltip on hover
        $('<div class="tooltip-inner" id="line'+id+'-chart-tooltip"></div>').css({
        position: 'absolute',
        display : 'none',
        opacity : 0.8
        }).appendTo('body')
        $(('#'+chart)).bind('plothover', function (event, pos, item) {

        if (item) {
            var x = item.datapoint[0].toFixed(0),
                y = item.datapoint[1].toFixed(2)

            $(('#'+chartTooltip)).html(y)
            .css({
                top : item.pageY + 5,
                left: item.pageX + 5
            })
            .fadeIn(200)
        } else {
            $(('#'+chartTooltip)).hide()
        }

        })
    }

    
    /* END LINE CHART */

    /*
     * FULL WIDTH STATIC AREA CHART
     * -----------------
     */
    var areaData = [[2, 88.0], [3, 93.3], [4, 102.0], [5, 108.5], [6, 115.7], [7, 115.6],
      [8, 124.6], [9, 130.3], [10, 134.3], [11, 141.4], [12, 146.5], [13, 151.7], [14, 159.9],
      [15, 165.4], [16, 167.8], [17, 168.7], [18, 169.5], [19, 168.0]]
      /*
    $.plot('#area-chart', [areaData], {
      grid  : {
        borderWidth: 0
      },
      series: {
        shadowSize: 0, // Drawing is faster without shadows
        color     : '#00c0ef',
        lines : {
          fill: true //Converts the line chart to area chart
        },
      },
      yaxis : {
        show: false
      },
      xaxis : {
        show: false
      }
    })*/

    /* END AREA CHART */

    /*
     * BAR CHART
     * ---------
     */

    var bar_data = {
      data : [[1,10], [2,8], [3,4], [4,13], [5,17], [6,9]],
      bars: { show: true }
    }
    /*
    $.plot('#bar-chart', [bar_data], {
      grid  : {
        borderWidth: 1,
        borderColor: '#f3f3f3',
        tickColor  : '#f3f3f3'
      },
      series: {
         bars: {
          show: true, barWidth: 0.5, align: 'center',
        },
      },
      colors: ['#3c8dbc'],
      xaxis : {
        ticks: [[1,'January'], [2,'February'], [3,'March'], [4,'April'], [5,'May'], [6,'June']]
      }
    })
    */
    /* END BAR CHART */

    /*
     * DONUT CHART
     * -----------
     */

    var donutData = [
      {
        label: 'Series2',
        data : 30,
        color: '#3c8dbc'
      },
      {
        label: 'Series3',
        data : 20,
        color: '#0073b7'
      },
      {
        label: 'Series4',
        data : 50,
        color: '#00c0ef'
      }
    ]
    /*
    $.plot('#donut-chart', donutData, {
      series: {
        pie: {
          show       : true,
          radius     : 1,
          innerRadius: 0.5,
          label      : {
            show     : true,
            radius   : 2 / 3,
            formatter: labelFormatter,
            threshold: 0.1
          }

        }
      },
      legend: {
        show: false
      }
    })
    */
    /*
     * END DONUT CHART
     */

  })

  /*
   * Custom Label formatter
   * ----------------------
   */
  function labelFormatter(label, series) {
    return '<div style="font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;">'
      + label
      + '<br>'
      + Math.round(series.percent) + '%</div>'
  }
</script>
@endsection