@extends('layouts.app')

@section('content')
    <section id="authenty_preview">
        <section id="signin_main" class="authenty signin-main">
            <div class="section-content">
                <div class="wrap">
                    <div class="container">
                        <div class="form-wrap">
                            <div class="row">

                                <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                                    {!! csrf_field() !!}

                                    <div class="form-header">
                                        <i class="fa fa-user"></i>
                                    </div>

                                    <div class="form-main">
                                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">



                                            <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Name">

                                            @if ($errors->has('name'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                            @endif

                                        </div>

                                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                                            <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email">

                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                            @endif

                                        </div>

                                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                                            <input type="password" class="form-control" name="password" placeholder="Password">

                                            @if ($errors->has('password'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                            @endif

                                        </div>

                                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">

                                            <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password">

                                            @if ($errors->has('password_confirmation'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                            @endif

                                        </div>

                                        <div class="form-group">
                                            <button id="register" type="submit" class="btn btn-block signin">Register</button>
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
