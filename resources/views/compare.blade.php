@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">

            <form class="form_compare animated bounceInUp" id="form" name="cat" action="{{ url('/compare/compare') }}" method="post">
                <h2>Seleccione alguna de las 3 apps para comparar.</h2>
                @foreach ($companies as $company)
                <!-- zoomInDown zoomInUp bounceInUp fadeInUp -->
                <div class="form_check">
                    <input type="checkbox" name="{{ $company->id }}" value="{{ $company->id }}"/> <label>{{ $company->name }}</label>
                </div>
                @endforeach
                <input type="button" class="getItem" value="Comparar"/>
            </form>

            <div class="cuadro_compare">
                @foreach ($companies as $company)
                <div id="n{{ $company->id }}" class="compare">
                    <div class="cuadro animated fadeInUp _1"><label>Nombre:</label></br>{{ $company->name }}</div>
                    <div class="cuadro animated fadeInUp _2"><label>Descripción:</label></br>{{ $company->description }}</div>
                    <div class="cuadro animated fadeInUp _3"><label>Multiplataforma:</label></br>{{ $company->multiplataform }}</div>
                    <div class="cuadro animated fadeInUp _4"><label>Interactividad:</label></br>{{ $company->interactivity }}</div>
                    <div class="cuadro animated fadeInUp _5"><label>Usabilidad:</label></br>{{ $company->usability }}</div>
                    <div class="cuadro animated fadeInUp _6"><label>Popularidad:</label></br>{{ $company->popularity }}</div>
                    <div class="cuadro animated fadeInUp _7"><label>Chat:</label></br>{{ $company->chat }}</div>
                    <div class="cuadro animated fadeInUp _8"><label>Geolocalización:</label></br>{{ $company->geolocation }}</div>
                    <div class="cuadro animated fadeInUp _9"><label>Orientación:</label></br>{{ $company->orientation }}</div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="https://code.highcharts.com/highcharts.js"></script>
@stop
