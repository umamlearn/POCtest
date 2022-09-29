<!-- Overview GENSET 1 Card -->
<div class="row">
    <div class="col-lg-4 col-6">
        <div class="small-box card-primary">
        <div class="card-header">
            <h3 class="card-title">Genset 1</h3>
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
                <div class="info-box shadow-none bg-danger">
                <span class="info-box-icon"><i class="fas fa-bolt" style="color:white"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Konsumsi per jam</span>
                    <span class="info-box-number">80 Watt/hour</span>
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
            Konsumsi / jam
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
        <div id="line-chart" style="height: 300px;"></div>
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
            Run hour / hari
        </h3>

        
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



<script>
include_once('line-chart-template');


function createLineChart (amount, idParent)
{
    if(amount <=0) return;

    var addElement = @include('line-chart').innerHTML;
    console.log(addElement);
    idParent.insertAdjacentHTML ('beforeend', addElement);
}

function testLineChart(idParent)
{
  createLineChart(1, idParent);
}

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

    var minId = 0;
    var maxId = 6;

    // var line_data1 = [],
    //     line_data2 = []

    var chartName;
    for(var id=minId ; id<=maxId ; id++)
    {
        data1 = [];
        data2 = [];

        chart = 'line'+(id>0 ? id:'')+'-chart';
        chartTooltip = 'line'+(id>0 ? id:'')+'-chart-tooltip';
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
</script>