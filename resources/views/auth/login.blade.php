@extends('layouts.app')

@section('content')
    <section id="authenty_preview">
        <section id="signin_main" class="authenty signin-main">
            <div class="section-content">
                <div class="wrap">
                    <div class="container">
                        <div class="form-wrap">
                            <div class="row">


                                <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                                    {!! csrf_field() !!}

                                    <div class="form-header">
                                        <i class="fa fa-user"></i>
                                    </div>


                                    <div class="form-main">
                                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                                            <input type="email" id="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email">

                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                            @endif

                                        </div>

                                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                                            <input type="password" id="password" class="form-control" name="password" placeholder="Password">

                                            @if ($errors->has('password'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                            @endif

                                        </div>



                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="checkbox">
                                                        <label class="remembercheckbox">
                                                            <input type="checkbox" name="remember"> Remember Me
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <button id="signIn" type="submit" class="btn btn-block signin">Sign In</button>
                                                </div>
                                            </div>

                                            <div class="row socialdiv">
                                                <div class="col-md-3 col-xs-3" >
                                                    <a href="auth/facebook" role="button">
                                                        <img src="assets/social/fb.png" class="social_logo" />
                                                    </a>
                                                </div>
                                                <div class="col-md-3 col-xs-3">
                                                    <a href="auth/google" role="button">
                                                        <img src="assets/social/google.png" class="social_logo"/>
                                                    </a>
                                                </div>
                                                <div class="col-md-3 col-xs-3">
                                                    <a href="auth/linkedin" role="button">
                                                        <img src="assets/social/linkedin.png" class="social_logo" />
                                                    </a>
                                                </div>
                                                <div class="col-md-3 col-xs-3">
                                                    <a href="auth/github" role="button">
                                                        <img src="assets/social/git.png" class="social_logo" />
                                                    </a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>


                                    <div class="form-footer">
                                        <div class="row">
                                            <div class="col-xs-7">
                                                <i class="fa fa-unlock-alt"></i>
                                                <a href="{{ url('/password/reset') }}" >Forgot password?</a>
                                            </div>
                                            <div class="col-xs-5">
                                                <i class="fa fa-check"></i>
                                                <a href="{{ url('/register') }}" >Sign Up</a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
@endsection
