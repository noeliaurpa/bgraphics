@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">

            @foreach ($questions as $question)
            <form action="{{ url('/question/') }}/{{ $question->number }}" method="post">
                {{ csrf_field() }}
                <!-- zoomInDown zoomInUp bounceInUp fadeInUp -->
                <input class="btn_question animated zoomInUp _{{ $question->number }}" type="submit" value="Pregunta {{ $question->number }}">
            </form>
            @endforeach

        </div>
        <div class="col-md-10 col-md-offset-1">

            <!--label>Porcentaje</label>
            <input id= "porcentaje" value="80"-->

            <div id="container" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>

        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="https://code.highcharts.com/highcharts.js"></script>
@stop
