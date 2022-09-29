$(function () {

    console.log("hit genset 1 function!!!");
    function Init()
    {
        console.log("hit init !!!");
        var oriId = document.getElementById('line-chart').id;
        document.getElementById('line-chart').id = 'line1-chart';

        drawChart();
    }
    

    function createLineChart (amount, idParent)
    {
        if(amount <=0) return;
    }

    function testLineChart(idParent)
    {
        createLineChart(1, idParent);
    }

    function drawChart()
    {
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
    }
    


})
