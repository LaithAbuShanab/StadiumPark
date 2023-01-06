<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Pet Point ecommerce system">
    <meta name="keywords" content="Pet Point">
    <meta name="author" content="Pet Point">
    <title>{{$title}}</title>
    <link rel="apple-touch-icon" href="{{avatar('favicon.ico')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{avatar('favicon.ico')}}">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">



        <link rel="stylesheet" type="text/css" href="{{theme('app-assets/css/vendors.css')}}">
        <link rel="stylesheet" type="text/css" href="{{theme('app-assets/css/prism.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{theme('app-assets/css/app.css')}}">
        <link rel="stylesheet" type="text/css" href="{{theme('app-assets/css/vertical-menu.css')}}">
        <link rel="stylesheet" type="text/css" href="{{theme('app-assets/css/palette-gradient.css')}}">

    <style>
        .wrapper {
            background: #265f27;
            background: -webkit-gradient(linear, left top, right bottom, from(#265f27), to(#3d8d3e));
            background: linear-gradient(to bottom right, #265f27 0%, #3d8d3e 100%);
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }


        form {
            padding: 20px 0;
            position: relative;
            z-index: 2;
        }
        .bg-bubbles {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
        }

        .bg-bubbles li {
            position: absolute;
            list-style: none;
            display: block;
            width: 40px;
            height: 40px;
            background-color: rgba(255, 255, 255, 0.15);
            bottom: -160px;
            -webkit-animation: square 25s infinite;
            animation: square 25s infinite;
            -webkit-transition-timing-function: linear;
            transition-timing-function: linear;
        }

        .bg-bubbles li:nth-child(1) {
            left: 10%;
        }

        .bg-bubbles li:nth-child(2) {
            left: 20%;
            width: 80px;
            height: 80px;
            -webkit-animation-delay: 2s;
            animation-delay: 2s;
            -webkit-animation-duration: 17s;
            animation-duration: 17s;
        }

        .bg-bubbles li:nth-child(3) {
            left: 25%;
            -webkit-animation-delay: 4s;
            animation-delay: 4s;
        }

        .bg-bubbles li:nth-child(4) {
            left: 40%;
            width: 60px;
            height: 60px;
            -webkit-animation-duration: 22s;
            animation-duration: 22s;
            background-color: rgba(255, 255, 255, 0.25);
        }

        .bg-bubbles li:nth-child(5) {
            left: 70%;
        }

        .bg-bubbles li:nth-child(6) {
            left: 80%;
            width: 120px;
            height: 120px;
            -webkit-animation-delay: 3s;
            animation-delay: 3s;
            background-color: rgba(255, 255, 255, 0.2);
        }

        .bg-bubbles li:nth-child(7) {
            left: 32%;
            width: 160px;
            height: 160px;
            -webkit-animation-delay: 7s;
            animation-delay: 7s;
        }

        .bg-bubbles li:nth-child(8) {
            left: 55%;
            width: 20px;
            height: 20px;
            -webkit-animation-delay: 15s;
            animation-delay: 15s;
            -webkit-animation-duration: 40s;
            animation-duration: 40s;
        }

        .bg-bubbles li:nth-child(9) {
            left: 25%;
            width: 10px;
            height: 10px;
            -webkit-animation-delay: 2s;
            animation-delay: 2s;
            -webkit-animation-duration: 40s;
            animation-duration: 40s;
            background-color: rgba(255, 255, 255, 0.3);
        }

        .bg-bubbles li:nth-child(10) {
            left: 90%;
            width: 160px;
            height: 160px;
            -webkit-animation-delay: 11s;
            animation-delay: 11s;
        }

        @-webkit-keyframes square {
            0% {
                -webkit-transform: translateY(0);
                transform: translateY(0);
            }
            100% {
                -webkit-transform: translateY(-700px) rotate(600deg);
                transform: translateY(-700px) rotate(600deg);
            }
        }

        @keyframes square {
            0% {
                -webkit-transform: translateY(0);
                transform: translateY(0);
            }
            100% {
                -webkit-transform: translateY(-700px) rotate(600deg);
                transform: translateY(-700px) rotate(600deg);
            }
        }

    </style>



</head>
<body class="vertical-layout vertical-menu 1-column  bg-cyan bg-lighten-2 menu-expanded blank-page blank-page"
      data-open="click" data-menu="vertical-menu" data-col="1-column">


<div class="wrapper ">


    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <section class="flexbox-container">
                    <div class="col-12 d-flex align-items-center justify-content-center">
                        <div class="col-md-4 col-10 box-shadow-2 p-0" >
                            <div class="card border-grey border-lighten-3 m-0" style="background-color: #f7f7f7!important;">
                                <div class="card-header border-0">
                                    <div class="card-title text-center">
                                        <div class="p-1">
                                            <img src="{{avatar('logo.png')}}" width="150"  alt="branding logo">
                                        </div>
                                    </div>
                                    <h6 class="card-subtitle line-on-side text-muted text-center font-small-4 pt-2" >
                                        <span>Enter Your Information To Access Dashboard</span>
                                    </h6>
                                </div>

                                <div class="card-content">
                                    <div class="card-body pt-0">
                                        @if($errors->has('error_login'))
                                            <div class="alert round bg-danger alert-icon-left alert-arrow-left alert-dismissible mb-2"
                                                 role="alert">
                                                <span class="alert-icon"><i class="la la-thumbs-o-down"></i></span>
                                                <strong>{{$errors->first('error_login')}}</strong>
                                            </div>
                                        @endif

                                        <form class="form-horizontal" method="post" action="{{url('admin/login')}}">
                                            @csrf
                                            <fieldset class="form-group floating-label-form-group ">
                                                <label for="user-name">Email Address</label>
                                                <input type="text" name="email" autocomplete="off" class="form-control" placeholder="Email Address">
                                            </fieldset>

                                            <fieldset class="form-group floating-label-form-group mb-1">
                                                <label for="user-password">Password</label>
                                                <input type="password" name="password" class="form-control" placeholder="Password" autocomplete="off">
                                            </fieldset>

                                            <div class="form-group row">
                                                <div class="col-md-6 col-12 text-center text-sm-left">
                                                    <fieldset>
                                                        <input type="checkbox" name="remember_me" style="width: 20px; height: 17px" id="remember-me" class="chk-remember">
                                                        <label for="remember-me">Remember Me</label>
                                                    </fieldset>
                                                </div>

                                            </div>
                                            <button type="submit" class="btn btn-outline-success  btn-block">
                                                <i class="ft-unlock"></i>
                                                Login
                                            </button>
                                        </form>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>

        <ul class="bg-bubbles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>
</div>


<script src="{{theme('app-assets/js/vendors.min.js')}}" type="text/javascript"></script>
<script src="{{theme('app-assets/js/app-menu.js')}}" type="text/javascript"></script>
<script src="{{theme('app-assets/js/app.js')}}" type="text/javascript"></script>

</body>
</html>
