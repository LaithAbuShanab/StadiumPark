<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>{{env('APP_NAME')}}  | {{$title}}</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="ballwhizz,football">
    <meta name="author" content="Ehab">
    <meta name="keywords" content="ballwhizz">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="shortcut icon" href="{{frontend('assets/images/soccer/favicons/favicon.ico')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{frontend('assets/images/soccer/favicons/favicon-120.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{frontend('assets/images/soccer/favicons/favicon-152.png')}}">

    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CSource+Sans+Pro:400,700" rel="stylesheet">

    <link href="{{frontend('assets/vendor/bootstrap/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{frontend('assets/fonts/font-awesome/css/all.min.css')}}" rel="stylesheet">
    <link href="{{frontend('assets/fonts/simple-line-icons/css/simple-line-icons.css')}}" rel="stylesheet">
    <link href="{{frontend('assets/fonts/simple-line-icons/css/simple-line-icons.css')}}" rel="stylesheet">
    <link href="{{frontend('assets/vendor/magnific-popup/dist/magnific-popup.css')}}" rel="stylesheet">
    <link href="{{frontend('assets/vendor/slick/slick.css')}}" rel="stylesheet">
    <link href="{{frontend('assets/css/style-soccer.css')}}" rel="stylesheet">
    @stack('css')

</head>
<body data-template="template-soccer">
@include('sweetalert::alert')

<div class="site-wrapper clearfix">
    <div class="site-overlay"></div>

    <div class="header-mobile clearfix" id="header-mobile">
        <div class="header-mobile__logo">
            <a href="{{url('/home')}}">
                <img src="{{avatar('logo.png')}}" srcset="{{avatar('logo.png')}} 2x" alt="Alchemists" class="header-mobile__logo-img">
            </a>
        </div>

        <div class="header-mobile__inner">
            <a id="header-mobile__toggle" class="burger-menu-icon">
                <span class="burger-menu-icon__line"></span></a>
            <span class="header-mobile__search-icon" id="header-mobile__search-icon"></span>
        </div>
    </div>
