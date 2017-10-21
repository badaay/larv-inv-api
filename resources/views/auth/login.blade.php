@extends('layouts.template')
@section('content')
<div class="app-container app-login">
    <div class="flex-center">
        <div class="app-header"></div>
        <div class="app-body">
            <div class="loader-container text-center">
                <div class="icon">
                    <div class="sk-folding-cube">
                        <div class="sk-cube1 sk-cube"></div>
                        <div class="sk-cube2 sk-cube"></div>
                        <div class="sk-cube4 sk-cube"></div>
                        <div class="sk-cube3 sk-cube"></div>
                    </div>
                </div>
                <div class="title">Logging in...</div>
            </div>
            <div class="app-block">
                <div class="app-form">
                    <div class="form-header">
                        <div class="app-brand"><span class="highlight">Invento</span> for Developer</div>
                    </div>
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                    <form role="form" method="POST" action="{{ route('login') }}">
                         {{ csrf_field() }}
                        <div class="input-group {{ $errors->has('email') ? ' has-error' : '' }}">
                            <span class="input-group-addon" id="basic-addon1">
                            <i class="fa fa-envelope" aria-hidden="true"></i></span>
                            <input type="email" class="form-control" placeholder="Email" aria-describedby="basic-addon1" name="email" value="{{ old('email') }}" required autofocus>
                        </div>
                        
                        <div class="input-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <span class="input-group-addon" id="basic-addon2">
                            <i class="fa fa-key" aria-hidden="true"></i></span>
                            <input id="password" name="password" type="password" class="form-control" placeholder="Password" aria-describedby="basic-addon2" required>
                        </div>

                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                        <div class="text-center">
                            <input type="submit" class="btn btn-success btn-submit" value="Login">
                        </div>
                    </form>
                    <div class="form-line">
                        <div class="title">OR</div>
                    </div>
                    <div class="form-footer">
                        <button type="button" class="btn btn-default btn-sm btn-social __facebook">
                        <div class="info">
                            <i class="icon fa fa-facebook-official" aria-hidden="true"></i>
                            <span class="title">Login with Facebook</span>
                        </div>
                        </button>
                        <a class="btn btn-link" href="{{ route('register') }}">
                            Create an account.
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="app-footer">
        </div>
    </div>
</div>
@endsection