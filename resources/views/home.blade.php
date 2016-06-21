@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            
            
<label>Porcentaje</label>
<input id= "porcentaje" value="70">
<script >
$(function () {

 $('#container').highcharts({
  chart: {
    plotBackgroundColor: null,
    plotBorderWidth: null,
    plotShadow: false,
    type: 'pie'
  },
  title: {
    text: 'Respuestas de la encuesta'
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
      name: 'Pregunta 1',
      y: parseInt(document.getElementById("porcentaje").value),
      sliced: true,
      selected: true
    }, {
      name: 'Pregunta 2',
      y: 10
    },{
      name: 'Pregunta 7',
      y: 10
    },{
      name: 'Pregunta 10',
      y: 10
    }]
  }]
});
});
</script>

<div id="container" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>

        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="https://code.highcharts.com/highcharts.js"></script>
@stop