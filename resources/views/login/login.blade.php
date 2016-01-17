<?php
/**
 * Created by PhpStorm.
 * User: davit
 * Date: 11/01/16
 * Time: 16:05
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Login, registration forms">
    <meta name="author" content="Seong Lee">

    <title>Authenty</title>

    <!-- Stylesheets -->
    <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/animation.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/authenty.css')}}" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="{{asset('assets/css/font-awesome.css')}}" rel="stylesheet">


</head>
<body>
<form role="form" method="POST" action="" class="loginform">
    <section id="authenty_preview">
        <section id="signin_main" class="authenty signin-main">
            <div class="section-content">
                <div class="wrap">
                    <div class="container">
                        <div class="form-wrap">
                            <div class="row">
                                <div class="title" data-animation="fadeInDown" data-animation-delay=".8s">
                                    <h1>Authorization</h1>
                                    <h5>Please, complete the required fields</h5>
                                </div>
                                <div id="form_1" data-animation="bounceIn">
                                    <div class="form-header">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <div class="form-main">
                                        <div class="form-group">
                                            <input type="text" id="username" class="form-control" placeholder="Username" name="username" required="required">
                                            <input type="password" id="password" class="form-control" placeholder="Password" name="password" required="required">
                                        </div>
                                        <button id="signIn" type="submit" class="btn btn-block signin">Sign In</button>
                                    </div>
                                    <div class="form-footer">
                                        <div class="row">
                                            <div class="col-md-7">
                                                <i class="fa fa-unlock-alt"></i>
                                                <a href="" >Forgot password?</a>
                                            </div>
                                            <div class="col-md-5">
                                                <i class="fa fa-check"></i>
                                                <a href="" >Sign Up</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
</form>
<!-- js library -->
<script src="{{ URL::asset('https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js') }}"></script>
<script src="{{ URL::asset('http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.0/jquery-ui.min.js') }}"></script>

<script type="text/javascript" src="{{url('assets/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{url('assets/js/waypoints.min.js')}}"></script>

<script>
    (function($) {

        // get full window size
        $(window).on('load resize', function(){
            var w = $(window).width();
            var h = $(window).height();

            $('section').height(h);
        });


        // set focus on input
        var firstInput = $('section').find('input[type=text], input[type=email]').filter(':visible:first');

        if (firstInput != null) {
            firstInput.focus();
        }

        $('section').waypoint(function (direction) {
            var target = $(this).find('input[type=text], input[type=email]').filter(':visible:first');
            target.focus();
        }, {
            offset: 300
        }).waypoint(function (direction) {
            var target = $(this).find('input[type=text], input[type=email]').filter(':visible:first');
            target.focus();
        }, {
            offset: -400
        });


        // animation handler
        $('[data-animation-delay]').each(function () {
            var animationDelay = $(this).data("animation-delay");
            $(this).css({
                "-webkit-animation-delay": animationDelay,
                "-moz-animation-delay": animationDelay,
                "-o-animation-delay": animationDelay,
                "-ms-animation-delay": animationDelay,
                "animation-delay": animationDelay
            });
        });

        $('[data-animation]').waypoint(function (direction) {
            if (direction == "down") {
                $(this).addClass("animated " + $(this).data("animation"));
            }
        }, {
            offset: '90%'
        }).waypoint(function (direction) {
            if (direction == "up") {
                $(this).removeClass("animated " + $(this).data("animation"));
            }
        }, {
            offset: '100%'
        });

    })(jQuery);
</script>
</body>
</html>