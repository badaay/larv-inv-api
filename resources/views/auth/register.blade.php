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
                <div class="app-right-section">
                    <div class="app-brand"><span class="highlight">Invento</span> for Developer</div>
                    <div class="app-info">
                        
                        <ul class="list">
                            <li>
                                <div class="icon">
                                    <i class="fa fa-paper-plane-o" aria-hidden="true"></i>
                                </div>
                                <div class="title">Increase <b>Productivity</b></div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fa fa-cubes" aria-hidden="true"></i>
                                </div>
                                <div class="title">Lot of <b>Components</b></div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fa fa-usd" aria-hidden="true"></i>
                                </div>
                                <div class="title">Forever <b>Free</b></div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="app-form">
                    <div class="form-suggestion">
                        Create an account for free.
                    </div>
                    <form role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                        <div class="input-group {{ $errors->has('name') ? ' has-error' : '' }}">
                            <span class="input-group-addon" id="basic-addon1">
                            <i class="fa fa-paper-plane" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" placeholder="Fullname" aria-describedby="basic-addon1" id="name"  name="name" value="{{ old('name') }}" required autofocus>
                        </div>
                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                        <div class="input-group {{ $errors->has('email') ? ' has-error' : '' }}">
                            <span class="input-group-addon" id="basic-addon2">
                            <i class="fa fa-envelope" aria-hidden="true"></i></span>
                            <input id="email" type="email"  class="form-control" placeholder="Email" aria-describedby="basic-addon2" name="email" value="{{ old('email') }}" required>
                        </div>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                        <div class="input-group  {{ $errors->has('password') ? ' has-error' : '' }}">
                            <span class="input-group-addon" id="basic-addon3">
                            <i class="fa fa-key" aria-hidden="true"></i></span>
                            <input id="password" type="password" class="form-control" placeholder="Password" aria-describedby="basic-addon3" name="password" required>
                        </div>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon4">
                            <i class="fa fa-check" aria-hidden="true"></i></span>
                            <input id="password-confirm" type="password" class="form-control" placeholder="Confirm Password" aria-describedby="basic-addon4" name="password_confirmation" required>
                        </div>
                        <div class="text-center">
                            <input type="submit" class="btn btn-success btn-submit" value="Register">
                        </div>
                    </form>
                    <div class="form-line">
                        <div class="title">OR</div>
                    </div>
                    <div class="form-footer">
                        <button type="button" class="btn btn-default btn-sm btn-social __facebook">
                        <div class="info">
                            <i class="icon fa fa-facebook-official" aria-hidden="true"></i>
                            <span class="title">Register w/ Facebook</span>
                        </div>
                        </button>

                        <a class="btn btn-link" href="{{ route('login') }}">
                            Already have an account?
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