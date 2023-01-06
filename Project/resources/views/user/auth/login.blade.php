<!DOCTYPE html>
<html lang="ar">
<head>
    <title>{{env('APP_NAME')}}</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Sports Club, League and News HTML Template">
    <meta name="author" content="Dan Fisher">
    <meta name="keywords" content="sports club news HTML template">
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

</head>
<body data-template="template-soccer">
<div class="site-wrapper clearfix">
    <div class="site-overlay"></div>

    <div class="header-mobile clearfix" id="header-mobile">
        <div class="header-mobile__logo">
            <a href="{{url('/home')}}">
{{--                <img src="{{frontend('assets/images/soccer/logo.png')}}" srcset="{{frontend('assets/images/soccer/logo@2x.png')}} 2x" alt="Alchemists" class="header-mobile__logo-img">--}}
                <img src="{{avatar('logo.png')}}" srcset="{{avatar('logo.png')}} 2x" alt="Alchemists" class="header-mobile__logo-img">

            </a>
        </div>

        <div class="header-mobile__inner">
            <a id="header-mobile__toggle" class="burger-menu-icon"><span class="burger-menu-icon__line"></span></a>

        </div>

    </div>




<header class="header header--layout-1">
    <div class="header__top-bar clearfix">
        <div class="container">
            <div class="header__top-bar-inner">
                <ul class="nav-account">
                    <li class="nav-account__item">
                        <a href="#" id="btn-login-register" data-toggle="modal" data-target="#modal-login-register-tabs">
                            Login - <span class="highlight">Register</span>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </div>
    <div class="header__primary">
        <div class="container">
            <div class="header__primary-inner">
                <div class="header-logo">

                </div>
                <nav class="main-nav clearfix">
                    <ul class="main-nav__list">
                    </ul>
                </nav>


            </div>
        </div>
    </div>
</header>


<div class="hero-slider-wrapper">
    <div class="hero-slider" style="height: 930px!important">
        <div style="height: 930px!important;" class="hero-slider__item hero-slider__item--img1">
            <div class="container hero-slider__item-container">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <div class="post__meta-block post__meta-block--top">
                            <div class="post__category">
                                <span class="label posts__cat-label">The Team</span>
                            </div>

                            <h1 class="page-heading__title">
                                <a href="">The Alchemists

                                    <span class="highlight">won the last game</span>
                                    2-0 against Clovers</a>
                            </h1>

                            <ul class="post__meta meta">
                                <li class="meta__item meta__item--date">
                                    <time datetime="2017-08-23">August 28th, 2018</time>
                                </li>
                                <li class="meta__item meta__item--views">2369</li>

                                <li class="meta__item meta__item--likes">
                                    <a href="#">
                                        <i class="meta-like meta-like--active icon-heart"></i> 530
                                    </a>
                                </li>
                                <li class="meta__item meta__item--comments">
                                    <a href="#">18</a>
                                </li>
                            </ul>

                            <div class="post-author">
                                <figure class="post-author__avatar">
                                    <img src="{{frontend('assets/images/samples/avatar-1.jpg')}}" alt="Post Author Avatar">
                                </figure>
                                <div class="post-author__info">
                                    <h4 class="post-author__name">James Spiegel</h4>
                                    <span
                                        class="post-author__slogan">Alchemists Ninja</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div style="height: 930px!important;" class="hero-slider__item hero-slider__item--img2">
            <div class="container hero-slider__item-container">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <div class="post__meta-block post__meta-block--top">
                            <div class="post__category"><span class="label posts__cat-label">Injuries</span></div>
                            <h1 class="page-heading__title"><a
                                    href="_soccer_blog-post-1.html">Franklin Stevens has <span class="highlight">a knee fracture</span>
                                    and is gona be out</a></h1>
                            <ul class="post__meta meta">
                                <li class="meta__item meta__item--date">
                                    <time datetime="2017-08-23">August 28th, 2018</time>
                                </li>
                                <li class="meta__item meta__item--views">2369</li>
                                <li class="meta__item meta__item--likes"><a href="#"><i
                                            class="meta-like meta-like--active icon-heart"></i> 530</a></li>
                                <li class="meta__item meta__item--comments"><a href="#">18</a></li>
                            </ul>
                            <div class="post-author">
                                <figure class="post-author__avatar"><img src="{{frontend('assets/images/samples/avatar-1.jpg')}}"
                                                                         alt="Post Author Avatar"></figure>
                                <div class="post-author__info"><h4 class="post-author__name">James Spiegel</h4><span
                                        class="post-author__slogan">Alchemists Ninja</span></div>
                            </div></div></div>
                </div>
            </div>
        </div>
        <div style="height: 930px!important;" class="hero-slider__item hero-slider__item--img3">
            <div class="container hero-slider__item-container">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <div class="post__meta-block post__meta-block--top">
                            <div class="post__category"><span class="label posts__cat-label">The Team</span></div>
                            <h1 class="page-heading__title"><a
                                    href="_soccer_blog-post-1.html">The New <span
                                        class="highlight">Eco Friendly Stadium</span>
                                    won a leafy award in 2016</a></h1><!-- Post Title / End -->
                            <!-- Post Meta Info -->
                            <ul class="post__meta meta">
                                <li class="meta__item meta__item--date">
                                    <time datetime="2017-08-23">August 28th, 2018</time>
                                </li>
                                <li class="meta__item meta__item--views">2369</li>
                                <li class="meta__item meta__item--likes"><a href="#"><i
                                            class="meta-like meta-like--active icon-heart"></i> 530</a></li>
                                <li class="meta__item meta__item--comments"><a href="#">18</a></li>
                            </ul>
                            <div class="post-author">
                                <figure class="post-author__avatar"><img src="{{frontend('assets/images/samples/avatar-1.jpg')}}"
                                                                         alt="Post Author Avatar"></figure>
                                <div class="post-author__info"><h4 class="post-author__name">James Spiegel</h4><span
                                        class="post-author__slogan">Alchemists Ninja</span></div>
                            </div></div></div>
                </div>
            </div>
        </div>
    </div>
    <div class="hero-slider-thumbs-wrapper">
        <div class="container">
            <div class="hero-slider-thumbs posts posts--simple-list">
                <div class="hero-slider-thumbs__item">
                    <div class="posts__item posts__item--category-1">
                        <div class="posts__inner">
                            <div class="posts__cat"><span class="label posts__cat-label">The Team</span></div>
                            <h6 class="posts__title">The Alchemists won the last game 2-0 against Clovers</h6>
                            <time datetime="2017-12-12" class="posts__date">August 28th, 2018</time>
                        </div>
                    </div>
                </div>
                <div class="hero-slider-thumbs__item">
                    <div class="posts__item posts__item--category-2">
                        <div class="posts__inner">
                            <div class="posts__cat"><span class="label posts__cat-label">Injuries</span></div>
                            <h6 class="posts__title">Franklin Stevens has a knee fracture and is gona be out</h6>
                            <time datetime="2017-12-12" class="posts__date">August 28th, 2018</time>
                        </div>
                    </div>
                </div>
                <div class="hero-slider-thumbs__item">
                    <div class="posts__item posts__item--category-1">
                        <div class="posts__inner">
                            <div class="posts__cat"><span class="label posts__cat-label">The Team</span></div>
                            <h6 class="posts__title">The New Eco Friendly Stadium won a leafy award in 2016</h6>
                            <time datetime="2017-12-12" class="posts__date">August 28th, 2018</time>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="modal-login-register-tabs" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg modal--login modal--login-only" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="modal-account-holder" style="background: rgba(16,47,4,0.42)">
                    <div class="modal-account__item modal-account__item--logo" style="background-image: url('{{avatar('logo.png')}}')" >
                    </div>


                    <div class="modal-account__item">
                        <div class="tab-content">

                            <div role="tabpanel" class="tab-pane fade show active" id="tab-login">
                                <form action="{{url('login')}}"  method="post" id="login-form" class="modal-form">
                                    @csrf
                                    <h5 class="text-center">Login</h5>

                                    @if($errors->has('error_login'))
                                        <div class="alert alert-danger text-center" id="err_login_msg">
                                            {{$errors->first('error_login')}}
                                        </div>
                                    @endif
                                    <div class="form-group text-center">
                                        <input type="email" name="email" class="form-control text-center" autocomplete="off" placeholder="email address">
                                    </div>

                                    <div class="form-group text-center">
                                        <input type="password" name="password" class="form-control text-center" autocomplete="off" placeholder="password">
                                    </div>

                                    <div class="form-group form-group--pass-reminder">
                                        <label class="checkbox checkbox-inline">
                                            <input type="checkbox" id="inlineCheckbox1" value="option1" checked="checked">
                                            Remember me
                                            <span class="checkbox-indicator"></span>
                                        </label>
                                    </div>
                                    <div class="form-group form-group--submit">
                                        <button  type="submit" class="btn btn-primary-inverse btn-block">Login</button></div>
                                    <div class="modal-form--social"><h6>Follow us</h6>
                                        <ul class="social-links social-links--btn text-center">
                                            <li class="social-links__item">
                                                <a href="#" class="social-links__link social-links__link--lg social-links__link--fb">
                                                    <i class="fab fa-facebook"></i>
                                                </a>
                                            </li>

                                            <li class="social-links__item">
                                                <a href="#" class="social-links__link social-links__link--lg social-links__link--twitter">
                                                    <i class="fab fa-twitter"></i>
                                                </a>

                                            </li>
                                            <li class="social-links__item">
                                                <a href="#" class="social-links__link social-links__link--lg social-links__link--gplus">
                                                    <i class="fab fa-google-plus"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </form>
                            </div>


                            <div role="tabpanel" class="tab-pane fade" id="tab-register">

                                <form action="{{url('register')}}" method="post"  id="register-form" class="modal-form text-center">
                                    @csrf
                                    <h5>Register</h5>

                                    <div class="form-group ">
                                        <input type="text" name="name" autocomplete="off" class="form-control text-center" placeholder="name">
                                    </div>

                                    <div class="form-group">
                                        <input type="text" name="mobile" autocomplete="off" class="form-control text-center" placeholder="mobile">
                                    </div>


                                    <div class="form-group">
                                        <input type="email" name="email" autocomplete="off" class="form-control text-center" placeholder="email">
                                    </div>

                                    <div class="form-group">
                                        <input type="password" autocomplete="off" name="password" class="form-control text-center" placeholder="password">

                                    </div>


                                    <div class="form-group form-group--submit">
                                        <button  type="submit" class="btn btn-success btn-block">Register</button>
                                    </div>

                                    <div class="modal-form--note">{{env('APP_NAME')}}</div>
                                </form>
                            </div>


                        </div>


                        <div class="nav-tabs-login-wrapper">
                            <ul class="nav nav-tabs nav-justified nav-tabs--login" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#tab-login" role="tab" data-toggle="tab">Sign In</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="register-tab" href="#tab-register" role="tab" data-toggle="tab">Register</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




</div>


<script src="{{frontend('assets/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{frontend('assets/vendor/jquery/jquery-migrate.min.js')}}"></script>
<script src="{{frontend('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{frontend('assets/js/core.js')}}"></script><!-- Vendor JS -->
<script src="{{frontend('assets/vendor/twitter/jquery.twitter.js')}}"></script><!-- Template JS -->
<script src="{{frontend('assets/js/init.js')}}"></script>
<script>
    $(function (){
        $("#btn-login-register").click();
        $("#open-popup-register").click(function (){
            $("#register-tab").click();
        });
    });

</script>

</body>
</html>
