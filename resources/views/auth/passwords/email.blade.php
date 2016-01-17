@extends('layouts.app')

        <!-- Main Content -->
@section('content')
    <section id="authenty_preview">
        <section id="signin_main" class="authenty signin-main">
            <div class="section-content">
                <div class="wrap">
                    <div class="container">
                        <div class="form-wrap">
                            <div class="row">

                                @if (session('status'))
                                    <div class="alert alert-success">
                                        {{ session('status') }}
                                    </div>
                                @endif

                                <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
                                    {!! csrf_field() !!}

                                    <div class="form-header">
                                        <i class="fa fa-user"></i>
                                    </div>


                                    <div class="form-main">
                                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                                            <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email">

                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                            @endif
                                        </div>


                                        <div class="form-group">

                                            <button type="submit" class="btn btn-block signin">

                                                Send Password Reset Link
                                            </button>

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
