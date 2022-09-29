@extends('layouts.dashboard-dark-layout')
@section('title','Overview | Fuel Manager')

@section('content')

<!-- Main content -->
<section class="content">
    <!-- Genset Row -->
    <div class="row">
      <!-- Genset Card -->
        <div class="col-lg-3">
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
                    <h3>Genset 1</h3>
                    <p>Run Hour</p>
                    <h3>44 jam</h3>
                  </div>
                  <div class="icon">
                    <i>
                      <img src="{{ url('storage/images/genset-white.png') }}" alt="" title="" style="height: 100px;"/>
                    </i>
                  </div>
                  
                </div>
              </div>
              <!-- /.col -->
              <!-- /.card-body -->

              <a href="{{url('genset')}}#" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
              </a>

            </div>
        </div>
      <!-- End of Genset Card -->

      <!-- Genset Card -->
      <div class="col-lg-3">
            <div class="small-box card-danger shadow-none bg-info">
              <div class="card-header shadow-none">
                <div class="row">
                  <div class="col-lg-6">
                    <h3>Failed</h3>
                    <p>Power Status</p>
                  </div>
                  <div class="col-lg-6">
                    <h3>Fuse Break</h3>
                    <p>Genset Status</p>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <!-- Genset Simple Card -->
              <div class="col-lg-12">
                <!-- small card -->
                <div class="small-box shadow-none">
                  <div class="inner">
                    <h3>Genset 2</h3>
                    <p>Run Hour</p>
                    <h3>44 jam</h3>
                  </div>
                  <div class="icon">
                    <i>
                      <img src="{{ url('storage/images/genset-white.png') }}" alt="" title="" style="height: 100px;"/>
                    </i>
                  </div>
                  
                </div>
              </div>
              <!-- /.col -->
              <!-- /.card-body -->

              <a href="{{url('genset')}}#" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
              </a>

            </div>
        </div>
      <!-- End of Genset Card -->

      <!-- Genset Card -->
      <div class="col-lg-3">
            <div class="small-box card-dark shadow-none bg-info">
              <div class="card-header shadow-none">
                <div class="row">
                  <div class="col-lg-6">
                    <h3>Normal</h3>
                    <p>Power Status</p>
                  </div>
                  <div class="col-lg-6">
                    <h3>OFF</h3>
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
                    <h3>Genset 3</h3>
                    <p>Run Hour</p>
                    <h3>44 jam</h3>
                  </div>
                  <div class="icon">
                    <i>
                      <img src="{{ url('storage/images/genset-white.png') }}" alt="" title="" style="height: 100px;"/>
                    </i>
                  </div>
                  
                </div>
              </div>
              <!-- /.col -->
              <!-- /.card-body -->

              <a href="{{url('genset')}}#" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
              </a>

            </div>
        </div>
      <!-- End of Genset Card -->


      <!-- Genset Card -->
      <div class="col-lg-3">
            <div class="small-box card-danger shadow-none bg-info">
              <div class="card-header shadow-none">
                <div class="row">
                  <div class="col-lg-6">
                    <h3>Failed</h3>
                    <p>Power Status</p>
                  </div>
                  <div class="col-lg-6">
                    <h3>Failed</h3>
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
                    <h3>Genset 4</h3>
                    <p>Run Hour</p>
                    <h3>44 jam</h3>
                  </div>
                  <div class="icon">
                    <i>
                      <img src="{{ url('storage/images/genset-white.png') }}" alt="" title="" style="height: 100px;"/>
                    </i>
                  </div>
                  
                </div>
              </div>
              <!-- /.col -->
              <!-- /.card-body -->

              <a href="{{url('genset')}}#" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
              </a>

            </div>
        </div>
      <!-- End of Genset Card -->
      
    </div>
    <!-- \.row -->



    <!-- Tangki Utama Row -->
    <div class="row">
        <!-- Tangki 1k L Card -->
        <div class="col-lg-12 col-6">
          
            <!-- Donut chart -->
            <div class="small-box card-outline card-info bg-secondary shadow-none">
              <div class="card-header bg-dark">
                <h3 class="card-title">
                  <i class="fas fa-industry"></i>
                  Tangki Utama (1K L)
                </h3>

              </div>

              <div class="inner">
                <div class="row">

                  <div class="col-lg-3">
                    <!-- small card -->
                    <div class="small-box shadow-none">
                      <div class="inner">
                        <div class="chart">
                          <canvas id="stackedBarChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 80%;"></canvas>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /.col -->  


                  <div class="col-lg-3 ">
                    <!-- small card -->
                    <div class="small-box shadow-none">
                      <div class="inner">
                        <p>Volume</p>
                        <h3>1000 L</h3>                        
                      </div>
                      <div class="icon">
                        <i class="fas fa-clock text-white"></i>
                      </div>
                    </div>

                    <div class="small-box shadow-none">
                      <div class="inner">
                        <p>Bahan Bakar</p>
                        <h3>Solar</h3>                        
                      </div>
                      <div class="icon">
                        <i class="fas fa-gas-pump text-white"></i>
                      </div>
                    </div>

                  </div>
                  <!-- /.col -->


                  <div class="col-lg-6 ">

                    <div class="row">

                    <!-- Motor Utama Card -->
                    <div class="col-lg-6 col-12">
                      <div class="small-box card-info bg-secondary shadow-lg">
                        <div class="card-header bg-dark">
                          
                          <h4 class="card-title">
                            Motor Utama
                          </h4>

                          <div class="card-tools bg-light">
                          <input type="checkbox" name="my-checkbox" checked data-bootstrap-switch data-off-color="danger" data-on-color="success">
                          </div>
                          
                        </div>
                        <div class="card-body">
                          <!-- small card -->
                          <div class="small-box shadow-none col-xs-8">
                            <div class="inner">
                              <div class="col-6">
                                <h3><i class="fas fa-temperature-low text-danger">80 &deg; C</i></h3>
                              </div>
                              <div class="col-6">
                                <h3><i class="fas fa-bolt text-success">   Normal</i></h3>
                              </div>
                            </div>

                            <div class="icon">
                            <i>
                              <img src="{{ url('storage/images/water-pump.png') }}" alt="" title="" style="height: 100px;"/>
                            </i>
                              
                            </div>
                            

                          </div>

                          
                        </div>
                        <!-- /.card-body-->

                        <a href="{{url('motor')}}" class="small-box-footer bg-dark">
                          More info <i class="fas fa-arrow-circle-right"></i>
                        </a>
                      </div>

                        

                          <!-- /.card -->
                    </div>
                    <!-- End of Motor Utama Card -->

                    <!-- Motor Cadangan Card -->
                    <div class="col-lg-6 col-12">
                      <div class="small-box card-info bg-secondary shadow-lg">
                        <div class="card-header bg-dark">
                          <h4 class="card-title">
                            Motor Cadangan
                          </h4>

                          <div class="card-tools bg-light">
                          <input type="checkbox" name="my-checkbox" checked data-bootstrap-switch data-off-color="danger" data-on-color="success">
                          </div>
                          
                        </div>
                        <div class="card-body">
                          <!-- small card -->
                          <div class="small-box shadow-none col-xs-8">
                            <div class="inner">
                              <div class="col-6">
                                <h3><i class="fas fa-temperature-low text-danger">80 &deg; C</i></h3>
                              </div>
                              <div class="col-6">
                                <h3><i class="fas fa-bolt text-success">   Normal</i></h3>
                              </div>
                            </div>

                            <div class="icon">
                            <i>
                              <img src="{{ url('storage/images/water-pump.png') }}" alt="" title="" style="height: 100px;"/>
                            </i>
                              
                            </div>
                            

                          </div>

                          
                        </div>
                        <!-- /.card-body-->

                        <a href="{{url('motor')}}" class="small-box-footer bg-dark">
                          More info <i class="fas fa-arrow-circle-right"></i>
                        </a>
                      </div>

                        

                          <!-- /.card -->
                    </div>
                    <!-- End of Motor Cadangan Card -->

                    </div>
                    <!-- /.row -->

                  </div>
                  <!-- /.col -->
                  
                </div>
              </div>
              <!-- /.card-body-->

              <a href="{{url('genset')}}" class="small-box-footer bg-dark">
                More info <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
            <!-- /.card -->
        </div>
        <!-- End of Tangki 20K L Card -->

    </div>
    <!-- \.row -->

    <!-- Tangki 20K L + Motor Cadangan Row -->
    <div class="row">
      <!-- Tangki 20k L Card -->
        <div class="col-lg-12">
          
            <!-- Donut chart -->
            <div class="small-box card-outline card-info bg-secondary shadow-none">
              <div class="card-header bg-dark">
                <h3 class="card-title">
                  <i class="fas fa-industry"></i>
                  Tangki Cadangan (30K L)
                </h3>

              </div>

              <div class="inner">
                <div class="row">

                  <div class="col-lg-3">
                    <!-- small card -->
                    <div class="small-box shadow-none">
                      <div class="inner">
                      <div class="chart">
                        <canvas id="stackedBarChart2" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 80%;"></canvas>
                      </div>
                      </div>
                    </div>
                  </div>
                  <!-- /.col -->  


                  <div class="col-lg-3">
                    <!-- small card -->
                    <div class="small-box shadow-none">
                      <div class="inner">
                        <p>Volume</p>
                        <h3>10.000 L</h3>                        
                      </div>
                      <div class="icon">
                        <i class="fas fa-clock text-white"></i>
                      </div>
                    </div>

                    <div class="small-box shadow-none">
                      <div class="inner">
                        <p>Suhu</p>
                        <h3>45 &degC L</h3>                        
                      </div>
                      <div class="icon">
                        <i class="fas fa-temperature-low text-white"></i>
                      </div>
                    </div>

                    <div class="small-box shadow-none">
                      <div class="inner">
                        <p>Bahan Bakar</p>
                        <h3>Solar</h3>                        
                      </div>
                      <div class="icon">
                        <i class="fas fa-gas-pump text-white"></i>
                      </div>
                    </div>

                  </div>
                  <!-- /.col -->

                  <div class="col-lg-6 ">

                    <div class="row">

                    <!-- Motor Utama Card -->
                    <div class="col-lg-6 col-12">
                      <div class="small-box card-info bg-secondary shadow-lg">
                        <div class="card-header bg-dark">
                          <h4 class="card-title">
                            
                            Motor Utama
                          </h4>

                          <div class="card-tools bg-light">
                          <input type="checkbox" name="my-checkbox" checked data-bootstrap-switch data-off-color="danger" data-on-color="success">
                          </div>
                          
                        </div>
                        <div class="card-body">
                          <!-- small card -->
                          <div class="small-box shadow-none col-xs-8">
                            <div class="inner">
                              <div class="col-6">
                                <h3><i class="fas fa-temperature-low text-danger">80 &deg; C</i></h3>
                              </div>
                              <div class="col-6">
                                <h3><i class="fas fa-bolt text-success">   Normal</i></h3>
                              </div>
                            </div>

                            <div class="icon">
                            <i>
                              <img src="{{ url('storage/images/water-pump.png') }}" alt="" title="" style="height: 100px;"/>
                            </i>
                              
                            </div>
                            

                          </div>

                          
                        </div>
                        <!-- /.card-body-->

                        <a href="{{url('motor')}}" class="small-box-footer bg-dark">
                          More info <i class="fas fa-arrow-circle-right"></i>
                        </a>
                      </div>

                        

                          <!-- /.card -->
                    </div>
                    <!-- End of Motor Utama Card -->

                    <!-- Motor Cadangan Card -->
                    <div class="col-lg-6 col-12">
                      <div class="small-box card-info bg-secondary shadow-lg">
                        <div class="card-header bg-dark">
                          <h4 class="card-title">
                            Motor Cadangan
                          </h4>

                          <div class="card-tools bg-light">
                          <input type="checkbox" name="my-checkbox" checked data-bootstrap-switch data-off-color="danger" data-on-color="success">
                          </div>
                          
                        </div>
                        <div class="card-body">
                          <!-- small card -->
                          <div class="small-box shadow-none col-xs-8">
                            <div class="inner">
                              <div class="col-6">
                                <h3><i class="fas fa-temperature-low text-danger">80 &deg; C</i></h3>
                              </div>
                              <div class="col-6">
                                <h3><i class="fas fa-bolt text-success">   Normal</i></h3>
                              </div>
                            </div>

                            <div class="icon">
                            <i>
                              <img src="{{ url('storage/images/water-pump.png') }}" alt="" title="" style="height: 100px;"/>
                            </i>
                              
                            </div>
                            

                          </div>

                          
                        </div>
                        <!-- /.card-body-->

                        <a href="{{url('motor')}}" class="small-box-footer bg-dark">
                          More info <i class="fas fa-arrow-circle-right"></i>
                        </a>
                      </div>

                        

                          <!-- /.card -->
                    </div>
                    <!-- End of Motor Cadangan Card -->

                    </div>
                    <!-- /.row -->

                  </div>
                  <!-- /.col -->
                  
                  
                </div>
              </div>
              <!-- /.card-body-->

              <a href="{{url('genset')}}" class="small-box-footer bg-dark">
                More info <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
            <!-- /.card -->
        </div>
      <!-- End of Tangki 20K L Card -->


    </div>
    <!-- \.row -->

    


    <!-- Baterai Row -->
    <div class="row">
        <!-- Baterai 1 Card -->
        <div class="col-lg-6 col-6">
            <div class="small-box card-outline card-info bg-secondary shadow-none">
              <div class="card-header bg-dark">
                <h3 class="card-title">
                  <!-- <img src="{{ url('storage/images/accu-solid.png') }}" alt="" title="" style="height: 50px;"/> -->
                  <i class="fas fa-car-battery"></i>
                  Baterai 1
                </h3>

                
              </div>
              <div class="card-body">
                
                <!-- small card -->
                <div class="small-box shadow-none">
                  <div class="row">
                    <div class="col-lg-4 row align-items-center">
                        <img src="{{ url('storage/images/accu-white.png') }}" alt="" title="" style="height: 150px;"/>
                    </div>

                    <div class="inner">
                      <div class="col-6">
                        <h3><i class="fas fa-battery-three-quarters">&#09 80&#37</i></h3>
                      </div>
                      <div class="col-6">
                        <h3><i class="fas fa-gauge-high">&#09 Charge : 1 A</i></h3>
                      </div>
                      <div class="col-6">
                        <h3><i class="fas fa-gauge-high">&#09 Discharge : 100 A</i></h3>
                      </div>
                      <div class="col-6">
                        <h3><i class="fas fa-bolt">&#09 1000 V</i></h3>
                      </div>
                      <div class="col-6">
                        <h3><i class="fas fa-wrench"></i>&#09 Sehat</h3>
                      </div>
                    </div>

                  </div>
                  
                  <div class="icon text-center">
                    <i class="fas fa-circle text-success"><h5 class="text-light">Mengisi</h5>
                      
                    </i>
                  </div>
                </div>

              </div>
              <!-- /.card-body-->

              <a href="{{url('genset')}}" class="small-box-footer bg-dark">
                More info <i class="fas fa-arrow-circle-right"></i>
              </a>

            </div>
            <!-- /.card -->
        </div>
        <!-- End of Baterai 1 Card -->

      <!-- Baterai 2 Card -->
      <div class="col-lg-6 col-6">
            <div class="small-box card-outline card-info bg-secondary shadow-none">
              <div class="card-header bg-dark">
                <h3 class="card-title">
                  <!-- <img src="{{ url('storage/images/accu-solid.png') }}" alt="" title="" style="height: 50px;"/> -->
                  <i class="fas fa-car-battery"></i>
                  Baterai 2
                </h3>
                
              </div>
              <div class="card-body">
                
                <!-- small card -->
                <div class="small-box shadow-none">
                  
                <div class="row">
                    <div class="col-lg-4 row align-items-center">
                        <img src="{{ url('storage/images/accu-white.png') }}" alt="" title="" style="height: 150px;"/>
                    </div>
                    <div class="inner">
                      <div class="col-6">
                        <h3><i class="fas fa-battery-three-quarters">&#09 80&#37</i></h3>
                      </div>
                      <div class="col-6">
                        <h3><i class="fas fa-gauge-high">&#09 Charge : 1 A</i></h3>
                      </div>
                      <div class="col-6">
                        <h3><i class="fas fa-gauge-high">&#09 Discharge : 100 A</i></h3>
                      </div>
                      <div class="col-6">
                        <h3><i class="fas fa-bolt">&#09 1000 V</i></h3>
                      </div>
                      <div class="col-6">
                        <h3 class="text-warning"><i class="fas fa-wrench"></i>&#09 Warning</h3>
                      </div>
                    </div>
                    <div class="icon text-center">
                      <i class="fas fa-circle text-dark"><h5 class="text-light">Tidak Terdeteksi</h5></i>
                    </div>
                  </div>
                </div>

              </div>
              <!-- /.card-body-->

              <a href="{{url('genset')}}" class="small-box-footer bg-dark">
                More info <i class="fas fa-arrow-circle-right"></i>
              </a>

            </div>
            <!-- /.card -->
        </div>
        <!-- End of Baterai 2 Card -->

    </div>
    <!-- \.row -->

</section>
<!-- /.content -->
<script>//testLineChart('content');</script>
@endsection












@section('scripts')
<!-- FLOT CHARTS -->
<script src="../../plugins/flot/jquery.flot.js"></script>
<!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
<script src="../../plugins/flot/plugins/jquery.flot.resize.js"></script>
<!-- FLOT PIE PLUGIN - also used to draw donut charts -->
<script src="../../plugins/flot/plugins/jquery.flot.pie.js"></script>
<!-- ChartJS -->
<script src="../../plugins/chart.js/Chart.min.js"></script>
<!-- Bootstrap Switch -->
<script src="../../plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
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
    for (var i = 0; i < 14; i += 0.5) {
      sin.push([i, Math.sin(i)])
      cos.push([i, Math.cos(i)])
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
      /*
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
    })*/
    //Initialize tooltip on hover
/*
    $('<div class="tooltip-inner" id="line-chart-tooltip"></div>').css({
      position: 'absolute',
      display : 'none',
      opacity : 0.8
    }).appendTo('body')
    $('#line-chart').bind('plothover', function (event, pos, item) {

      if (item) {
        var x = item.datapoint[0].toFixed(2),
            y = item.datapoint[1].toFixed(2)

        $('#line-chart-tooltip').html(item.series.label + ' of ' + x + ' = ' + y)
          .css({
            top : item.pageY + 5,
            left: item.pageX + 5
          })
          .fadeIn(200)
      } else {
        $('#line-chart-tooltip').hide()
      }

    })*/
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
/*
    var donutData = [
      {
        label: 'Air',
        data : 80,
        color: '#3c8dbc'
      },
      {
        label: 'Minyak',
        data : 20,
        color: '#3B3131'
      },
    ]
    
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
    })
    */
    /*
     * END DONUT CHART
     */


     /*
     * COLLECTIVE DONUT CHART
     * -----------
     */

    var minId = 1;
    var amount = 1;
    var maxId = minId + amount;
    var donutData;
    var chartName;
    var waterPercent;

    for(var id=minId ; id<maxId ; id++)
    {
      chart = 'donut'+id+'-chart';
      waterPercent = (Math.random() * (100 - 50) + 50); //formula -> Math.random() * (max - min) ) + min

      donutData = [
        {
          label: 'Air',
          data : waterPercent,
          color: '#3c8dbc'
        },
        {
          label: 'Minyak',
          data : 100 - waterPercent,
          color: '#3B3131'
        },
      ]
      
      if(!!document.getElementById('#'+chart) == false)
        return;

      $.plot('#'+chart, donutData, {
        series: {
          pie: {
            show       : true,
            radius     : 1,
            innerRadius: 0.5,
            label      : {
              show     : true,
              radius   : 2 / 3,
              formatter: labelFormatter,
              threshold: 0
            }

          }
        },
      })
    }

    
    
    
    
    /*
     * END DONUT CHART
     */
  })

  //---------------------
  //- Tangki Dummy Stacked Bar Data -
  //---------------------
  var tangkiData = {
      labels  : ['Volume'],
      datasets: [
        {
          label               : 'Minyak',
          backgroundColor     : '#3B3131',
          //borderColor         : 'rgba(255, 255, 255,0.8)',
          pointRadius          : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : [80]
        },
        {
          label               : 'Air',
          backgroundColor     : '#3c8dbc',
          //borderColor         : 'rgba(210, 214, 222, 1)',
          pointRadius         : false,
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [20]
        },
      ]
    }

    var barChartData = $.extend(true, {}, tangkiData)

    //---------------------
    //- STACKED BAR CHART -
    //---------------------
    
    var stackedBarChartData = $.extend(true, {}, barChartData)

    var stackedBarChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      legend: {
                labels: {
                    fontColor: "white"
                }
            },
      scales: {
        xAxes: [{
          stacked: true,
          ticks: {
                        fontColor: "white",
                        lineColor : "white"
                    },
          gridLines: {
            color: '#000',
            drawBorder : false,
            zeroLineColor: '#000'
          }
        }],
        yAxes: [{
          stacked: true,
          ticks: {
                        fontColor: "white",
                        lineColors : "white"
                    },
          gridLines: {
            color: '#000',
            drawBorder : false,
            zeroLineColor: '#000'
          }
        }]
      }
    }

    var stackedBarChartCanvas = $('#stackedBarChart').get(0).getContext('2d')

    new Chart(stackedBarChartCanvas, {
      type: 'bar',
      data: stackedBarChartData,
      options: stackedBarChartOptions
    })

    stackedBarChartCanvas = $('#stackedBarChart2').get(0).getContext('2d')

    new Chart(stackedBarChartCanvas, {
      type: 'bar',
      data: stackedBarChartData,
      options: stackedBarChartOptions
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
/*
  $('input[name="my-checkbox"]').bootstrapSwitch({
                    'onColor': 'success',
                    'offColor': 'danger'
                });
  $('input[name="my-checkbox"]:checked').bootstrapSwitch('state', true);
  */
  $("input[data-bootstrap-switch]").each(function(){
    $(this).bootstrapSwitch('state', $(this).prop('checked'));
  })
</script>
@endsection