$(document).ready
(
    function(){
        var options = {
            chart: {
                renderTo: 'container',
                type: 'line'
            },
            title: {
                text: 'Persebaran Perolehan Prestasi',
                x: -20 //center
            },
            subtitle: {
                text: 'Berdasarkan Tahun',
                x: -20
            },
            xAxis: {
                categories: [],
                title: {
                    text: 'Tahun'
                }
            },
            yAxis: {
                title: {
                    text: 'Jumlah Prestasi'
                },
                plotLines: [{
                    value: 0,
                    width: 1,
                    color: '#808080'
                }]
            },
            tooltip: {
                formatter: function() {
                    return '<b>Tahun '+ this.x +'</b><br/>'+
                        this.y ;
                }
            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'middle',
                borderWidth: 0
            },
            series: []
        };
        $.getJSON("data-basic-colm.php", function(json) {
            options.xAxis.categories = json[0]['data']; //xAxis: {categories: []}
            options.series[0] = json[1];
            chart = new Highcharts.Chart(options);
        });
    });