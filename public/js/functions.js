/*function createGraphics($number, $answers){

    $('#container').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'Que bien!'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    }
                }
            }
        },

        series: [{
            name: 'Brands',
            colorByPoint: true,
            data: [{
                name: $answers[0].description,
                //y: parseInt(document.getElementById("porcentaje").value),
                y: parseInt($answers[0].percentage),
                sliced: true,
                selected: true
            }, {
                name: $answers[1].description,
                y: parseInt($answers[1].percentage)
            },{
                name: $answers[2].description,
                y: parseInt($answers[2].percentage)
            },{
                name: $answers[3].description,
                y: parseInt($answers[3].percentage)
            }]
        }]
    });

}

function answers($number, $answers){

}*/
