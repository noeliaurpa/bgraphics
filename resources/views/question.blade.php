@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

        <div class="col-md-10 col-md-offset-1">

            <div id="container" style="width:100%; height:400px;"></div>

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
