@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="login">
                <img id="bra" class="animated fadeInDown _10" src="{{asset('images/bra.png')}}" alt="" /><a class="logo animated fadeInDown" href="{{ url('/') }}">boober<!--img src="{{asset('images/logo.png')}}" alt="" /--></a>
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <div class="col-md-12">
                            <input id="email" placeholder="Email" type="email" class="form-control" name="email" value="{{ old('email') }}">
                            @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <div class="col-md-12">
                            <input id="password" placeholder="Contraseña" type="password" class="form-control" name="password">
                            @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember"> Recuérdame
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn_boober">Log In</button>
                            <a href="/register">Register</a>
                            <!--a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a-->
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
