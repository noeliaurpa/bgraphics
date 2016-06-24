@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

        <div class="col-md-10 col-md-offset-1">

            <div id="container" class="animated fadeIn _2" style="width:100%; height:400px;"></div>
            <!-- {{ $question[0]->number }} -->
            <form class="recalcular" action="{{ url('/question/recalc') }}/{{ $question[0]->number }}" method="post">
                {{ csrf_field() }}
                <?php $cont = 0 ?>
                @if (Request::is('question/recalc/*'))

                    @foreach ($answers as $answer)
                    <!-- zoomInDown zoomInUp bounceInUp fadeInUp -->
                    <div class="form-group">
                        <label>{{ $answer->description }}</label>
                        <input class="form-control animated fadeInUp _5" type="text" name="{{ $cont }}" value="{{ $answer->percentage }}"></br>
                    </div>
                    <?php $cont++; ?>
                    @endforeach
                    <input class="animated fadeInUp _10" type="submit" value="Recalcular">

                @else

                    @foreach ($answers as $answer)
                    <!-- zoomInDown zoomInUp bounceInUp fadeInUp -->
                    <div class="form-group">
                        <label>{{ $answer->description }}</label>
                        <input class="form-control animated fadeInUp _5" type="text" name="{{ $cont }}" value="{{ $answer->percentage }}"></br>
                    </div>
                    <?php $cont++; ?>
                    @endforeach
                    <input class="animated fadeInUp _10" type="submit" value="Recalcular">

                @endif



            </form>

            <script type="text/javascript">
            $(function () {
                $('#container').highcharts(
                    {!! json_encode($yourFirstChart) !!}
                );
            })
            </script>

        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="https://code.highcharts.com/highcharts.js"></script>
@stop
