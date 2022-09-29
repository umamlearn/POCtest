@extends('layouts.dashboard-dark-layout')
@section('title','Tangki Details | Fuel Manager')



@section('content')

<!-- Tangki Utama Row -->
<div class="row">
    <!-- Tangki 2k L Card -->
    <div class="col-lg-12 col-6">
        
        <!-- Stacked Bar Chart -->
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
                    
                    <div class="col-lg-6">
                        <!-- Line chart -->
                        <div class="card card-info card-outline bg-secondary">
                            <div class="card-header bg-dark">
                                <h4 class="card-title">
                                    Volume / Hari
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


                </div>
                <!-- /.row -->

                
            </div>
            <!-- /.card-body-->

        </div>
        <!-- /.card -->
    </div>
    <!-- End of Tangki 20K L Card -->

</div>
<!-- \.row -->

<!-- Tangki Backup Row -->
<div class="row">
    <!-- Tangki 20k L Card -->
    <div class="col-lg-12 col-6">
        
        <!-- Stacked Bar Chart -->
        <div class="small-box card-outline card-info bg-secondary shadow-none">
            <div class="card-header bg-dark">
            <h3 class="card-title">
                <i class="fas fa-industry"></i>
                Tangki Cadangan (20K L)
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


                    <div class="col-lg-3 ">
                        <!-- small card -->
                        <div class="small-box shadow-none">
                            <div class="inner">
                            <p>Volume</p>
                            <h3>10.000 L</h3>                        
                            </div>
                            <div class="icon">
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
                    
                    <div class="col-lg-6">
                        <!-- Line chart -->
                        <div class="card card-info card-outline bg-secondary">
                            <div class="card-header bg-dark">
                                <h4 class="card-title">
                                    Volume / Hari
                                </h4>

                            </div>
                            <div class="card-body">
                                <div id="line2-chart" style="height: 300px;"></div>
                            </div>
                            <!-- /.card-body-->
                        </div>
                        <!-- /.card -->

                    </div>
                    <!-- /.col -->


                </div>
                <!-- /.row -->

                <!-- Table Row -->
                <div class="row">
                    <!-- Table Pengecekan Column -->
                    <div class="col-6">
                        <!-- Table Card -->
                        <div class="card card-info card-outline bg-secondary">
                        <div class="card-header bg-dark bg-dark">
                            <h4 class="card-title">History Pengecekan</h4>

                            
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0" style="height: 340px;">
                            <table class="table table-head-fixed table-striped bg-secondary">
                            <thead style="color : #000;">
                                <tr>
                                <th>Date</th>
                                <th>Operator</th>                                
                                <th>Sentana</th>
                                <th>Kekeruhan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>01-10-2022</td>
                                    <td>Alexander The Great</td>
                                    <td>20</td>
                                    <td>50</td>
                                    
                                </tr>
                                <tr>
                                    <td>08-10-2022</td>
                                    <td>Alexander The Great</td>
                                    <td>20</td>
                                    <td>50</td>
                                    
                                </tr>
                                <tr >
                                    <td>15-10-2022</td>
                                    <td>Alexander The Great</td>
                                    <td>20</td>
                                    <td>50</td>
                                    
                                </tr>
                                <tr>
                                    <td>22-10-2022</td>
                                    <td>Alexander The Great</td>
                                    <td>20</td>
                                    <td>50</td>
                                    
                                </tr>
                                <tr>
                                    <td>29-10-2022</td>
                                    <td>Alexander The Great</td>
                                    <td>20</td>
                                    <td>50</td>
                                    
                                </tr>
                                <tr>
                                    <td>06-11-2022</td>
                                    <td>Alexander The Great</td>
                                    <td>20</td>
                                    <td>50</td>
                                    
                                </tr>
                                <tr>
                                    <td>13-11-2022</td>
                                    <td>Alexander The Great</td>
                                    <td>20</td>
                                    <td>50</td>
                                    
                                </tr>
                                <tr>
                                    <td>21-11-2022</td>
                                    <td>Alexander The Great</td>
                                    <td>20</td>
                                    <td>50</td>
                                    
                                </tr>
                            </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->

                    <!-- Table Pengisian Column -->
                    <div class="col-6">
                        <!-- Table Card -->
                        <div class="card card-info card-outline bg-secondary">
                        <div class="card-header bg-dark bg-dark">
                            <h4 class="card-title">History Pengisian</h4>

                            
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0" style="height: 340px;">
                            <table class="table table-head-fixed table-striped bg-secondary clickable-row">
                            <thead style="color : #000;">
                                <tr>
                                <th>Date</th>
                                <th>Operator</th>                                
                                <th>Bahan Bakar</th>
                                <th>Volume</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class='clickable-row' data-toggle="modal" data-target="#detail-pengisian">
                                    <td>01-10-2022</td>
                                    <td>Alexander The Great</td>
                                    <td>Solar</td>
                                    <td>500</td>
                                </tr>
                                <tr class='clickable-row' data-toggle="modal" data-target="#detail-pengisian">
                                    <td>08-10-2022</td>
                                    <td>Alexander The Great</td>
                                    <td>Solar</td>
                                    <td>500</td>
                                </tr>
                                
                                <tr class='clickable-row' data-toggle="modal" data-target="#detail-pengisian">
                                    <td>15-10-2022</td>
                                    <td>Alexander The Great</td>
                                    <td>Solar</td>
                                    <td>500</td>
                                    
                                </tr>
                                <tr class='clickable-row' data-toggle="modal" data-target="#detail-pengisian">
                                    <td>22-10-2022</td>
                                    <td>Alexander The Great</td>
                                    <td>Solar</td>
                                    <td>500</td>
                                    
                                </tr>
                                <tr class='clickable-row' data-toggle="modal" data-target="#detail-pengisian">
                                    <td>29-10-2022</td>
                                    <td>Alexander The Great</td>
                                    <td>Solar</td>
                                    <td>500</td>
                                    
                                </tr>
                                <tr class='clickable-row' data-toggle="modal" data-target="#detail-pengisian">
                                    <td>06-11-2022</td>
                                    <td>Alexander The Great</td>
                                    <td>Solar</td>
                                    <td>500</td>
                                    
                                </tr>
                                <tr class='clickable-row' data-toggle="modal" data-target="#detail-pengisian">
                                    <td>13-11-2022</td>
                                    <td>Alexander The Great</td>
                                    <td>Bio Solar</td>
                                    <td>500</td>
                                    
                                </tr>
                                <tr class='clickable-row' data-toggle="modal" data-target="#detail-pengisian">
                                    <td>21-11-2022</td>
                                    <td>Alexander The Great</td>
                                    <td>Solar</td>
                                    <td>500</td>
                                    
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
            <!-- /.card-body-->

        </div>
        <!-- /.card -->
    </div>
    <!-- End of Tangki 20K L Card -->

</div>
<!-- \.row -->

<div class="modal fade" id="detail-pengisian">
    <div class="modal-dialog">
    <div class="modal-content bg-secondary">
        <div class="modal-header">
            <h4 class="modal-title">Detail Pengisian</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <table class="text-light">
                <tr >
                    <td>Vendor</td> <td>:</td> <td>Pertamina</td>
                </tr>
                <tr>
                    <td>Transporter</td> <td>:</td> <td>Pertamina TX</td>
                </tr>
                <tr>
                    <td>Nomor LO/SO</td> <td>:</td> <td>1234567</td>
                </tr>
                <tr>
                    <td>Volume Pemesanan</td> <td>:</td> <td>5000K L</td>
                </tr>
                <tr>
                    <td>Volume Penerimaan</td> <td>:</td> <td>4000K L</td>
                </tr>
                <tr>
                    <td>Kepadatan</td> <td>:</td> <td>50</td>
                </tr>
                <tr>
                    <td>Suhu</td> <td>:</td> <td>45 &degC</td>
                </tr>
                <tr>
                    <td>Invoice</td> <td>:</td>
                </tr>                
            </table>
            <img src="{{ url('storage/images/mockup-invoice.png') }}" alt="" title="" style="height: 500px;"/>

        </div>
        <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
    </div>
    <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal --> 
@endsection






@section('scripts')
<style>
    tr.clickable-row { cursor: pointer; }
    table.clickable-row tr { cursor: pointer;}
    table.clickable-row tr:hover{ background-color: teal;}
</style>

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
        * GENERIC LINE CHART
        * ----------
        */
        //LINE randomly generated data

        var data1 = [],
            data2 = [];
        /*
        for (var i = 0; i < 14; i += 0.5) {
        data1.push([i, Math.sin(i)])
        data2.push([i, Math.cos(i)])
        }*/
        var minValue = 0;

        var minId = 1;
        var amount = 2;
        var maxId = minId + amount;

        // var line_data1 = [],
        //     line_data2 = []

        var chart;
        var chartTooltip
        for(var id=minId ; id<maxId ; id++)
        {
            data1 = [];

            chart = 'line'+id+'-chart';
            chartTooltip = 'line'+id+'-chart-tooltip';
            for (var i = 1; i < 15; i ++) {
                data1.push([i, (Math.random() * (0, 15) + minValue)])
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


    })
    
</script>
@endsection